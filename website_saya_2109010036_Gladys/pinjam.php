<?php
require "controllers/functions.php";
session_start();
if (@$_SESSION["login"] == false AND @$_SESSION["username"] == "") {
    echo "<script>
    alert('Anda harus login terlebih dahulu!')
    location = 'index.php'
    </script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buku</title>

    <link rel="stylesheet" href="style.css">

</head>
<body class= pinjam>
    <center>
<h1>Pinjam Buku</h1>
</center>
<hr>
    <ul>
        <button class= btn4><a href="login.php">
            Home
        </a>
        </button>
        <button class= btn5><a href="buku.php">
            Data Buku
        </a>
        </button>
    </ul>
    <a href="pinjam_buku.php">Tambah Peminjaman</a>
    <center>
    <table border="1" >
        <tr>
            <th>No</th>
            <th>ID</th>
            <th>Username</th>
            <th>Judul Buku</th>
            <th>Email</th>
            <th>Tanggal Pinjam</th>
            <th>Tanggal Pengembalian</th>
        </tr>
        <?php 
        $nomor = 1;
        foreach (pinjam() as $b) :?>
            <tr>
                <td><?= $nomor++; ?> </td>
                <td><?= $b["id"]; ?></td>
                <td><?= $b["username"]; ?></td>
                <td><?= $b["judul_buku"]; ?></td>
                <td><?= $b["email"]; ?></td>
                <td><?= date("d F Y, H:i");?></td>
                <td><?= $b["tanggal_pengembalian"]?></td>
            </tr>
        <?php endforeach;
        ?>
    </table>
    </center>
</body>
</html>