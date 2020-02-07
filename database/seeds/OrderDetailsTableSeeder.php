<?php

use Illuminate\Database\Seeder;
use App\OrderDetail;

class OrderDetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(OrderDetail::class)->create();
    }
}
