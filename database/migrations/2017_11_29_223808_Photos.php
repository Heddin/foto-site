<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Photos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
           Schema::create('photos', function (Blueprint $table) {
               $table->increments('id');
               $table->string('name_ru');
               $table->string('name_en');
               $table->integer('album_id');
               $table->string('pre_img');
               $table->string('full_img');
               $table->text('ru_description');
               $table->text('en_description');
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
        Schema::dropIfExists('photos');
    }
}
