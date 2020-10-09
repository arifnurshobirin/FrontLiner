<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComputersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('computers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('counter_id')->constrained('counters');
            $table->integer('NoComputer');
            $table->string('CPU');
            $table->string('Printer');
            $table->string('Drawer');
            $table->string('Scanner');
            $table->string('Monitor');
            $table->string('Status');
            $table->string('Author')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->unique(['NoComputer']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('computers');
    }
}
