<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Bank;

class BankSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $banks = [
            'Inter Bank' => [
                'name' => 'Inter Bank',
                'surname' => 'Inter',
                'user_id' => 1,
                'debit_card' => true,
                'credit_card' => false,
                'is_broker' => true,
            ],

            'C6 Bank' => [
                'name' => 'C6 Bank',
                'surname' => 'C6',
                'user_id' => 2,
                'debit_card' => false,
                'credit_card' => false,
            ],
            
            'Nubank' => [
                'name' => 'Nubank',
                'surname' => 'Nu',
                'user_id' => 3,
                'debit_card' => false,
                'credit_card' => true,
            ],
        ];

        foreach($banks as $bank){
            Bank::create($bank);
        }
    }
}
