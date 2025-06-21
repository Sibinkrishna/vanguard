<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Permission;

class AdminPermissionController extends Controller
{

    // public function index(Admin $admin)
    // {
    //    $permissions = Permission::all();
    //     return view('Admin.Permissions.edit', compact('admin', 'permissions'));
    // }
    public function edit(Admin $admin)
    {
        $permissions = Permission::all();
        return view('Admin.Permissions.edit', compact('admin', 'permissions'));
    }

    public function update(Request $request, Admin $admin)
    {
        $admin->syncPermissions($request->permissions ?? []);
        return redirect()->route('admin.dashboard')->with('success', 'Permissions updated successfully');
    }
}
