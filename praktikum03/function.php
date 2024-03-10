<?php

function hitungUmur($tahunlahir) {
    $thn_sekarang = 2024;
    $hasil = $thn_sekarang - $tahunlahir;
    return $hasil;
}

echo "<div style='text-align: center;'>";
echo "<fieldset style='border: 2px solid green; padding: 10px; margin: 0 auto; max-width: 400px;'>";
echo "<legend style='color: green; font-weight: bold;'>Informasi Umur</legend>";

echo "Umur saya adalah " . hitungUmur(2004) . " tahun.";

echo "</fieldset>";
echo "</div>";

?>
