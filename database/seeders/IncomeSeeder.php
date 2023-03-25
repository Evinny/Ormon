<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Income;
use Carbon\Carbon;

class IncomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $incomes = [
            'venda de bolos' => [
                'name' => 'Venda de Bolos diaria',
                'user_id' => 2,
                'received_at' => Carbon::now(),
                'received_from' => 'myself',
                'cash_amount' => 20.00,
                'bank_id' => 1,
            ],

            'dinheiro de pedro' => [
                'name' => 'Dinheiro de Pedro',
                'user_id' => 1,
                'received_at' => Carbon::now(),
                'received_from' => 'Pedro Amorim',
                'cash_amount' => 15.50,
                'bank_id' => 1,
            ],

            'trabalho extra' => [
                'name' => 'Delivery de Ifood',
                'user_id' => 2,
                'received_at' => Carbon::now(),
                'received_from' => 'Ifood Delivery',
                'cash_amount' => 120.90,
                'bank_id' => 2,
            ],
            
        ];

        foreach($incomes as $income){
            Income::create($income);
        }
    }
}