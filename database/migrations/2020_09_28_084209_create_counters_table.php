<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCountersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('counters', function (Blueprint $table) {
            $table->id();
            $table->integer('NoCounter');
            $table->ipAddress('IpAddress');
            $table->macAddress('MacAddress');
            $table->string('TypeCounter');
            $table->string('Status');
            $table->timestamps();
            $table->softDeletes();
            $table->unique(['NoCounter', 'IpAddress','MacAddress']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('counters');
    }
}
