<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PositionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('positions')->insert([
        'title' => 'Manager',
        'description' => 'Branch Manager',
        'created_at'=> \Carbon\Carbon::now(),
        'updated_at'=> \Carbon\Carbon::now(),
      ]);

      DB::table('positions')->insert([
        'title' => 'Supervisor',
        'description' => 'Department Supervisor',
        'created_at'=> \Carbon\Carbon::now(),
        'updated_at'=> \Carbon\Carbon::now(),
      ]);

      DB::table('positions')->insert([
        'title' => 'Officer',
        'description' => 'Department Officer',
        'created_at'=> \Carbon\Carbon::now(),
        'updated_at'=> \Carbon\Carbon::now(),
      ]);
    }
}
