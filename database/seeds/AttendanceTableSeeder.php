<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Attendance;

class AttendanceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Attendance::class,5)->create();
    }
}
