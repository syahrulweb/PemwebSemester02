<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pegawais')->insert([
            [
                'nip' => '567880', 
                'nama' => 'Muhammad Syahrul',
                'gender' => 'L',
                'tmp_lahir' => 'Jakarta',
                'tgl_lahir' => '1990-01-01',       
                'telpon' => '08123456789',  
                'alamat' => 'Gondadia',
                'divisi_id' => 1,
            ],
            [
                'nip' => '123456',
                'nama' => 'Fatur',
                'gender' => 'L',
                'tmp_lahir' => 'Bandung',
                'tgl_lahir' => '1992-05-12',
                'telpon' => '08123456788',
                'alamat' => 'Jl. Braga No.2',
                'divisi_id' => 2,
            ],
            [
                'nip' => '789012',
                'nama' => 'Zen Alby',
                'gender' => 'L',
                'tmp_lahir' => 'Surabaya',
                'tgl_lahir' => '1985-08-23',
                'telpon' => '08123456787',
                'alamat' => 'Jl. Tunjungan No.3',
                'divisi_id' => 3,
            ],
            [
                'nip' => '345678',
                'nama' => 'Sofi',
                'gender' => 'P',
                'tmp_lahir' => 'Yogyakarta',
                'tgl_lahir' => '1994-11-30',
                'telpon' => '08123456786',
                'alamat' => 'Jl. Malioboro No.4',
                'divisi_id' => 4,
            ],
            [
                'nip' => '234567',
                'nama' => 'Azizah',
                'gender' => 'P',
                'tmp_lahir' => 'Medan',
                'tgl_lahir' => '1991-07-15',
                'telpon' => '08123456785',
                'alamat' => 'Jl. Sisingamangaraja No.5',
                'divisi_id' => 2,
            ],
            [
                'nip' => '456789',
                'nama' => 'Davis',
                'gender' => 'L',
                'tmp_lahir' => 'Semarang',
                'tgl_lahir' => '1988-03-22',
                'telpon' => '08123456784',
                'alamat' => 'Jl. Pandanaran No.6',
                'divisi_id' => 6,
            ],
            [
                'nip' => '567891',
                'nama' => 'Hilda',
                'gender' => 'P',
                'tmp_lahir' => 'Malang',
                'tgl_lahir' => '1993-09-10',
                'telpon' => '08123456783',
                'alamat' => 'Jl. Ijen No.7',
                'divisi_id' => 2,
            ],
            [
                'nip' => '678901',
                'nama' => 'Wilson',
                'gender' => 'L',
                'tmp_lahir' => 'Palembang',
                'tgl_lahir' => '1987-12-01',
                'telpon' => '08123456782',
                'alamat' => 'Jl. Sudirman No.8',
                'divisi_id' => 5,
            ],
            [
                'nip' => '789013',
                'nama' => 'Sophia Moore',
                'gender' => 'P',
                'tmp_lahir' => 'Makassar',
                'tgl_lahir' => '1995-04-17',
                'telpon' => '08123456781',
                'alamat' => 'Jl. Pettarani No.9',
                'divisi_id' => 6,
            ],
            [
                'nip' => '890123',
                'nama' => 'Andika',
                'gender' => 'L',
                'tmp_lahir' => 'Balikpapan',
                'tgl_lahir' => '1996-06-25',
                'telpon' => '08123456780',
                'alamat' => 'Jl. Jenderal Sudirman No.10',
                'divisi_id' => 2,
            ]
        ]);
    }
}