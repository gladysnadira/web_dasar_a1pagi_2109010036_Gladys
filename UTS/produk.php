<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Produk</title>
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

    <?php  
    $produk = array(
        array("sabun mandi" , "Barang" , "5000"),
        array("mie instan" , "Makanan", "3000"),
        array("teh kotak", "Minuman", "4000")
    );
    $jumlah_produk = count($produk);
    ?>
    <table border = "1" style="border-collapse:collapse">
        <tr>
            <th>Nama</th>
            <th>Jenis</th>
            <th>Harga</th>
        </tr>
        <?php 
        for ($i=0; $i < $jumlah_produk ; $i++) { 
        $jumlah_isi_produk = count($produk[$i]);
        ?>
        <tr>
            <td><?php echo $i+1; ?></td>
            <?php for($x=0; $x < $jumlah_isi_produk; $x++) {?>
            <td><?php echo $produk[$i][$x]; ?></td>
            <?php }?>
        </tr>
        <?php } ?>
    </table>
</body>
</html>