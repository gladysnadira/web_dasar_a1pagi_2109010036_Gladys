<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Indexed arrays</h1>

    <ul>
        <li>
            <a href="index.php">Indexed arrays</a>
        </li>
        <li>
            <a href="aa.php">Associative arrays</a>
        </li>
        <li>
            <a href="ma.php">Multidimensional Arrays</a>
        </li>
    </ul>


    <?php
    $produk = array("Samsung","Acer", "MSI");
    $jumlah_produk = count($produk);
    ?>
    <table border="1" style= "border-collapse: collapse">
        <tr>
            <th>No</th>
            <th>Nama Produk</th>
        </tr>
        <?php
            for ($i=0; $i < $jumlah_produk; $i++) { ?> 
            <tr>
                <td><?= $i+1 ?></td>
                <td><?= $produk[$i] ?></td>
            </tr>
            <?php }
        ?>
    </table>
</body>
</html>