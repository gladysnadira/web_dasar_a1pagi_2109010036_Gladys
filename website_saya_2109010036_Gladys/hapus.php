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
}else {
    $hapus = q("DELETE FROM buku WHERE id = '$id_buku'");
    if($hapus) {
        echo "<script>
        alert('Buku Berhasil Dihapus!');
        location= 'buku.php';
        </script>";
    }else {
        echo"<script>
        alert('Buku gagal dihapus!');
        location= 'buku.php';
        </script>";
    }
}
?>