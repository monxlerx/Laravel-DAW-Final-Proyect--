<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyRegisteredCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('registered__courses', function (Blueprint $table) {

            $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade');

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('registered__courses', function (Blueprint $table) {
            $table->dropForeign('registered__courses_course_id_foreign');
            $table->dropForeign('registered__courses_user_id_foreign');
        });
    }
}
