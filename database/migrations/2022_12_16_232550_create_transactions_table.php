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
            $table->string('transaction_code', 11);
            $table->date('transaction_date');
            $table->timestamps();
        });
        Schema::table('transactions', function (Blueprint $table) {
            $table->foreignId('tougui_id')->constrained('tour_guides');
            $table->foreignId('destnat_id')->constrained('destinations');
            $table->foreignId('u_id')->constrained('users');
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
