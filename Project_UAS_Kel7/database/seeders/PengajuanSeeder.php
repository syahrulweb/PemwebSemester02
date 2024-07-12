<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PengajuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pengajuans')->insert([
            [
                'tanggal_awal' => '2024-07-01',
                'tanggal_akhir' => '2024-07-10',
                'jumlah' => 1,
                'ket' => 'Cuti tahunan',
                'status' => '-',
                'nip' => '567890'
            ]
            
        ]);
    }
}
