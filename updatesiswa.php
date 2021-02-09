<?php  
include 'koneksi.php';


$id = $_POST['id_user'];
$nama = $_POST['nama'];
$nisn = $_POST['nisn'];
$user = $_POST['username'];
$email = $_POST['email'];
$telp = $_POST['telp'];

	mysqli_query($koneksi, "UPDATE tb_userslog SET nama='$nama', nisn='$nisn', username='$user', email='$email', telp='$telp' WHERE id_user='$id' ");

	header("location:datasiswa.php");






?>