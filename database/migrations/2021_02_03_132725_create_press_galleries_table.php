<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePressGalleriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('press_galleries', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('press_id');
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
        Schema::dropIfExists('press_galleries');
    }
}
