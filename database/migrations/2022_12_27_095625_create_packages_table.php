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
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->string('package_name');
            $table->string('package_desc');
            $table->integer('sold');
            $table->integer('duration');
            $table->bigInteger('price');
            $table->timestamps();
        });
        Schema::table('packages', function (Blueprint $table) {
            $table->foreignId('tgui_id')->constrained('tour_guides');
            $table->foreignId('destn_id')->constrained('destinations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('packages');
    }
};
