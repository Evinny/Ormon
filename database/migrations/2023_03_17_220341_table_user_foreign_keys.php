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
        schema::table('users', function (blueprint $table){
            $table->foreign('best_investment_id')->references('id')->on('investments');
            $table->foreign('worst_debt_id')->references('id')->on('debts');
            $table->foreign('best_salary_id')->references('id')->on('salaries');
            $table->foreign('best_income_id')->references('id')->on('incomes');
            $table->foreign('main_bank_id')->references('id')->on('banks');
            $table->foreign('main_objective_id')->references('id')->on('objectives');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        schema::table('users', function (blueprint $table){
            $table->dropForeign('users_best_investment_id_foreign');
            $table->dropForeign('users_worst_debt_id_foreign');
            $table->dropForeign('users_best_salary_id_foreign');
            $table->dropForeign('users_best_income_id_foreign');
            $table->dropForeign('users_main_bank_id_foreign');
            $table->dropForeign('users_main_objective_id_foreign');
        });
    }
};
