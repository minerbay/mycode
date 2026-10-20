<?php
include 'koneksi.php';

$id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE id='$id'");
$data = mysqli_fetch_array($query);

if (isset($_POST['update'])) {
    $nim     = $_POST['nim'];
    $nama    = $_POST['nama'];
    $jurusan = $_POST['jurusan'];
    $alamat  = $_POST['alamat'];

    $update = mysqli_query($koneksi, "UPDATE mahasiswa SET nim='$nim', nama='$nama', jurusan='$jurusan', alamat='$alamat' WHERE id='$id'");

    if ($update) {
        header("Location: index.php");
    } else {
        echo "Gagal memperbarui data: " . mysqli_error($koneksi);
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Edit Data Mahasiswa</h2>
    <form method="POST" action="">
        <label>NIM:</label><br><input type="text" name="nim" value="<?php echo $data['nim']; ?>" required><br><br>
        <label>Nama:</label><br><input type="text" name="nama" value="<?php echo $data['nama']; ?>" required><br><br>
        <label>Jurusan:</label><br><input type="text" name="jurusan" value="<?php echo $data['jurusan']; ?>" required><br><br>
        <label>Alamat:</label><br><textarea name="alamat" required><?php echo $data['alamat']; ?></textarea><br><br>
        <button type="submit" name="update">Update Data</button>
        <a href="index.php">Kembali</a>
    </form>
</body>
</html>