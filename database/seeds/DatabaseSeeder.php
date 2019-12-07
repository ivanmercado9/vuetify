<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(DepartmentsTableSeeder::class);
        $this->call(PositionsTableSeeder::class);
        $this->call(BranchesTableSeeder::class);
        $this->call(StatusTableSeeder::class);
        $this->call(HeardAboutUsTableSeeder::class);
        $this->call(ServicesTableSeeder::class);
        $this->call(FileGroupSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(BinsTableSeeder::class);
        $this->call(TicketsTableSeeder::class);
    }
}
