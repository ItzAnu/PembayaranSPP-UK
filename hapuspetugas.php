<?php  
include 'koneksi.php';

$id = $_GET['id_petugas'];

mysqli_query($koneksi, "DELETE FROM tb_petugas WHERE id_petugas='$id' ");

header("location:datapetugas.php");


?>