<?php

use Illuminate\Database\Seeder;
use App\Banknote;

class BanknoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Banknote::class, 50)->create();
    }
}
