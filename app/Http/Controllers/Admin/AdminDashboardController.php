<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminDashboardController extends Controller
{
      public function index()
{
    $admin = Auth::guard('admin')->user()->count();
    $customers = Customer::count();
    $products = Product::count();
    return view('Admin.dashboard', compact('admin','customers','products'));
}

}
