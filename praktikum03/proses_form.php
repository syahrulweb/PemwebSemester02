<?php

// POST nim,  nama, jenis kelamin, program studi, keahlian, domisili, email

$id = $_POST['id'];
$name = $_POST['name'];
$jeniskelamin = $_POST['jeniskelamin'];
$prodi = $_POST['prodi'];
$keahlian = $_POST['keahlian'];
$domisili = $_POST['domisili'];
$email = $_POST['email'];

// Buat Tampilan Selamat Datang di IT Club Data Science


?>

<h1>Terima Kasih Sudah Mendaftar di IT Club Data Science <br></h1>
<h5>NIM : <?php echo $id; ?></h5>
<h5>Nama : <?php echo $name; ?></h5>
<h5>Jenis Kelamin : <?php echo $jeniskelamin; ?></h5>
<h5>Program Studi : <?php echo $prodi; ?></h5>
<h5>Keahlian : <?php echo $keahlian; ?></h5>
<h5>Domisili : <?php echo $domisili; ?></h5>
<h5>Email : <?php echo $email; ?></h5>