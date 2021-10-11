<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    // here is fake data insert in database using seeder 
    public function run()
    {
        // create multiple data using for loop
        for ($i = 1; $i <= 10; $i++) {
            Customer::create([
                'name' => Str::random(10),
                'email' => Str::random(10) . '@example.com',
                'phone' => rand(60000000000, 100000000000),
                'password' => Hash::make('customer@123'),
            ]);
        }

        Customer::factory(10)->create();
    }
}
