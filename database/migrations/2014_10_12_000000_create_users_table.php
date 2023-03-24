<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            
            $table->string('name');
            $table->string('email')
                ->unique();
            
            $table->float('cash_total', 15, 2)
                ->default(0,00);
        
            $table->float('cash_in_debt', 15, 2)
                ->default(0,00);

            $table->float('investments_profits', 15, 2)
                ->default(0,00);

            $table->unsignedBigInteger('best_investment_id')
                ->nullable();
    
            $table->float('total_debt', 15, 2)
                ->default(0,00);

            $table->unsignedBigInteger('worst_debt_id')
                ->nullable();
    
            $table->float('total_salary', 15, 2)
                ->default(0,00);

            $table->unsignedBigInteger('best_salary_id')
                ->nullable();
    
            $table->float('total_income', 15, 2)
                ->default(0,00);
                
            $table->unsignedBigInteger('best_income_id')
                ->nullable();
    
            $table->unsignedBigInteger('main_bank_id')
                ->nullable();
    
            $table->unsignedBigInteger('main_objective_id')
                ->nullable();
    
            $table->timestamp('email_verified_at')
                ->nullable();
    
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
