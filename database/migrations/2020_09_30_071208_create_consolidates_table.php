<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsolidatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consolidates', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cashier_id')->constrained('cashiers');
            $table->foreignId('counter_id')->constrained('counters');
            $table->foreignId('banknote_id')->constrained('banknotes');
            $table->foreignId('coin_id')->constrained('coins');
            $table->string('NoDeposit');
            $table->date('Date');
            $table->time('Time');
            $table->string('DepositType');
            $table->integer('Amount');
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
        Schema::dropIfExists('consolidates');
    }
}
