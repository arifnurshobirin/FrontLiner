<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKasirtableTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kasirtable', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('Employee')->unique;
            $table->string('FullName');
            $table->date('DateOfBirth');
            $table->string('Adress');
            $table->string('PhoneNumber',13);
            $table->string('Position');
            $table->date('JoinDate');
            $table->string('image');
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
        Schema::dropIfExists('kasirtable');
    }
}
