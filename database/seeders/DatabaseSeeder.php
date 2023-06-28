<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // call digunakan untuk menjalankan seeder-seeder lainnya.
        $this->call([
            PositionSeeder::class,
            EmployeeSeeder::class,
            UserSeeder::class
        ]);
    }
}
