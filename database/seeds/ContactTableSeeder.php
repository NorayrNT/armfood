<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([
            [
                'country' => 'Armenia' ,
                'address' => 'Abovyan 20 str, Yerevan',
                'email' => 'ecoarm@gmail.com',
                'phone' => '+(374)99 99-99-99,+(374)77 77-77-77',
                'map' => 'map ifram goes here'
            ],
        ]);
    }
}
