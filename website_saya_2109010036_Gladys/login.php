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
    <title>Website Saya</title>
   
</head>
<link rel="stylesheet" href="style.css">
<body class= desain>
    <h1>Selamat Datang di Perpustakaan Online</h1>
    <hr>
    <ul>
        <button class= btn1>
            <a href="buku.php">
                Data Buku
            </a>
        </button>
        <button class= btn2>
            <a href="pinjam.php">
                Pinjam Buku
            </a>
        </button>
        <button class = btn3>
        <a href="index.php">
            Logout
        </a>
        </button>
    </ul>
</body>
</html>