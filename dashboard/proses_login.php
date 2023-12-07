<?php
session_start();
require_once('koneksi.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama_siswa = $_POST['nama_siswa'];
    $password = $_POST['password'];

    // Lakukan validasi atau keamanan tambahan di sini jika diperlukan

    // Query ke database untuk memeriksa kecocokan username dan password untuk siswa
    $query_siswa = "SELECT * FROM siswa WHERE nama_siswa = '$nama_siswa' AND password = '$password'";
    $result_siswa = mysqli_query($conn, $query_siswa);

    // Query untuk memeriksa kecocokan username dan password untuk admin
    $admin_username = "admin1234";
    $admin_password = "0000";

    if ($result_siswa && mysqli_num_rows($result_siswa) > 0) {
        // Login berhasil sebagai siswa
        $_SESSION['username'] = $nama_siswa;
        header('Location: home_siswa.php'); // Ganti dengan halaman setelah login siswa
    } elseif ($admin_username === $admin_username && $password === $admin_password) {
        // Login berhasil sebagai admin
        $_SESSION['username'] = $admin_username;
        header('Location: home_admin.php'); // Ganti dengan halaman setelah login admin
    } else {
        // Login gagal
        echo 'salah kak coba lagi ya hehe.';
    }
} else {
    header('Location: login.php'); // Redirect jika bukan POST request
}
?>
