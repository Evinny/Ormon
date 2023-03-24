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
        Schema::create('investments', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('user_id');
            $table->string('name', 200);
            $table->float('deposits', 15, 2)
                ->default(0.00);

            $table->boolean('has_relation')
                ->nullable();

            $table->float('profits', 15, 2)
                ->default(0.00);

            $table->float('revenue', 15, 2)
                ->default(0.00);
                
            $table->datetime('started_at');
        });

        Schema::table('investments', function(blueprint $table){
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        schema::table('investments', function (blueprint $table){
            $table->dropforeign('investments_user_id_foreign');
        });

        Schema::dropIfExists('investments');
    }
};
