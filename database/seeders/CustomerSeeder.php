<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    public function run(): void
    {
        Customer::create([
            'code' => 'CUST-001',
            'name' => 'Budi Santoso',
            'email' => 'budi@example.com',
            'phone' => '081234567890',
            'address' => 'Jl. Merdeka No. 1, Denpasar',
            'status' => 'active',
        ]);

        Customer::create([
            'code' => 'CUST-002',
            'name' => 'Siti Aminah',
            'email' => 'siti@example.com',
            'phone' => '081234567891',
            'address' => 'Jl. Sudirman No. 5, Denpasar',
            'status' => 'active',
        ]);

        Customer::create([
            'code' => 'CUST-003',
            'name' => 'Andi Wijaya',
            'email' => 'andi@example.com',
            'phone' => '081234567892',
            'address' => 'Jl. Gatot Subroto No. 10, Denpasar',
            'status' => 'inactive',
        ]);
    }
}