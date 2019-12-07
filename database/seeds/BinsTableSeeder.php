<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BinsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('bins')->insert([
            'bin' => 640328,
            'type' => 'ATM',
            'chip' => False,
            'created_at'=> \Carbon\Carbon::now(),
            'updated_at'=> \Carbon\Carbon::now(),
          ]);

        DB::table('bins')->insert([
            'bin' => 510752,
            'type' => 'MC',
            'chip' => True,
            'created_at'=> \Carbon\Carbon::now(),
            'updated_at'=> \Carbon\Carbon::now(),
          ]);

    }
}
