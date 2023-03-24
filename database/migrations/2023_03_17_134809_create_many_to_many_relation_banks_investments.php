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
        Schema::create('banks_investments', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('bank_id');
            $table->unsignedBigInteger('investment_id');
        });

        Schema::table('banks_investments', function(Blueprint $table){
            $table->foreign('investment_id')->references('id')->on('investments');
            $table->foreign('bank_id')->references('id')->on('banks');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('banks_investments', function(Blueprint $table){
            $table->dropForeign('banks_investments_investment_id_foreign');
            $table->dropForeign('banks_investments_bank_id_foreign');
        });

        Schema::dropIfExists('banks_investments');
    }
};
