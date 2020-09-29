<?php

use Illuminate\Database\Seeder;
use App\Counter;

class CounterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Counter::class, 50)->create();
    }
}
