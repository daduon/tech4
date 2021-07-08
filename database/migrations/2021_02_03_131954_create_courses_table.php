<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('program_id');
            $table->string('title_en');
            $table->string('title_kh');
            $table->string('sub_title_en')->nullable();
            $table->string('sub_title_kh')->nullable();
            $table->text('overview_en')->nullable();
            $table->text('overview_kh')->nullable();
            $table->text('outline_en')->nullable();
            $table->text('outline_kh')->nullable();
            $table->text('structure_en')->nullable();
            $table->text('structure_kh')->nullable();
            $table->date('date_from')->nullable();
            $table->date('date_to')->nullable();
            $table->decimal('price',19,2)->nullable();
            $table->smallInteger('seat_lef')->nullable();
            $table->text('icon_img');
            $table->text('img');
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
        Schema::dropIfExists('courses');
    }
}
