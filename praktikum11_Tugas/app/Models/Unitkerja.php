<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unitkerja extends Model
{
    use HasFactory;

    // Nama tabel yang digunakan
    protected $table = 'unitkerjas';

    // Kolom yang dapat diisi
    protected $fillable = [
        'nama',
       
    ];
}
