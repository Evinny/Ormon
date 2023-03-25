<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Models\Investment;

class InvestmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $investments = [
            'CDI Investment' => [
                'name' => 'CDI 89%',
                'user_id' => 1,
                'started_at' => Carbon::now()
            ],

            'LCA investment' => [
                'name' => 'LCA 12,25% a.a',
                'user_id' => 1,
                'started_at' => Carbon::now()
            ],

            'Real State Investment' => [
                'name' => 'Real State 16%',
                'user_id' => 2,
                'started_at' => Carbon::now()
            ],
            
        ];

        foreach($investments as $investment){
            Investment::create($investment);
        }
    }
}
