<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>CRUD Data Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Daftar Mahasiswa</h2>
    <a href="tambah.php">+ Tambah Mahasiswa Baru</a><br><br>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Jurusan</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>
        <?php
        $no = 1;
        $query = mysqli_query($koneksi, "SELECT * FROM mahasiswa ORDER BY id DESC");
        while($data = mysqli_fetch_array($query)) {
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $data['nim']; ?></td>
                <td><?php echo $data['nama']; ?></td>
                <td><?php echo $data['jurusan']; ?></td>
                <td><?php echo $data['alamat']; ?></td>
                <td>
                    <a href="edit.php?id=<?php echo $data['id']; ?>">Edit</a> | 
                    <a href="hapus.php?id=<?php echo $data['id']; ?>" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                </td>
            </tr>
            <?php 
        } 
        ?>
    </table>
</body>
</html>