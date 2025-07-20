<?php
$host = "localhost";
$user = "root"; // ganti dengan user hosting kamu
$pass = "";     // ganti dengan password hosting kamu
$db   = "sekolah";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
  die("Koneksi gagal: " . mysqli_connect_error());
}
?>
