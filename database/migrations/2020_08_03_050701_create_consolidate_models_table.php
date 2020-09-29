<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsolidateModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consolidatetable', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('NoDeposit');
            $table->integer('Employee')->unique;
            $table->string('FullName');
            $table->date('Date');
            $table->time('Time');
            $table->string('DepositType');
            $table->string('Counter');
            $table->string('Amount');
            $table->integer('Banknote100000');
            $table->integer('Banknote50000');
            $table->integer('Banknote20000');
            $table->integer('Banknote10000');
            $table->integer('Banknote5000');
            $table->integer('Banknote2000');
            $table->integer('Banknote1000');
            $table->integer('Coin10000');
            $table->integer('Coin500');
            $table->integer('Coin200');
            $table->integer('Coin100');
            $table->integer('Coin50');
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
        Schema::dropIfExists('consolidate_models');
    }
}
