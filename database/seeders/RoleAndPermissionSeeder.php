<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
        public function run()
    {
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // Define only these permissions
        $permissions = [
            'add product', 'edit product', 'delete product',
            'add customer', 'edit customer', 'delete customer',
            'view customer', 'view product',
        ];

        foreach ($permissions as $perm) {
            Permission::firstOrCreate([
                'name' => $perm,
                'guard_name' => 'admin'
            ]);
        }

        // Create super_admin role
        $superAdmin = Role::firstOrCreate([
            'name' => 'super_admin',
            'guard_name' => 'admin'
        ]);

        // Assign all permissions to super_admin
        $superAdmin->syncPermissions(Permission::all());
    }
}
