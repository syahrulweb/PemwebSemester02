<?php
// Koneksi ke database
$host = '127.0.0.1:3307'; // Ganti dengan host Anda
$username = 'root'; // Ganti dengan username database Anda
$password = ''; // Ganti dengan password database Anda
$database = 'dbpuskesmas'; // Ganti dengan nama database Anda

$conn = mysqli_connect($host, $username, $password, $database);

// Periksa koneksi
if (!$conn) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}

// Ambil data dari formulir login (pastikan menggunakan fungsi mysqli_real_escape_string untuk menghindari SQL Injection)
$username = mysqli_real_escape_string($conn, $_POST['username']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

// Query untuk memeriksa apakah username dan password cocok (gunakan parameterized query untuk mencegah SQL Injection)
$query = "SELECT * FROM admins WHERE username=? AND password=?";
$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param($stmt, "ss", $username, $password);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

if (mysqli_num_rows($result) > 0) {
    // Jika hasil query mengembalikan baris, berarti login berhasil
    $data = mysqli_fetch_assoc($result);
    if ($data['role_id'] != 1) {
        header("Location: pasien/index.php");
    } else {
        header("Location: pasien/index.php");
    }
    exit;
} else {
    // Jika tidak, kembali ke formulir login dengan pesan error dan tampilkan notifikasi
    echo "<script>alert('Username atau password salah. Silakan coba lagi.');</script>";
    // Redirect kembali ke halaman login setelah menampilkan notifikasi
    echo "<script>window.location.href='login_form.php';</script>";
}

// Tutup koneksi
mysqli_close($conn);
?>
