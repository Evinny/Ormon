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
        Schema::create('incomes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('user_id');
            $table->string('name', 200);
            $table->float('cash_amount', 15, 2);
            $table->datetime('received_at');
            $table->unsignedBigInteger('bank_id')
                ->nullable();
            $table->unsignedBigInteger('investment_id')
                ->nullable();
            $table->string('received_from', 200)
                ->nullable();
        });

        schema::table('incomes', function (blueprint $table){
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('bank_id')->references('id')->on('banks');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        schema::table('incomes', function (blueprint $table){
            $table->dropforeign('incomes_user_id_foreign');
            //$table->dropforeign('incomes_bank_id_foreign');
        });
        
        Schema::dropIfExists('incomes');
    }
};
