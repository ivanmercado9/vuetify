<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BranchesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('branches')->insert([
        'title' => 'Main',
        'description' => 'Primary Branch',
        'location' => 'Primary Branch Location',
        'created_at'=> \Carbon\Carbon::now(),
        'updated_at'=> \Carbon\Carbon::now(),
      ]);
    }
}
