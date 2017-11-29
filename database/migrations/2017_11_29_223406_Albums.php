<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Albums extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('albums', function (Blueprint $table) {
                $table->increments('id');
                $table->string('name_ru');
                $table->string('name_en');
                $table->integer('category_id');
                $table->string('cover_img');
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
        Schema::dropIfExists('albums');
    }
}
