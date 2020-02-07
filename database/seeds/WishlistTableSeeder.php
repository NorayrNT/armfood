<?php

use Illuminate\Database\Seeder;
use App\Wishlist;

class WishlistTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Wishlist::class,2)->create();
    }
}
