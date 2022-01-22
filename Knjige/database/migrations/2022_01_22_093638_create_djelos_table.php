<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDjelosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('djelos', function (Blueprint $table) {
            $table->increments('djelo_id');
            $table->string('Naziv_djela');
            $table->string('Godina');
            $table->text('Kratak_sadržaj');
            $table->unsignedInteger('pisac_fk');
            $table->foreign('pisac_fk')->references('pisac_id')->on('pisacs')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedInteger('vrsta_djela_fk');
            $table->foreign('vrsta_djela_fk')->references('vrsta_djela_id')->on('vrsta_djelas')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('djelos');
    }
}
