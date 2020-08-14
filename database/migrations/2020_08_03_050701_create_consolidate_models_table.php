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
            $table->id();
            $table->integer('Employee')->unique;
            $table->string('NoDeposit');
            $table->string('FullName');
            $table->date('Date');
            $table->string('DepositName');
            $table->string('DepositType');
            $table->string('Amount');
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
        Schema::dropIfExists('consolidate_models');
    }
}
