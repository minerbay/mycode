<?php
include 'koneksi.php';

$id = $_GET['id'];
$delete = mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE id='$id'");

if ($delete) {
    header("Location: index.php");
} else {
    echo "Gagal menghapus data: " . mysqli_error($koneksi);
}
?>