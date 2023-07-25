<?php
require "controllers/functions.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="style.css">

</head>
<body class= pinjam>
    <center>
<h1>Pinjam Buku</h1>
</center>
<hr>
    <ul>
        <button><a href="login.php">
            Home
        </a>
        </button>
        <button><a href="buku.php">
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
            </tr>
        <?php endforeach;
        ?>
    </table>
    </center>
</body>
</html>