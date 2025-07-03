<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Response;

class CustomerController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->search;

        $customers = Customer::when($search, function ($query) use ($search) {
            $query->where('name', 'like', "%$search%")
                ->orWhere('email', 'like', "%$search%")
                ->orWhere('contact1', 'like', "%$search%")
                ->orWhere('contact2', 'like', "%$search%")
                ->orWhere('iot_sim_number', 'like', "%$search%")
                ->orWhere('technician_name', 'like', "%$search%")
                ->orWhere('vehicle_number', 'like', "%$search%")
                ->orWhere('username', 'like', "%$search%")
                ->orWhere('district', 'like', "%$search%")
                ->orWhere('dealer_type', 'like', "%$search%")
                ->orWhere('dealer_name', 'like', "%$search%")
                ->orWhere('imei_number', 'like', "%$search%");
        })->paginate(10);

        return view('Admin.Customer.index', compact('customers', 'search'));
    }

    public function create()
    {
        if (!auth('admin')->user()->can('add customer')) {
            abort(403, 'Unauthorized');
        }
        return view('Admin.Customer.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|in:Tracking,Other',
            'contact1' => 'nullable|string|max:20',
            'contact2' => 'nullable|string|max:20',
            'imei_number' => 'nullable|unique:customers,imei_number',
            'email' => 'required|email',
            'username' => 'nullable|string|max:255|unique:customers,username',
            'vehicle_number' => 'nullable|string|max:255',
            'dealer_type' => 'nullable|in:Dealer,Direct',
            'dealer_name' => 'nullable|required_if:dealer_type,Dealer|string|max:255',
            'district' => 'nullable|string|max:255',

            // add other rules as needed
        ]);

        Customer::create($request->all());
        return redirect()->route('admin.customers.index')->with('success', 'Customer added successfully');
    }
    public function edit($id)
    {
        $customer = Customer::findorFail($id);
        return view('Admin.Customer.edit', compact('customer'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|in:Tracking,Other',
            'contact1' => 'nullable|string|max:20',
            'contact2' => 'nullable|string|max:20',
            'imei_number' => 'nullable|unique:customers,imei_number,' . $id,
            'email' => 'required|email',
            'vehicle_number' => 'nullable|string|max:255',
            'dealer_type' => 'nullable|in:Dealer,Direct',
            'district' => 'nullable|string|max:255',
            // add other rules as needed
        ]);
        $customer = Customer::findOrFail($id);
        $customer->update($request->all());
        return redirect()->route('admin.customers.index')->with('success', 'Customer Updated successfully');
    }

    public function destroy($id)
    {
        if (!auth('admin')->user()->can('delete customer')) {
            abort(403, 'Unauthorized');
        }

        $customer = Customer::findOrFail($id);
        $customer->delete();

        return redirect()->route('admin.customers.index')->with('success', 'Customer deleted successfully');
    }
    public function exportSelectedFields(Request $request)
{
    $fields = $request->input('fields', []);
    $types = $request->input('types', []);
    $district = $request->input('district');

    if (empty($fields)) {
        return redirect()->back()->with('error', 'Please select at least one field to export.');
    }

    // Always include 'type' in export for clarity
    $selectFields = array_unique(array_merge($fields, ['type']));

    $query = Customer::select($selectFields);

    // Apply type filter
    if (!in_array('all', $types) && !empty($types)) {
        $query->whereIn('type', $types);
    }

    // Apply district filter if provided
    if (!empty($district)) {
        $query->where('district', 'like', '%' . $district . '%');
    }

    $customers = $query->get();

    $filename = 'customers_' . now()->format('Ymd_His') . '.xls';

    $headers = [
        "Content-Type" => "application/vnd.ms-excel",
        "Content-Disposition" => "attachment; filename=\"$filename\""
    ];

    $callback = function () use ($customers, $fields) {
        $exportFields = $fields;
        if (!in_array('type', $fields)) {
            $exportFields[] = 'type';
        }

        $output = '<table border="1"><tr>';
        foreach ($exportFields as $field) {
            $output .= '<th>' . ucfirst(str_replace('_', ' ', $field)) . '</th>';
        }
        $output .= '</tr>';

        foreach ($customers as $customer) {
            $output .= '<tr>';
            foreach ($exportFields as $field) {
                $output .= '<td>' . ($customer->$field ?? '') . '</td>';
            }
            $output .= '</tr>';
        }

        $output .= '</table>';
        echo $output;
    };

    return response()->stream($callback, 200, $headers);
}


}
