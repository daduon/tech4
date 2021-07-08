<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title_en');
            $table->string('title_kh');
            $table->text('text_en')->nullable();
            $table->text('text_kh')->nullable();
            $table->string('position');
            $table->text('cv_pdf');
            $table->text('icon_img');
            $table->date('date_from');
            $table->date('date_to');
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
        Schema::dropIfExists('jobs');
    }
}
