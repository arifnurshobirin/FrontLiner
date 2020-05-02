<?php

use Illuminate\Database\Seeder;
use App\ScheduleModel;

class ScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(ScheduleModel::class, 50)->create();
    }
}
