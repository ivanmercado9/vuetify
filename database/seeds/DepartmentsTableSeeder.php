<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('departments')->insert([
        'title' => 'IT',
        'description' => 'Information Technology',
        'created_at'=> \Carbon\Carbon::now(),
        'updated_at'=> \Carbon\Carbon::now(),
      ]);
      
      DB::table('departments')->insert([
        'title' => 'Service',
        'description' => 'Member Services',
        'created_at'=> \Carbon\Carbon::now(),
        'updated_at'=> \Carbon\Carbon::now(),
      ]);

      DB::table('departments')->insert([
        'title' => 'Collections',
        'description' => 'Collections',
        'created_at'=> \Carbon\Carbon::now(),
        'updated_at'=> \Carbon\Carbon::now(),
      ]);

      DB::table('departments')->insert([
        'title' => 'Tellers',
        'description' => 'Tellers',
        'created_at'=> \Carbon\Carbon::now(),
        'updated_at'=> \Carbon\Carbon::now(),
      ]);

      DB::table('departments')->insert([
        'title' => 'Finance',
        'description' => 'Accounting',
        'created_at'=> \Carbon\Carbon::now(),
        'updated_at'=> \Carbon\Carbon::now(),
      ]);
    }
}
