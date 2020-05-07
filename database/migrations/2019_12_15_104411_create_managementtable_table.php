<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManagementtableTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('managementtable', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('IdCard')->unique;
            $table->string('FullName');
            $table->string('Position');
            $table->string('Avatar');
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
        Schema::dropIfExists('managementtable');
    }
}
