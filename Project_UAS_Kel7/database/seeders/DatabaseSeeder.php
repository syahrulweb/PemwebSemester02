<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            PegawaiSeeder::class,
            DivisiSeeder::class,
            PengajuanSeeder::class,
            JatahSeeder::class,
            UserSeeder::class,
            //Seeder yang lain tambahin
        ]);
    }
}