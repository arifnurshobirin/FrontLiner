<?php

use Illuminate\Database\Seeder;
use App\ManagementModel;

class ManagementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(ManagementModel::class, 50)->create();
    }
}
