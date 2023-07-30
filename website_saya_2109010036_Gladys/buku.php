<?php
require "controllers/functions.php";
// error_reporting(0);
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
    <title>Website Saya</title>
    
    <link rel="stylesheet" href="style.css">

</head>
<center>
<body class= table2>
    <h1>Daftar Buku</h1>
    <hr>
    <ul>
        <button>
            <a href="login.php">
                Home
            </a>
        </button>
        <button>
            <a href="pinjam.php">
                Pinjam Buku
            </a>
        </button>
    </ul>
    <a href="tambah_buku.php">Tambah Buku</a>
    <center>
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
        </center>
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
    </center>
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