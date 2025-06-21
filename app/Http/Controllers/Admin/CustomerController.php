<?php

namespace App\Http\Controllers\Admin;

use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
                ->orWhere('technician_name', 'like', "%$search%");
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
        'email' => 'required|email',
        // add other rules as needed
        ]);

        Customer::create($request->all());
        return redirect()->route('admin.customers.index')->with('success', 'Customer added successfully');
    }
    public function edit($id){
        $customer = Customer::findorFail($id);
        return view('Admin.Customer.edit',compact('customer'));
    }
    public function update(Request $request, $id)
    {
         $request->validate([
        'name' => 'required|string|max:255',
        'type' => 'required|in:Tracking,Other',
        'contact1' => 'nullable|string|max:20',
        'contact2' => 'nullable|string|max:20',
        'email' => 'required|email',

        // add other rules as needed
        ]);
        $customer = Customer::findOrFail($id);
        $customer->update($request->all());
        return redirect()->route('admin.customers.index')->with('success', 'Customer Updated successfully');
    }

    public function destroy($id){
        if (!auth('admin')->user()->can('delete customer')) {
        abort(403, 'Unauthorized');
    }

    $customer = Customer::findOrFail($id);
    $customer->delete();

    return redirect()->route('admin.customers.index')->with('success', 'Customer deleted successfully');
    }
}
