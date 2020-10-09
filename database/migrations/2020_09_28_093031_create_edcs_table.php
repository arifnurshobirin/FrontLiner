<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEdcsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('edcs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('counter_id')->constrained('counters');
            $table->string('TIDEDC');
            $table->string('MIDEDC');
            $table->string('IPAdress');
            $table->string('Connection');
            $table->string('SIMCard');
            $table->string('TypeEDC');
            $table->string('Status');
            $table->string('Author')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->unique(['TIDEDC', 'IPAdress']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('edcs');
    }
}
