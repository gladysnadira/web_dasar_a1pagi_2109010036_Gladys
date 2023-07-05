<?php
$mobil = array("Xenia", "Alphard","Toyota");
// var_dump ($mobil);
// echo $mobil[1];
?>

<table border = "1" style="border-collapse: collapse">
    <tr>
        <th>No</th>
        <th>Nama mobil</th>
    </tr>
    <tr>
        <td>1</td>
        <td><?php echo $mobil[0]?></td>
    </tr>
    <tr>
        <td>2</td>
        <td><?php echo $mobil[1]?></td>
    </tr>
    <tr>
        <td>3</td>
        <td><?php echo $mobil[2]?></td>
    </tr>
</table>

