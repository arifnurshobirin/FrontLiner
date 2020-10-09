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
            $table->integer('seratusribu');
            $table->integer('limapuluhribu');
            $table->integer('duapuluhribu');
            $table->integer('sepuluhribu');
            $table->integer('limaribu');
            $table->integer('duaribu');
            $table->integer('seribu');
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
