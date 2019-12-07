<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HeardAboutUsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('heard_about_us')->insert([
        'title' => 'Radio',
        'description' => 'Radio',
        'created_at'=> \Carbon\Carbon::now(),
        'updated_at'=> \Carbon\Carbon::now(),
      ]);
      DB::table('heard_about_us')->insert([
        'title' => 'TV',
        'description' => 'TV',
        'created_at'=> \Carbon\Carbon::now(),
        'updated_at'=> \Carbon\Carbon::now(),
      ]);
      DB::table('heard_about_us')->insert([
        'title' => 'Newspaper',
        'description' => 'Newspaper',
        'created_at'=> \Carbon\Carbon::now(),
        'updated_at'=> \Carbon\Carbon::now(),
      ]);
      DB::table('heard_about_us')->insert([
        'title' => 'Billboard',
        'description' => 'Billboard',
        'created_at'=> \Carbon\Carbon::now(),
        'updated_at'=> \Carbon\Carbon::now(),
      ]);
      DB::table('heard_about_us')->insert([
        'title' => 'Website',
        'description' => 'Internet Website',
        'created_at'=> \Carbon\Carbon::now(),
        'updated_at'=> \Carbon\Carbon::now(),
      ]);
      DB::table('heard_about_us')->insert([
        'title' => 'Person',
        'description' => 'Person',
        'created_at'=> \Carbon\Carbon::now(),
        'updated_at'=> \Carbon\Carbon::now(),
      ]);
      DB::table('heard_about_us')->insert([
        'title' => 'Mail',
        'description' => 'Mail',
        'created_at'=> \Carbon\Carbon::now(),
        'updated_at'=> \Carbon\Carbon::now(),
      ]);
      DB::table('heard_about_us')->insert([
        'title' => 'Facebook',
        'description' => 'Facebook',
        'created_at'=> \Carbon\Carbon::now(),
        'updated_at'=> \Carbon\Carbon::now(),
      ]);
      DB::table('heard_about_us')->insert([
        'title' => 'Flyer',
        'description' => 'Flyer',
        'created_at'=> \Carbon\Carbon::now(),
        'updated_at'=> \Carbon\Carbon::now(),
      ]);
    }
}
