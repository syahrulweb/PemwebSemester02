<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jatah extends Model
{
    use HasFactory;

    protected $table = 'jatahs'; // Sesuaikan dengan nama tabel yang Anda gunakan

    protected $fillable = [
        'tahun',
        'jumlah',
        'nip',
    ];

    // Jika Anda ingin menonaktifkan timestamps 'created_at' dan 'updated_at'
    public $timestamps = false;
}

