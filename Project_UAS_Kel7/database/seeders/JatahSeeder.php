<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JatahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('jatahs')->insert([
            
                [
                    'tahun' => 2024,
                    'jumlah' => 5,
                    'nip' => '567880',
                ],
                [
                    'tahun' => 2024,
                    'jumlah' => 6,
                    'nip' => '123456',
                ],
                [
                    'tahun' => 2024,
                    'jumlah' => 4,
                    'nip' => '789012',
                ],
                [
                    'tahun' => 2024,
                    'jumlah' => 7,
                    'nip' => '345678',
                ],
                [
                    'tahun' => 2024,
                    'jumlah' => 3,
                    'nip' => '234567',
                ],
                [
                    'tahun' => 2024,
                    'jumlah' => 5,
                    'nip' => '456789',
                ],
                [
                    'tahun' => 2024,
                    'jumlah' => 6,
                    'nip' => '567891',
                ],
                [
                    'tahun' => 2024,
                    'jumlah' => 4,
                    'nip' => '678901',
                ],
                [
                    'tahun' => 2024,
                    'jumlah' => 7,
                    'nip' => '789013',
                ],
                [
                    'tahun' => 2024,
                    'jumlah' => 3,
                    'nip' => '890123',
                ],
            
            
        ]);
    }
}
