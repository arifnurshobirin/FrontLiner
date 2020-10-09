<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCashiersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cashiers', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('IdCard')->unique()->nullable();
            $table->integer('Employee')->unique();
            $table->string('FullName');
            $table->date('DateOfBirth');
            $table->string('Address');
            $table->string('PhoneNumber');
            $table->string('Position');
            $table->date('JoinDate');
            $table->string('Avatar');
            $table->string('Status');
            $table->string('Author')->nullable(); 
            $table->timestamps();
            $table->softDeletes();
    
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cashiers');
    }
}
