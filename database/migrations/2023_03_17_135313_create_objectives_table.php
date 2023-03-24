<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('objectives', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('user_id');
            $table->string('name', 100);
            $table->text('description')
                ->nullable();

            $table->float('start_cash', 15, 2)
                ->nullable();

            $table->float('end_cash', 15, 2)
                ->nullable();
                
            $table->float('current_cash', 15, 2)
                ->nullable();
        });

        Schema::table('objectives', function(Blueprint $table){
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('objectives', function (Blueprint $table){
            $table->dropforeign('objectives_user_id_foreign');
        });

        Schema::dropIfExists('objectives');
    }
};
