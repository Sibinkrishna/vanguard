<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Factory as Faker;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $faker = Faker::create();

        // Create 20 Tracking Product Customers
        for ($i = 0; $i < 20; $i++) {
            Customer::create([
                'type' => 'Tracking',
                'name' => $faker->name,
                'address' => $faker->address,
                'contact1' => $faker->phoneNumber,
                'contact2' => $faker->phoneNumber,
                'iot_sim_number' => strtoupper($faker->bothify('SIM###??')),
                'expiry_date' => $faker->dateTimeBetween('+1 month', '+1 year')->format('Y-m-d'),
                'software_name' => $faker->randomElement(['VTS', 'GPS']),
                'renewal_amount' => $faker->randomFloat(2, 100, 1000),
                'technician_name' => $faker->name,
                'comment' => null,
            ]);
        }

        // Create 20 Other Product Customers
        for ($i = 0; $i < 20; $i++) {
            Customer::create([
                'type' => 'Other',
                'name' => $faker->name,
                'address' => $faker->address,
                'contact1' => $faker->phoneNumber,
                'contact2' => $faker->phoneNumber,
                'iot_sim_number' => null,
                'expiry_date' => null,
                'software_name' => null,
                'renewal_amount' => null,
                'technician_name' => null,
                'comment' => $faker->sentence(10),
            ]);
        }
    }
}
