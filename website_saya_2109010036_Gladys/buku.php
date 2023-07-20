<?php
require "controllers/functions.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Saya</title>
    
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <h1>Selamat Datang di Halaman Buku</h1>
    <hr>
    <ul>
        <a href="index.php">
            <li>Home</li>
        </a>
        <a href="pinjam.php">
            <li>Pinjam Buku</li>
        </a>
    </ul>
    <hr>
    <a href="tambah_buku.php">Tambah Buku</a>
    <table border="1">
        <tr>
            <th>NO</th>
            <th>ID</th>
            <th>Judul Buku</th>
            <th>Tahun Terbit</th>
            <th>Penulis</th>
            <th>Penerbit</th>
            <th>Update</th>
            <th>Opsi</th>
        </tr>
        <?php
        $nomor = 1;
        foreach (buku() as $b) :?>
            <tr>
                <td><?= $nomor++; ?> </td>
                <td><?= $b["id"]; ?></td>
                <td><?= $b["Judul_buku"]; ?></td>
                <td><?= $b["Tahun_terbit"]; ?></td>
                <td><?= $b["Penulis"]; ?></td>
                <td><?= $b["Penerbit"]; ?></td>
                <td><?= date("d F Y, H:i", strtotime (@$b["Edit"]));?></td>
                <td>
                    <a href="edit.php?id=<?= $b["id"];?>">Edit</a>
                    <a href="javascript:hapus('hapus.php?id=<?= $b["id"];?>')">Hapus</a>
                </td>
            </tr>
        <?php endforeach;
        ?>
    </table>
    <script>
        function hapus(url)
        {
            if (confirm("Apakah data berikut akan di hapus?")) {
                document.location = url 
            }
        }
    </script>



</body>
</html>