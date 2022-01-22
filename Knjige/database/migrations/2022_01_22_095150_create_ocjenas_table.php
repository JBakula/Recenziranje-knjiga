<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOcjenasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ocjenas', function (Blueprint $table) {
            $table->increments('ocjena_id');
            $table->integer('Ocjena');
            $table->unsignedInteger('korisnik_fk');
            $table->foreign('korisnik_fk')->references('korisnik_id')->on('korisniks')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedInteger('djelo_fk');
            $table->foreign('djelo_fk')->references('djelo_id')->on('djelos')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('ocjenas');
    }
}
