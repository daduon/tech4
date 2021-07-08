<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homes', function (Blueprint $table) {
            $table->id();
            $table->string('about_title_en');
            $table->string('about_title_kh');
            $table->text('about_short_text_en')->nullable();
            $table->text('about_short_text_kh')->nullable();
            $table->string('about_btn_en')->nullable();
            $table->string('about_btn_kh')->nullable();
            $table->text('about_url_btn_en')->nullable();
            $table->text('about_url_btn_kh')->nullable();
            $table->text('about_img');
            $table->string('alumni_title_en');
            $table->string('alumni_title_kh');
            $table->text('alumni_short_text_en')->nullable();
            $table->text('alumni_short_text_kh')->nullable();
            $table->string('alumni_btn_en')->nullable();
            $table->string('alumni_btn_kh')->nullable();
            $table->text('alumni_url_btn_en')->nullable();
            $table->text('alumni_url_btn_kh')->nullable();
            $table->text('alumni_img');

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
        Schema::dropIfExists('homes');
    }
}
