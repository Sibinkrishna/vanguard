<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;

class AdminAuthController extends Controller
{
    public function loginIndex()
    {
        return view('Admin.Auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect()->route('admin.dashboard');
        }

        return back()->withErrors(['email' => 'Invalid credentials']);
    }

    public function showRegister()
    {
        return view('Admin.Auth.register');
    }

    public function register(Request $request)
    {
        $admin = Admin::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $admin->assignRole('admin');

        // Auth::guard('admin')->login($admin);

        return redirect()->route('admin.dashboard');
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }
    public function list(){
        $admins = Admin::paginate(10);
        return view('Admin.Auth.list',compact('admins'));
    }
    public function edit($id)
    {
        $admin = Admin::findOrFail($id);
        $permissions = Permission::all();
        return view('Admin.Auth.edit', compact('admin', 'permissions'));
    }

    public function updatePermissions(Request $request, $id)
    {
        $admin = Admin::findOrFail($id);
        $admin->syncPermissions($request->permissions ?? []);
        return redirect()->back()->with('success', 'Permissions updated');
    }
}
