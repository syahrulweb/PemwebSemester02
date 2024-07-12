<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DivisiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('divisis')->insert([
            [
                'kode' => 'K001', 
                'nama' => 'Programmer',
                'jabatan' => 'Kepala Bidang',
                
            ],
            [
                'kode' => 'K002', 
                'nama' => 'Programmer',
                'jabatan' => 'Staff',
                
            ],
            [
                'kode' => 'K003', 
                'nama' => 'Spesialis Jaringan',
                'jabatan' => 'Kepala Bidang',
                
            ],
            [
                'kode' => 'K004', 
                'nama' => 'Konsultan IT',
                'jabatan' => 'Kepala Bidang',
                
            ],
            [
                'kode' => 'K005', 
                'nama' => 'Analis Keamanan',
                'jabatan' => 'Kepala Bidang',
                
            ],
            [
                'kode' => 'K006', 
                'nama' => 'Analis Keamanan',
                'jabatan' => 'Staff',
                
            ]
        ]);
    }
}
