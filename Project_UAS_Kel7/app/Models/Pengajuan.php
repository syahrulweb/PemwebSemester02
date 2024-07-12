<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengajuan extends Model
{
    use HasFactory;

    protected $table = 'pengajuans'; // Nama tabel di database

    protected $fillable = [
        'tanggal_awal',
        'tanggal_akhir',
        'jumlah',
        'ket',
        'status',
        'nip',
       
    ];
}
