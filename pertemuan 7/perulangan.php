<?php
$mobil = array("Xenia", "Alphard","Toyota");
$jumlah_mobil = count($mobil);
// echo $jumlah_mobil;
?>

<!-- <ul> -->
    <?php 
    // for ($i=0; $i < 100; $i++) { 
    //     echo "<li>$i</li>";
    // }
    // for ($i=0; $i < $jumlah_mobil; $i++) { 
    //     echo "<li> $mobil[$i]</li>";
    // }
    ?>
<!-- </ul> -->

<table border = "1" style="border-collapse: collapse">
    <tr>
        <th>No</th>
        <th>Nama Mobil</th>
    </tr>
    <?php
    // HTML didalam PHP
    
    // PHP didalam HTML
    for ($i=0; $i < $jumlah_mobil; $i++) { ?>
        <tr>
            <td><?= $i+1 ?></td>
            <td><?= $mobil[$i] ?></td>
        </tr> 
    <?php }
    ?>
</table>

