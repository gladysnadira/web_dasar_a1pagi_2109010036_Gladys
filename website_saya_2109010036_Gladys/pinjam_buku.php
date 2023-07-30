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
        <title>Pinjam Buku</title>
    </head>
    <center>
    <body class= table>
        <h1>Mau Pinjam?</h1>
        <form action="" method="post">
            <table>
                <tr>
                    <th>Username</th>
                    <td>:</td>
                    <td>
                        <input type="text" placeholder="Input Username" name="username" value="
                        <?= @$_POST["username"] ?>">
                    </td>
                </tr>
                <tr>
                    <th>Judul Buku</th>
                    <td>:</td>
                    <td>
                        <input type="text" placeholder="Masukan Judul Buku" name="judul_buku" value="
                        <?= @$_POST["judul_buku"] ?>">
                        
                    </td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>:</td>
                    <td>
                        <input type="email" placeholder="Input Email" name="email" value="
                        <?= @$_POST["email"] ?>">
                    </td>
                </tr>
                <tr>
                    <td colspan="3">
                        <button type="submit" name= "simpan" style="width: 100%;">Simpan</button>
                    </td>
                </tr>
            </table>
        </form>
        </center>

        <?php
        if (isset($_POST["simpan"])) {
            $username = $_POST["username"];
            $judul_buku = $_POST["judul_buku"];
            $email = $_POST["email"];
            $tgl_hari_ini = date("Y-m-d H:i:s");
            if ($username == "") {
                echo "<script>
                alert('username masih kosong!')
                </script>";
            }elseif  ($judul_buku == "") {
                echo "<script>
                alert('judul buku masih kosong!')
                </script>";
            }elseif ($email == "") {
                echo "<script>
                alert('Email masih kosong!')
                </script>";
            }else {
                $simpan = q("INSERT INTO pinjam VALUES(null,
                '$username',
                '$judul_buku',
                '$email',
                '$tgl_hari_ini')");
            if  ($simpan) {
                echo "<script>
                alert('pinjam buku berhasil!!')
                location='pinjam.php'
                </script>";
            }
            }
        }
            
        ?>
    </body>
</html>