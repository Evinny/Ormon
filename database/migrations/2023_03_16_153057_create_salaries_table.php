<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Nette\Schema\Schema as SchemaSchema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('salaries', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name', 150);
            $table->unsignedBigInteger('user_id');
            $table->float('cash_amount', 15, 2);
            $table->date('pay_day');
            $table->unsignedBigInteger('recurrency_type')
                ->nullable();
            $table->integer('recurrency_days');
            $table->text('description')
                ->nullable();
        });

        Schema::table('salaries', function(Blueprint $table){
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('salaries', function(Blueprint $table){
            $table->dropforeign('salaries_user_id_foreign');
        });

        Schema::dropIfExists('salaries');
    }
};
