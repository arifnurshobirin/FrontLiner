<?php

use App\Workinghour;
use Illuminate\Database\Seeder;

class WorkinghourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Workinghour::class, 50)->create();
    }
}
