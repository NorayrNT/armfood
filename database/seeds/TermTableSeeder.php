<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TermTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('terms')->insert([
            ['section' => 'конфиденциальность', 'desc' => 'текст о конфиденциальности'],
            ['section' => 'оплата', 'desc' => 'текст об оплате'],
            ['section' => 'доставка', 'desc' => 'текст о доставке'],
        ]);
    }
}
