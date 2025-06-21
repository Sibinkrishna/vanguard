<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\Admin; // Make sure this is your admin model namespace

class RolesAndPermissionsSeeder extends Seeder
{
    public function run()
    {
        // Clear cache
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // Define permissions
        $permissions = [
            'add product', 'edit product', 'delete product',
            'add customer', 'edit customer', 'delete customer',
            'view customer', 'view product',
        ];

        // Create permissions
        foreach ($permissions as $perm) {
            Permission::firstOrCreate([
                'name' => $perm,
                'guard_name' => 'admin',
            ]);
        }

        // Create super_admin role
        $superAdminRole = Role::firstOrCreate([
            'name' => 'super_admin',
            'guard_name' => 'admin',
        ]);

        // Assign all permissions to super_admin
        $superAdminRole->syncPermissions(Permission::all());

        // Assign role to Admin with ID 1
        $admin = Admin::find(1);
        if ($admin && !$admin->hasRole('super_admin')) {
            $admin->assignRole('super_admin');
        }
    }
}
