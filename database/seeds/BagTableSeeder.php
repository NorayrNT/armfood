<?php

use Illuminate\Database\Seeder;
use App\Bag;

class BagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Bag::class,3)->create();
    }
}
