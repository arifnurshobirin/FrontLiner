<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEdctableTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('edctable', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('TIDEDC')->unique;;
            $table->integer('MIDEDC');
            $table->string('IPAdress')->unique;
            $table->string('NoTerminal')->unique;
            $table->string('Connection');
            $table->string('SIMCard');
            $table->string('TypeEDC');
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
        Schema::dropIfExists('edctable');
    }
}
