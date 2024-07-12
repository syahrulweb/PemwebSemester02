<?php



namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin Perusahaan',
                'level' => 'admin',
                'email' => 'admin@admin.com',
                'password' => Hash::make('admin'),
                
            ],
            [
                'name' => 'Muhammad Syahrul',
                'level' => 'karyawan',
                'email' => 'karyawan@gmail.com',
                'password' => Hash::make('karyawan'),
                
            ],
        ]);
    }
}















// namespace Database\Seeders;

// use App\Models\User;
// use Illuminate\Support\Str;
// // use Illuminate\Database\Console\Seeds\WithoutModelEvents;
// use Illuminate\Database\Seeder;

// class UserSeeder extends Seeder
// {
//     /**
//      * Run the database seeds.
//      */
//     public function run(): void
//     {
//         User :: truncate();
//         User :: create([
//             'name' => 'Admin Perusahaan',
//             'level' => 'admin',
//             'email' => 'admin@admin.com',
//             'password' => bcrypt('admin'),
//             'remember_token' => Str :: random(60),
//         ]);

//         User::create([
//             'name' => 'Muhammad Syahrul',
//             'level' => 'karyawan', // Sesuaikan dengan level yang sesuai
//             'email' => 'karyawan@gmail.com',
//             'password' => bcrypt('karyawan'), // Sesuaikan dengan password yang diinginkan
//             'remember_token' => Str::random(60),
//         ]);
//     }
// }
