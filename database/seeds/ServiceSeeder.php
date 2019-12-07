<?php

use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            'title' => 'General',
            'description' => 'General',
            'minutes_to_complete' => 0,
            'parent_service_id' => 0,
            'departments_id' => 1
        ]);

        DB::table('services')->insert([
            'title' => 'ATH Nueva',
            'description' => 'ATH Nueva',
            'minutes_to_complete' => 15,
            'parent_service_id' => 1,
            'departments_id' => 1
        ]);

        DB::table('services')->insert([
            'title' => 'Orientación',
            'description' => 'Orientación',
            'minutes_to_complete' => 0,
            'parent_service_id' => 0,
            'departments_id' => 1
        ]);

         DB::table('services')->insert([
            'title' => 'Préstamo de Auto',
            'description' => 'Préstamo de Auto',
            'minutes_to_complete' => 15,
            'parent_service_id' => 3,
            'departments_id' => 1
        ]);
    }
}
