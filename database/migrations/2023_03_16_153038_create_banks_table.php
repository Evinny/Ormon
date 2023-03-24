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
        Schema::create('banks', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name', 150);
            $table->unsignedBigInteger('user_id');
            $table->boolean('debit_card')
                ->default(false);

            $table->boolean('credit_card')
                ->default(false);

            $table->float('my_cash_total', 15, 2)
                ->default(0.00);

            $table->float('my_cash_in_debt', 15, 2)
                ->default(0.00);

            $table->float('my_cash_usable', 15, 2)
                ->default(0.00);

            $table->float('my_cash_invested', 15, 2)
                ->default(0.00);
        });
        
        Schema::table('banks', function (Blueprint $table){
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('banks', function (Blueprint $table){
            $table->dropForeign('banks_user_id_foreign')->references('id')->on('users');
        });

        Schema::dropIfExists('banks');
    }
};
