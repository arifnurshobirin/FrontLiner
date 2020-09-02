<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostableTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('postable', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('NoPOS')->unique;
            $table->string('CPU');
            $table->string('Printer');
            $table->string('Drawer');
            $table->string('Scanner');
            $table->string('Monitor');
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
        Schema::dropIfExists('postable');
    }
}
