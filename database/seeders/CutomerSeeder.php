<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CutomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 5件の顧客データを手動で追加
        Customer::create([
            'name' => 'John Doe',
            'email' => 'john.doe@example.com',
            'phone' => '123-456-7890',
            'address' => '123 Main St, Hometown, USA',
        ]);

        Customer::create([
            'name' => 'Jane Smith',
            'email' => 'jane.smith@example.com',
            'phone' => '987-654-3210',
            'address' => '456 Elm St, Anytown, USA',
        ]);

        Customer::create([
            'name' => 'Alice Johnson',
            'email' => 'alice.johnson@example.com',
            'phone' => '555-123-4567',
            'address' => '789 Oak St, Somecity, USA',
        ]);

        Customer::create([
            'name' => 'Bob Brown',
            'email' => 'bob.brown@example.com',
            'phone' => '555-987-6543',
            'address' => '101 Pine St, Yourtown, USA',
        ]);

        Customer::create([
            'name' => 'Charlie Davis',
            'email' => 'charlie.davis@example.com',
            'phone' => '555-555-5555',
            'address' => '202 Cedar St, Othertown, USA',
        ]);
    }
}
