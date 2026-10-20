<?php 
include 'koneksi.php'; 

if (isset($_POST['submit'])) {
    $nim     = $_POST['nim'];
    $nama    = $_POST['nama'];
    $jurusan = $_POST['jurusan'];
    $alamat  = $_POST['alamat'];

    $insert = mysqli_query($koneksi, "INSERT INTO mahasiswa (nim, nama, jurusan, alamat) VALUES ('$nim', '$nama', '$jurusan', '$alamat')");

    if ($insert) {
        header("Location: index.php");
    } else {
        echo "Gagal menambahkan data: " . mysqli_error($koneksi);
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Tambah Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Tambah Data Mahasiswa</h2>
    <form method="POST" action="">
        <label>NIM:</label><br><input type="text" name="nim" required><br><br>
        <label>Nama:</label><br><input type="text" name="nama" required><br><br>
        <label>Jurusan:</label><br><input type="text" name="jurusan" required><br><br>
        <label>Alamat:</label><br><textarea name="alamat" required></textarea><br><br>
        <button type="submit" name="submit">Simpan Data</button>
        <a href="index.php">Kembali</a>
    </form>
</body>
</html>