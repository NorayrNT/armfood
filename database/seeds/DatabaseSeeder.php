<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ProductTableSeeder::class);
        $this->call(OrderTableSeeder::class);
        $this->call(OrderDetailsTableSeeder::class);
        $this->call(BagTableSeeder::class);
        $this->call(WishlistTableSeeder::class);
        $this->call(TermTableSeeder::class);
        $this->call(ArmeniaTableSeeder::class);
        $this->call(ContactTableSeeder::class);
        $this->call(PageTableSeeder::class); 
        // $this->call(UsersTableSeeder::class);             
        
    }
}
