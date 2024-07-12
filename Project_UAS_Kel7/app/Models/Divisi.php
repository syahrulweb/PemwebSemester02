<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Divisi extends Model
{
    use HasFactory;

    protected $table = 'divisis'; // Sesuaikan dengan nama tabel yang Anda gunakan

    protected $fillable = [
        'kode',
        'nama',
        'jabatan',
    ];

    // Jika Anda ingin menonaktifkan timestamps 'created_at' dan 'updated_at'
    public $timestamps = false;
}

