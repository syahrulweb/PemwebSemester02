<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeriksaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('periksas')->insert([
            [
                'tanggal' => '2004-02-25',
                'berat' => '68',
                'tinggi' => '110',
                'tensi' => '120/80',
                'keterangan' => 'Umum',
                'pasien_id' => '',
                'dokter_id' => ''
            ],
            [
                'tanggal' => '2000-10-05',
                'berat' => '60',
                'tinggi' => '100',
                'tensi' => '120/80',
                'keterangan' => 'Parah',
                'pasien_id' => '2',
                'dokter_id' => '2'
            ],
            
        ]);
    }
}
