<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyStatusLengthInPengajuansTable extends Migration
{
    public function up()
    {
        Schema::table('pengajuans', function (Blueprint $table) {
            $table->string('status', 10)->change(); // Ubah panjang kolom menjadi 10
        });
    }

    public function down()
    {
        Schema::table('pengajuans', function (Blueprint $table) {
            // Kembalikan ke tipe data sebelumnya jika diperlukan
            $table->enum('status', ['pending', 'terima', 'tolak'])->default('pending')->change();
        });
    }
}