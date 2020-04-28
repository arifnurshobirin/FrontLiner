<?php

use Illuminate\Database\Seeder;
use App\KasirModel;

class KasirSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(KasirModel::class, 50)->create();
    }
}
