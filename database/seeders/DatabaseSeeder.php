<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
      $this->call([
        ContractSeeder::class,
        CourseSeeder::class,
        CreditSeeder::class,
        FacultySeeder::class,
        GroupSeeder::class,
        HistorySeeder::class,
        SpecialitySeeder::class,
        StudentSeeder::class
      ]);
    }
}
