<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Salary;
use Carbon\Carbon;

class SalarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Salaries = [
            'Trabalho' => [
                'name' => 'Trabalho',
                'user_id' => 1,
                'pay_day' => Carbon::now(),
                'cash_amount' => 600.00,
                'recurrency_days' => 30,
                'description' => 'Trampo como programador estagiario'
            ],

            'Trabalho' => [
                'name' => 'Trabalho',
                'user_id' => 2,
                'pay_day' => Carbon::now(),
                'cash_amount' => 600.00,
                'recurrency_days' => 30,
                'description' => 'Trampo como padeiro estagiario'
            ],

            'Trabalho' => [
                'name' => 'Trabalho',
                'user_id' => 3,
                'pay_day' => Carbon::now(),
                'cash_amount' => 600.00,
                'recurrency_days' => 30,
                'description' => 'Trampo como fazendeiro estagiario'
            ],
            
        ];

        foreach($Salaries as $salary){
            Salary::create($salary);
        }
    }
}
