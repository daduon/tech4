<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseIncludesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_includes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('course_id');
            $table->string('title_en');
            $table->string('title_kh');
            $table->string('sub_title_en');
            $table->string('sub_title_kh');
            $table->string('icon_img')->nullable();
            $table->boolean( 'active' )->default(1);
            $table->boolean( 'delete' )->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('course_includes');
    }
}
