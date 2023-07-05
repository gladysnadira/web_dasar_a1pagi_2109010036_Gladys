<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pertemuan 3</title>
</head>
<body>
    <h1> form input mahasiswa</h1>
    <form action="" method="get">
    <table>
        <tr>
            <td>NPM</td>
            <td>:</td>
            <td>
                <input type="number" name="npm">
            </td>
        </tr>
        <tr>
            <td>Nama Mahasiswa</td>
            <td>:</td>
            <td>
                <input type="text" name="nama_mahasiswa">
            </td>
            <tr>
                <td> Tanggal Lahir</td>
                <td>:</td>
                <td>
                    <input type="date" name="Tgl_lahir">
                </td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td>:</td>
                <td>
                    <select name="Jurusan">
                        <option value="" selected>  PIlih Jurusan </option>
                        <option> Sistem Informasi</option>
                        <option> Teknik Informasi</option>
                        <option> Sains data</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td> Alamat</td>
                <td>:</td>
                <td>
                    <textarea name="Alamat" id="" cols="30" rows="10"></textarea>
                </td>
            </tr>
            <tr>
                <td colspan="3" style="text-align: right;">
                    <button style="background-color: brown; color: 
                    aliceblue;" name="batal"> Batal </button>
                    <button type="submit" style="background-color: green; color: 
                    aliceblue;" name="simpan"> Simpan</button>
                </td>
            </tr>
        </tr>
    </table>
    </form>

    <?php 
    //echo $_GET["tgl_lahir"];
    //var_dump($_GET);
    //var_dump($_POST);
    //echo $_POST["npm"];
    // echo $_POST["nama_mahasiswa"];

    ?>




</body>
</html>