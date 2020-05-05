<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStaysAbroadTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stays_abroads', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('location');
            $table->string('county');
            $table->string('nation');
            $table->string('country');
            $table->string('school');
            $table->string('accommodation');
            $table->text('landmarks');
            $table->integer('price_week');
            $table->engine = "InnoDB";
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stays_abroad');
    }
}
