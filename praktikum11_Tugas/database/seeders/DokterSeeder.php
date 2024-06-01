<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DokterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('dokters')->insert([
            [
                'nama' => 'Dr. Syahrul',
                'gender' => 'Laki-Laki',
                'tmp_lahir' => 'Bogor',
                'tgl_lahir' => '2004-02-25',
                'kategori' => 'Umum',
                'telepon' => '081584896882',
                'alamat' => 'Kp. Loji'
            ],
            [
                'nama' => 'Nurrul',
                'gender' => 'Perempuan',
                'tmp_lahir' => 'Bekasi',
                'tgl_lahir' => '2005-10-03',
                'kategori' => 'Spesialis',
                'telepon' => '0815890837',
                'alamat' => 'Margonda'
            ],
            [
                'nama' => 'Nurzaman',
                'gender' => 'Laki-Laki',
                'tmp_lahir' => 'Bogor',
                'tgl_lahir' => '2004-10-25',  // Perbaikan pada format tanggal
                'kategori' => 'Gigi',
                'telepon' => '08578282773',
                'alamat' => 'Raya City'
            ],
        ]);
    }
}
