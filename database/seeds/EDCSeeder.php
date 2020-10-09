<?php

use Illuminate\Database\Seeder;
use App\Edc;

class EdcSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Edc::class, 50)->create();

    }
}
