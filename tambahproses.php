<?php  
include 'koneksi.php';

$nama = $_POST['nama_petugas'];
$user = $_POST['username'];
$pass = $_POST['password'];
$level = $_POST['level'];

$hasil = mysqli_query($koneksi, "INSERT INTO tb_petugas VALUES('', '$user', '$pass', '$nama', '$level') ");

	echo "<script>
			alert('Petugas baru berhasil ditambahkan');
			document.location='datapetugas.php';
		</script>";



?>