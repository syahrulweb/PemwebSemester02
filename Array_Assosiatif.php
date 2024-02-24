<?php 

	$mahasiswa= [
        "Nama" => "Muhammad Syahrul", 
        "Umur" => "19",
        "Prodi" => "Teknik Informatika",
        "Alamat" => "Bogor",
        "Semester" => 2,


];

echo $mahasiswa["Nama"] . "<br>";
echo $mahasiswa["Umur"] . "<br>";
echo $mahasiswa["Prodi"] . "<br>";
echo $mahasiswa["Alamat"] . "<br>";
echo $mahasiswa["Semester"] . "<br>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>Nama</th>
            <th>Umur</th>
            <th>Prodi</th>
            <th>Alamat</th>
            <th>Semester</th>
        </tr>
            <tr>
                <td><?php echo $mahasiswa["Nama"]; ?></td>
                <td><?php echo $mahasiswa["Umur"]; ?></td>
                <td><?php echo $mahasiswa["Prodi"]; ?></td>
                <td><?php echo $mahasiswa["Alamat"]; ?></td>
                <td><?php echo $mahasiswa["Semester"]; ?></td>
            </tr>
    </table>
</body>
</html>