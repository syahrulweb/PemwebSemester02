<?php
// Konfigurasi db

$host = "localhost";
$dbname = "dbpuskesmas";
$user = "root";
$pass = "";

$dsn = "mysql:host=$host;dbname=$dbname";

// Buat koneksiin Database
$dbh = new PDO($dsn, $user, $pass);


?>