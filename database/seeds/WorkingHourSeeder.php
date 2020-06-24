<?php

use Illuminate\Database\Seeder;
use App\WorkingHourModel;

class WorkingHourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(WorkingHourModel::class, 50)->create();
    }
}
