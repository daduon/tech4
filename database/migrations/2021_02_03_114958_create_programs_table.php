<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgramsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title_en');
            $table->string('title_kh');
            $table->string('short_text_en');
            $table->string('short_text_kh')->nullable();
            $table->string('sub_title_en');
            $table->string('sub_title_kh');
            $table->text('text_en');
            $table->text('text_kh')->nullable();
            $table->string('btn_en')->nullable()->comment('button text');
            $table->string('btn_kh')->nullable()->comment('button text');
            $table->text('url_btn_en')->nullable();
            $table->text('url_btn_kh')->nullable();
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
        Schema::dropIfExists('programs');
    }
}
