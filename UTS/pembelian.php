<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Pembelian</title>
</head>
<body>
    <ul>
        <li>
            <a href="index.php">WELCOME</a>
        </li>
        <li> 
            <a href="produk.php">Menu Produk</a>
    </li>
    <li>
        <a href="pembelian.php">Manu Pembelian</a>
    </li>
    </ul>

    <h1>Menu Pembelian</h1>
    <form action="" method="$_POST">
    <table>
        <tr>
            <td>Nama Produk</td>
            <td>:</td>
            <td>
                <input type="text" name="nama">
            </td>
        </tr>
        <tr>
            <td>Harga</td>
            <td>:</td>
            <td>
                <input type="number" name="harga">
            </td>
        </tr>
        <tr>
            <td>Oty</td>
            <td>:</td>
            <td>
                <input type="number" name="qty">
            </td>
        </tr>
        <tr>
            <td>Jumlah Pembayaran</td>
            <td>:</td>
            <td>
                <input type="number" name="totalbayar">
            </td>
        </tr>
        <tr>
            <td>
                <button>Bayar</button>   
            </td>
            <td>
                <input type="submit" name="submit" value="simpan">
            </td>
        </tr>
       
    </table>
    </form>
    <?php 
    if (isset($_POST['submit'])) {
        echo '<h1>Hasil Input</h1>';
        echo '<ul>';
        echo '<li>Nama: ' . $_POST['nama'] . '</li>';
        echo '<li>harga: ' . $_POST['harga'] . '</li>';
        echo '<li>qty: ' . $_POST['qty'] . '</li>';
        echo '<li>bayar: ' . $_POST['bayar'] . '</li>';
     }
    ?>


</body>
</html>