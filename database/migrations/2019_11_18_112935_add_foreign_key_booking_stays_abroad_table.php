<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyBookingStaysAbroadTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('booking__stays__abroads', function (Blueprint $table) {

            $table->foreign('id_stays_abroad')->references('id')->on('stays_abroads')->onDelete('set null');

            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('booking__stays__abroads', function (Blueprint $table) {
            $table->dropForeign('booking__stays__abroads_id_stays_abroad_foreign');
            $table->dropForeign('booking__stays__abroads_user_id_foreign');
        });
    }
}
