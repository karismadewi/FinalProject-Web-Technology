<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            
            $table->date('duration');
            $table->date('transaction_date');
            $table->timestamps();
        });
        Schema::table('destinations', function (Blueprint $table) {
            $table->foreignId('tg_id')->constrained('tour_guides');
            $table->foreignId('dest_id')->constrained('destinations');
            $table->foreignId('user_id')->constrained('tour_guides');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
};
