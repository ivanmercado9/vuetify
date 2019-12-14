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
        'title' => 'Registered',
        'description' => 'Registered and waiting to be called',
      ]);
      DB::table('statuses')->insert([
        'title' => 'Attending',
        'description' => 'Currently being attended',
      ]);
      DB::table('statuses')->insert([
        'title' => 'Completed',
        'description' => 'Completed or Finished',
      ]);
      DB::table('statuses')->insert([
        'title' => 'Referred',
        'description' => 'Referred to a user and waiting to be called',
      ]);
      DB::table('statuses')->insert([
        'title' => 'Unattended',
        'description' => 'Not attended. Client left.',
      ]);
      DB::table('statuses')->insert([
        'title' => 'Cancelled',
        'description' => 'Not attended. Client cancelled',
      ]);
      DB::table('statuses')->insert([
        'title' => 'Hold',
        'description' => 'On Hold and waiting to be called again by same user',
      ]);
    }
}
