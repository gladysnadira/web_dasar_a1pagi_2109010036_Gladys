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
    
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <center>
    <h1>Halaman Tambah Buku</h1>
    </center>
    <hr>
    <center>
    <ul>
        <a href="buku.php">
            <button class= btn6 > Halaman Buku </button>
        </a>
        <a href="pinjam.php">
            <button class= btn7> Pinjam Buku </button>
        </a>
    </ul>
    <form action="" method="post">
        <table>
            <tr>
                <th>Judul Buku</th>
                <td>:</td>
                <td>
                    <input type="text" name="judul_buku" value="<?=@$_POST["judul_buku"]; ?>">
                </td>
            </tr>
            <tr>
                <th>Tahun Terbit</th>
                <td>:</td>
                <td>
                    <select name="tahun_terbit">
                        <?php
                        $tahun = date("Y");
                        for ($i=2000; $i <= $tahun; $tahun--) { ?>
                        <option><?php echo $tahun; ?></option>
                        <?php } ?>
                    </select>
                </td>
            </tr>
            <tr>
                <th>Penulis</th>
                <td>:</td>
                <td>
                    <input type="text" name="penulis" value="<?=@$_POST["penulis"]; ?>">
                </td>
            </tr>
            <tr>
                <th>Penerbit</th>
                <td>:</td>
                <td>
                    <input type="text" name="penerbit" value="<?=@$_POST["penerbit"]; ?>">
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                    <button name="simpan_buku" type="submit" style="width 40%">Simpan</button>
                </td>
            </tr>
        </table>
    </form>
    </center>

<?php 
if (isset($_POST["simpan_buku"])) {
    $judul_buku = $_POST["judul_buku"];
    $tahun_terbit = $_POST["tahun_terbit"];
    $penulis  = $_POST["penulis"];
    $penerbit  = $_POST["penerbit"];

    $tanggal = date("Y-m-d H:i:s");

    if ($judul_buku == "") {
        echo "<i>Judul buku masih kosong!</i>";
    }elseif ($tahun_terbit == ""){
        echo "<i>Tahun Terbit masih Kosong!</i>";
    }elseif ($penulis == ""){
        echo "<i>Penulis masih Kosong!</i>";
    }elseif ($penerbit == ""){
        echo "<i>Penerbit masih Kosong!</i>";
    } else {
        $simpan = q("INSERT INTO buku VALUES(null,
        '$judul_buku','$tahun_terbit','$penulis','$penerbit',
        '$tanggal','$tanggal')");
        if($simpan) {
            echo "
            <script> 
            alert('Buku Berhasil di tambahkan');
            location='buku.php';
            </script>
            ";
        } else {
            echo "<i>Data Gagal ditambahkan</i>";
        }
        
    }

}
?>
</body>
</html>