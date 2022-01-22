<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKnjizevnoRazdobljesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('knjizevno_razdobljes', function (Blueprint $table) {
            $table->increments('knjizevno_razdoblje_id');
            $table->string('Naziv_razdoblja');
            $table->string('Trajanje');
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
        Schema::dropIfExists('knjizevno_razdobljes');
    }
}
