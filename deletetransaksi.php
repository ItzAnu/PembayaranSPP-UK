<?php  
include 'koneksi.php';

$id =	$_GET['id_pembayaran'];

mysqli_query($koneksi, "DELETE FROM tb_pembayaran WHERE id_pembayaran='$id'  ");

	header("location:transaksi.php");





?>