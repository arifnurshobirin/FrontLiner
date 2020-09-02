<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCountertableTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('countertable', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('NoCounter')->unique;
            $table->ipAddress('IpAddress')->unique;
            $table->macAddress('MacAddress')->unique;
            $table->string('TypeCounter');
            $table->string('Status');
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
        Schema::dropIfExists('countertable');
    }
}
