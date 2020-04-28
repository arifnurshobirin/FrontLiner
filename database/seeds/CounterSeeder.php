<?php

use Illuminate\Database\Seeder;
use App\CounterModel;

class CounterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(CounterModel::class, 50)->create();
    }
}
