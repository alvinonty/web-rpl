<?php
include 'db.php';

if (isset($_POST['simpan'])) {
  $id = $_POST['id'];
  $nama = $_POST['nama'];
  $kelas = $_POST['kelas'];
  $bio = $_POST['bio'];

  if ($id == "") {
    // Tambah baru
    mysqli_query($conn, "INSERT INTO siswa (nama, kelas, bio) VALUES ('$nama', '$kelas', '$bio')");
  } else {
    // Update
    mysqli_query($conn, "UPDATE siswa SET nama='$nama', kelas='$kelas', bio='$bio' WHERE id=$id");
  }
  header("Location: admin.php");
}

if (isset($_GET['hapus'])) {
  $id = $_GET['hapus'];
  mysqli_query($conn, "DELETE FROM siswa WHERE id=$id");
  header("Location: admin.php");
}
?>
