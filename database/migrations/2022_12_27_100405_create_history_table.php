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
        Schema::create('history', function (Blueprint $table) {
            $table->id();
            $table->string('status');
            $table->timestamps();
        });
        Schema::table('history', function (Blueprint $table) {
            $table->foreignId('tourgui_id')->constrained('tour_guides');
            $table->foreignId('dstnation_id')->constrained('destinations');
            $table->foreignId('u_id')->constrained('users');
            $table->foreignId('trans_id')->constrained('transactions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('history');
    }
};
