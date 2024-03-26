<?php

class kendaraan
{
    public $nama;
    public $warna;
    public $tempatoprasi;

    function __construct($nama, $warna, $tempatoprasi)
    {
        $this->nama = $nama;
        $this->warna = $warna;
        $this->tempatoprasi = $tempatoprasi;
    }

}

$kendaraan = new kendaraan("mobil", "merah", "Darat");
echo $kendaraan->nama ;
echo "<br>" ;
echo $kendaraan->warna ;
echo "<br>" ;
echo $kendaraan->tempatoprasi ;
