<?php

use Illuminate\Database\Seeder;
use App\POSModel;

class POSSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(POSModel::class, 50)->create();
    }
}
