<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activities', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cashier_id')->constrained('cashiers');
            $table->foreignId('schedule_id')->constrained('schedules');
            $table->foreignId('workinghour_id')->constrained('workinghours');
            $table->foreignId('counter_id')->constrained('counters');
            $table->time('In');
            $table->time('Break');
            $table->time('Back');
            $table->time('Out');
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
        Schema::dropIfExists('activities');
    }
}
