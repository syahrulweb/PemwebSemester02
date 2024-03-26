<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>


<body>
<div class="container mt-5">
<form method="POST">
  <div class="form-group row">
    <label for="nim" class="col-4 col-form-label">NIM</label>
    <div class="col-8">
      <input id="nim" name="nim" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="mk" class="col-4 col-form-label">Pilih MK</label> 
    <div class="col-8">
      <select id="mk" name="mk" class="custom-select">
        <option value="Basis Data">Basis Data</option>
        <option value="Pemrograman Web II">Pemrograman Web II</option>
        <option value="Jaringan Komputer">Jaringan Komputer</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai" class="col-4 col-form-label">Nilai</label> 
    <div class="col-8">
      <input id="nilai" name="nilai" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
</div>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil nilai dari form
    $nim = $_POST["nim"];
    $mk = $_POST["mk"];
    $nilai = $_POST["nilai"];

    // Menentukan hasil ujian
    $hasil_ujian = '';
    if ($nilai >= 90) {
        $hasil_ujian = 'A';
    } elseif ($nilai >= 80) {
        $hasil_ujian = 'B';
    } elseif ($nilai >= 70) {
        $hasil_ujian = 'C';
    } elseif ($nilai >= 60) {
        $hasil_ujian = 'D';
    } else {
        $hasil_ujian = 'E';
    }

    // Menentukan grade lulus
    $grade_lulus = '';
    if ($hasil_ujian <= 'C') {
        $grade_lulus = 'Lulus';
    } else {
        $grade_lulus = 'Tidak Lulus';
    }

    // Tampilkan hasil form, hasil ujian, dan grade lulus
    echo "<h2>Hasil Form:</h2>";
    echo "<p>NIM: $nim</p>";
    echo "<p>Mata Kuliah: $mk</p>";
    echo "<p>Nilai: $nilai</p>";
    echo "<p>Hasil Ujian: $hasil_ujian</p>";
    echo "<p>Grade Lulus: $grade_lulus</p>";
}
?>



</body>
</html>