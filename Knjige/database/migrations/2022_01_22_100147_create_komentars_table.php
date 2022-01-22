<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKomentarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('komentars', function (Blueprint $table) {
            $table->increments('komentar_id');
            $table->text('Komentar');
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
        Schema::dropIfExists('komentars');
    }
}
