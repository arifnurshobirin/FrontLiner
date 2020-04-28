<?php

use Illuminate\Database\Seeder;
use App\EDCModel;

class EDCSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(EDCModel::class, 50)->create();

    }
}
