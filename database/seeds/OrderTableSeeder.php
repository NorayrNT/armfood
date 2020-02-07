<?php

use Illuminate\Database\Seeder;
use App\Order;
use Illuminate\Support\Facades\DB;

class OrderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Order::class)->create();

    }
}
