<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(EduCentersTableSeeder::class);
        // $this->call(RegionsTableSeeder::class);
        // $this->call(CitiesTableSeeder::class);
        // $this->call(UsersTableSeeder::class);
        // $this->call(StudentsTableSeeder::class);
        // $this->call(PaymentSummComulnSeeder::class);
        $this->call(ScienceTableSeeder::class);


    }
}