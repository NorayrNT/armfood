<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArmeniaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('armenia')->insert([
            ['section' => 'история', 'desc' => 'здесь описывается история.' ],
            ['section' => 'культура', 'desc' => 'культура' ],
            ['section' => 'флора', 'desc' => 'флора' ],
            ['section' => 'фауна', 'desc' => 'фауна' ],
            ['section' => 'артсах', 'desc' => 'артсах' ],
            ['section' => 'туризм', 'desc' => 'туризм' ],
            ['section' => 'известные армяне', 'desc' => 'об известных армян мы поговорим здесь.' ],
        ]);
    }
}
