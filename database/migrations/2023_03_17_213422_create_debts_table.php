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
        Schema::create('debts', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name', 120);
            $table->string('owner', 120);
            $table->float('cash_owed', 15, 2);
            $table->integer('payments_total')
                ->default(1);

            $table->integer('payments_remaining')
                ->default(1);
                
            $table->date('due_date');
            
            $table->boolean('is_recorrent');

            $table->float('cash_per_recurrency', 15, 2)
                ->nullable();

            $table->date('recurrency_day')
                ->nullable();

            $table->unsignedBigInteger('user_id');
            $table->float('fees', 15, 2)
                ->nullable();

            $table->float('fee_percentage', 15, 2)
                ->default(0.00);

            $table->unsignedBigInteger('bank_id')
                ->nullable();
        });

        schema::table('debts', function (blueprint $table){
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('bank_id')->references('id')->on('banks');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        schema::table('debts', function (blueprint $table){
            $table->dropforeign('debts_user_id_foreign');
            $table->dropforeign('debts_bank_id_foreign');
        });

        Schema::dropIfExists('debts');
    }
};
