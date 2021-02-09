<?php  

if (isset($_POST['register'])) {
	$nama = $_POST['nama'];
	$username = $_POST['username'];
	$pass = $_POST['password'];
	$pass2 = $_POST['password2'];
	$email = $_POST['email'];
	$telp = $_POST['telp'];
	$nisn = $_POST['nisn'];
	$spp = "1";
	$level = "siswa";


	include_once("koneksi.php");

	if ($pass !== $pass2) {
		echo"<script>
			alert('Konfirmasi password anda salah!');
			document.location='register.php';
		</script>";
	}

	$result = mysqli_query($koneksi, "INSERT INTO tb_userslog VALUES('', '$nisn', '$nama', '$username', '$pass', '$email', '$telp', '$level', '$spp')");

		echo "<script>
			alert('Anda telah berhasil bergabung!');
			document.location='loginuser.php';
		</script>";
} else{
	echo "<script>
		alert('Gala melalukan registrasi, silahkan coba lagi');
		document.location='register.php';
		</script>";
}


?>