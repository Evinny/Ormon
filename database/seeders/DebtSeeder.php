<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Models\Debt;

class DebtSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Debts = [
            'Internet' => [
                'name' => 'Internet',
                'owner' => 'brisaNet',
                'cash_owed' => 100.00,
                'due_date' => Carbon::now(),
                'is_recorrent' => true,
                'recurrency_day' =>Carbon::now(),
                'user_id' => 1
            ],

            'Internet' => [
                'name' => 'Internet',
                'owner' => 'brisaNet',
                'cash_owed' => 100.00,
                'due_date' => Carbon::now(),
                'is_recorrent' => true,
                'recurrency_day' => Carbon::now(),
                'user_id' => 2
            ],

            'Internet' => [
                'name' => 'Internet',
                'owner' => 'brisaNet',
                'cash_owed' => 100.00,
                'due_date' => Carbon::now(),
                'is_recorrent' => true,
                'recurrency_day' => Carbon::now(),
                'user_id' => 3
            ],

        ];
        
        foreach($Debts as $income){
            Debt::create($income);
        }
    }
}
