<?php  
include 'koneksi.php';

$id = $_GET['id_user'];

mysqli_query($koneksi, "DELETE FROM tb_userslog WHERE id_user='$id' ");

header("location:datasiswapetugas.php");


?>