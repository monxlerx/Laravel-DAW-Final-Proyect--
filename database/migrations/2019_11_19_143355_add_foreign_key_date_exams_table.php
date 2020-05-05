<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyDateExamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('date_exams', function (Blueprint $table) {

            $table->foreign('exam_id')->references('id')->on('exams')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('date_exams', function (Blueprint $table) {
            $table->dropForeign('date_exams_exam_id_foreign');
        });
    }
}
