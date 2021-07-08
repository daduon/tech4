<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMentorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mentors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_en');
            $table->string('name_kh');
            $table->string('position_en');
            $table->string('position_kh');
            $table->text('text_en')->nullable();
            $table->text('text_kh')->nullable();
            $table->text('fb_url')->nullable();
            $table->text('ig_url')->nullable();
            $table->text('in_url')->nullable();
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
        Schema::dropIfExists('mentors');
    }
}
