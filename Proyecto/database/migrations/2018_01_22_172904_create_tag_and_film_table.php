<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTagAndFilmTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tag_and_film', function (Blueprint $table) {
            $table->integer('id_tag')->unsigned()->nullable();
            $table->foreign('id_tag')->references('id')
                ->on('tag')->onDelete('cascade');

            $table->integer('id_film')->unsigned()->nullable();
            $table->foreign('id_film')->references('id')
                ->on('films')->onDelete('cascade');

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
        Schema::dropIfExists('tag_and_film');
    }
}
