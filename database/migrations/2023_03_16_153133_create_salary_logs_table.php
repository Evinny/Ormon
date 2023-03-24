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
        Schema::create('salary_logs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('salary_id');
            $table->text('comment')
                ->nullable();
            $table->datetime('received_at');
            $table->boolean('was_forced');
            $table->boolean('was_late');
            $table->float('cash_amount', 15, 2);
        });

        Schema::table('salary_logs', function (Blueprint $table){
            $table->foreign('salary_id')->references('id')->on('salaries');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('salary_logs', function (Blueprint $table){
            $table->dropforeign('salary_logs_salary_id_foreign');
        });
        Schema::dropIfExists('salary_logs');
    }
};
