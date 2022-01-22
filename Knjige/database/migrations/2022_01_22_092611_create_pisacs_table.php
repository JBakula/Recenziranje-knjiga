<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePisacsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pisacs', function (Blueprint $table) {
            $table->increments('pisac_id');
            $table->string('Ime_prezime');
            $table->text('Biljeska_o_piscu');
            $table->unsignedInteger('drzava_fk');
            $table->foreign('drzava_fk')->references('drzava_id')->on('drzavas')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedInteger('knjizevno_razdoblje_fk');
            $table->foreign('knjizevno_razdoblje_fk')->references('knjizevno_razdoblje_id')->on('knjizevno_razdobljes')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('pisacs');
    }
}
