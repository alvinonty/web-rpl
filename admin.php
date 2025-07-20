<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <title>Admin - Biodata Siswa</title>
</head>
<body>
  <h2>Tambah/Update Biodata</h2>
  <form action="proses.php" method="post">
    <input type="hidden" name="id" id="id">
    <input type="text" name="nama" placeholder="Nama" required><br>
    <input type="text" name="kelas" placeholder="Kelas" required><br>
    <textarea name="bio" placeholder="Biodata Singkat" required></textarea><br>
    <button type="submit" name="simpan">Simpan</button>
  </form>

  <h3>Daftar Siswa</h3>
  <table border="1">
    <tr><th>Nama</th><th>Kelas</th><th>Bio</th><th>Aksi</th></tr>
    <?php
    $query = mysqli_query($conn, "SELECT * FROM siswa");
    while ($data = mysqli_fetch_assoc($query)) {
      echo "<tr>
        <td>{$data['nama']}</td>
        <td>{$data['kelas']}</td>
        <td>{$data['bio']}</td>
        <td>
          <a href='admin.php?id={$data['id']}'>Edit</a> |
          <a href='proses.php?hapus={$data['id']}' onclick='return confirm(\"Yakin hapus?\")'>Hapus</a>
        </td>
      </tr>";
    }
    ?>
  </table>
</body>
</html>
