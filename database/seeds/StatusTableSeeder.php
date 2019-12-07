<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('statuses')->insert([
        'tickets' => 'Registered',
      ]);
      DB::table('statuses')->insert([
        'tickets' => 'Attending',
      ]);
      DB::table('statuses')->insert([
        'tickets' => 'Referred',
      ]);
      DB::table('statuses')->insert([
        'tickets' => 'Completed',
      ]);
      DB::table('statuses')->insert([
        'tickets' => 'Unattended',
      ]);
      DB::table('statuses')->insert([
        'tickets' => 'Cancelled',
      ]);
      DB::table('statuses')->insert([
        'tickets' => 'Hold',
      ]);
    }
}
