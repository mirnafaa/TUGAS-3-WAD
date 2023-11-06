<?php
require 'function.php';
$barang = query("SELECT * FROM daftar_barang")
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Muhammad Irfan Naufal Fadhil</title>
    </head>
    <body>
        <h1>Daftar Barang Toko Kak Ros</h1>

        <a href="tambah.php">Tambah Data Barang Toko Kak Ros</a>
        <br><br>
        
        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>No. </th>
                <th>Aksi</th>
                <th>Gambar</th>
                <th>Nama Barang</th>
                <th>Kode Barang</th>
                <th>Harga Barang</th>
                <th>Stok Barang</th>
            </tr>
            <?php $i = 1;
            foreach ($barang as $row) : ?> 
            
            <tr>
                <td><?= $i ?></td>
                <td>
                    <a href="ubah.php?no=<?= $row['no']; ?>">Ubah</a>
                    <a href="hapus.php?no= <?= $row["no"];?>" onclick="return confirm('Apakah anda yakin untuk menghapus data?');">Hapus</a>
                </td>
                <td><img src="img/<?= $row['gambar']; ?>" width="50"></td>
                <td><?= $row["namabarang"]; ?></td>
                <td><?= $row["kodebarang"]; ?></td>
                <td><?= $row["hargajual"]; ?></td>
                <td><?= $row["stokbarang"]; ?></td>
            </tr>
            <?php 
            $i++; 
            endforeach;
            ?>
        </table>
    </body>
</html>