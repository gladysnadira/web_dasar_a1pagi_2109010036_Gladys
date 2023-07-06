<?php
require "controllers/functions.php";
$id_buku = $_GET["id"];
if (buku_satu_jumlah($id_buku)< 1) {
    echo "
    <script>
    alert('ID Buku Tidak Tersedia');
    location= 'buku.php';
    </script>
    ";
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
<body>
    <h1>Selamat Datang di Halaman Edit Buku</h1>
    <hr>
    <ul>
        <a href="index.php">
            <li>Home</li>
        </a>
        <a href="pinjam.php">
            <li>Pinjam Buku</li>
        </a>
        <a href="buku.php">
            <li>Data Buku</li>
        </a>
    </ul>
    <hr>
    <form action="" method= "POST">
<table>
    <tr>
        <th>Judul buku</th>
        <td>:</td>
        <td>
            <input name= "judul_buku" type="text" placeholder="Input Judul Buku" 
            value="<?= buku_satu($id_buku, "Judul_buku"); ?>">
        </td>
    </tr>
    <tr>
        <th>Tahun Terbit</th>
        <td>:</td>
        <td>
            <input name="tahun_terbit" type="number" placeholder= "Input Tahun Terbit" 
            value= "<?= buku_satu($id_buku, "Tahun_terbit");?>">
        </td>
    </tr>
    <tr>
        <th>Penulis</th>
        <td>:</td>
        <td>
            <input name="Penulis" type="text" placeholder= "Input Penulis" 
            value="<?= buku_satu($id_buku, "Penulis");?>">
        </td>
    </tr>
    <tr>
        <th>Penerbit</th>
        <td>:</td>
        <td>
            <input name="Penerbit" type="text" placeholder= "Input penerbit" 
            value="<?= buku_satu($id_buku, "Penerbit");?>">
        </td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td>
            <button type="submit" name="edit_buku" style="width: 30%; ">Edit</button>
        </td>
    </tr>
</table>
</form>

<?php 
$tanggal = date("Y-m-d H:i:s");
if (isset($_POST["edit_buku"])) {
    $judul_buku = $_POST["judul_buku"];
    $tahun_terbit = $_POST["tahun_terbit"];
    $penulis = $_POST["Penulis"];
    $penerbit = $_POST["Penerbit"];
    $tanggal = date("Y-m-d H:i:s");
    if ($judul_buku == "" || $tahun_terbit == "" || $penulis == "" || $penerbit == "") {
        echo "
        <script>
    alert('Data Masih Ada Yang Kosong!');
    </script>
    ";
    }else{
        $edit = q("UPDATE buku SET
        judul_buku = '$judul_buku' ,
        tahun_terbit = '$tahun_terbit' , 
        penulis = '$penulis' , 
        penerbit = '$penerbit',
        Edit = '$tanggal'
        WHERE
        id = '$id_buku'");
        if ($edit) {
            echo "<script>
            alert('Data Berhasil Diedit');
            location= 'buku.php';
            </script>
            ";
        }else{
            echo "<script>
            alert('Data gagal diedit');
            </script>";
        }
    }
}
?>
</body>
</html>