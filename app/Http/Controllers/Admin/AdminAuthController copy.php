<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;

class AdminAuthController extends Controller
{
    public function index()
    {
        $admins = Admin::with('roles', 'permissions')->get();
        return view('admin.index', compact('admins'));
    }

    public function create()
    {
        $roles = Role::all();
        $permissions = Permission::all();
        return view('admin.create', compact('roles', 'permissions'));
    }

    public function store(Request $request)
    {
        $admin = Admin::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $admin->assignRole($request->role);
        $admin->givePermissionTo($request->permissions ?? []);

        return redirect()->route('admin.index');
    }
}
