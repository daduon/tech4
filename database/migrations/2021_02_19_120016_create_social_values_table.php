<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSocialValuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('social_values', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title_en');
            $table->string('title_kh');
            $table->text('short_text_en')->nullable();
            $table->text('short_text_kh')->nullable();
            $table->text('outline_en')->nullable();
            $table->text('outline_kh')->nullable();
            $table->text('text_en')->nullable();
            $table->text('text_kh')->nullable();
            $table->text('address_en');
            $table->text('address_kh')->nullable();
            $table->text('map');
            $table->date('date');
            $table->text('thumbnail');
            $table->date('img')->nullable();
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
        Schema::dropIfExists('social_values');
    }
}
