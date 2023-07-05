<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative arrays</title>
</head>
<body>
    <h1>Associative arrays</h1>
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
    <hr>
    <?php
    $umur = array("leo" => "20","juli" => "17","habibi" => "25");
    // var_dump($umur);
    // echo $umur["leo"];
    ?>
    <table border="1" style= "border-collapse: collapse">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Umur</th>
        </tr>
        <?php
        $number = 1;
         foreach($umur as $u => $u_value) : ?>
         <tr>
            <td><?= $number++ ?></td>
            <td><?= $u; ?></td>
            <td><?= $u_value; ?> </td>
         </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>