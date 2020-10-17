<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBanknotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banknotes', function (Blueprint $table) {
            $table->id();
            $table->integer('seratusribu')->nullable();
            $table->integer('limapuluhribu')->nullable();
            $table->integer('duapuluhribu')->nullable();
            $table->integer('sepuluhribu')->nullable();
            $table->integer('limaribu')->nullable();
            $table->integer('duaribu')->nullable();
            $table->integer('seribu')->nullable();
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
        Schema::dropIfExists('banknotes');
    }
}
