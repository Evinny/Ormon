<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adminUsers = [
            'admin-1' => [
                'name' => 'Admin_1',
                'email' => 'Admin_1@gmail.com',
                'cash_total' => 1000.25,
                'password' => Hash::make('admin1!'),
            ],

            'admin-2' => [
                'name' => 'Admin_2',
                'email' => 'Admin_2@gmail.com',
                'cash_total' => 99999.25,
                'password' => Hash::make('admin2!'),
            ],

            'admin-3' => [
                'name' => 'Admin_3',
                'email' => 'Admin_3@gmail.com',
                'cash_total' => 0.00,
                'password' => Hash::make('admin3!'),
            ]
        ];

        foreach($adminUsers as $newUser){
            User::create($newUser);
        }
    }
}