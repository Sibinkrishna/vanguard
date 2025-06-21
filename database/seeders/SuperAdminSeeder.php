<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
{
    $super = Admin::create([
        'name' => 'Super Admin',
        'email' => 'super@vanguardkerala.com',
        'password' => Hash::make('123123123'),
    ]);

    $super->assignRole('super_admin');
}
}
