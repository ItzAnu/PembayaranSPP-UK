<?php  
include 'koneksi.php';


$id = $_POST['id_petugas'];
$nama = $_POST['nama_petugas'];
$user = $_POST['username'];
$pass = $_POST['password'];

	mysqli_query($koneksi, "UPDATE tb_petugas SET nama_petugas='$nama', username='$user', password='$pass' WHERE id_petugas='$id' ");

	header("location:datapetugas.php");






?>