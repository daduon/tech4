<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGeneralsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('generals', function (Blueprint $table) {
            $table->id();
            $table->string('web_name')->nullable();
            $table->text('logo')->nullable();
            $table->text('email')->nullable();
            $table->text('phone')->nullable();
            $table->string('website')->nullable();
            $table->text('address')->nullable();
            $table->text('fb_url')->nullable();
            $table->text('link_url')->nullable();
            $table->text('ig_url')->nullable();
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
        Schema::dropIfExists('generals');
    }
}
