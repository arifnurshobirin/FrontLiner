<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCashiertableTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cashiertable', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('Employee')->unique;
            $table->string('FullName');
            $table->date('DateOfBirth');
            $table->string('Address');
            $table->string('PhoneNumber');
            $table->string('Position');
            $table->date('JoinDate');
            $table->string('Avatar');
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
        Schema::dropIfExists('cashiertable');
    }
}
