<?php

use Illuminate\Database\Seeder;
use App\CashierModel;

class CashierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(CashierModel::class, 50)->create();
    }
}
