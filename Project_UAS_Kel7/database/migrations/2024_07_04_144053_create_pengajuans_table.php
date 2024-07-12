<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('pengajuans', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal_awal');
            $table->date('tanggal_akhir');
            $table->integer('jumlah');
            $table->string('ket');
            $table->enum('status', ['pending', 'terima', 'tolak'])->default('pending');
            $table->string('nip');
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('pengajuans');
    }
};
