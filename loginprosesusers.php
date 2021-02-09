<?php  
$username = $_POST['username'];
$pass = $_POST['password'];
$nisn = $_POST['nisn'];

include 'koneksi.php';

$user=mysqli_query($koneksi, "select * from tb_userslog where username='$username' and password='$pass' and nisn='$nisn' ");
$chek=mysqli_num_rows($user);
if ($chek>0){
	session_start();
	$row = mysqli_fetch_array($user);

	if ($row['level']=="siswa") {
		$_SESSION['nama'] = $row['nama'];
		$_SESSION['level'] = $row['level'];
		$_SESSION['nisn'] = $row['nisn'];
		$_SESSION['email'] = $row['email'];
		$_SESSION['telp'] = $row['telp'];
		$_SESSION['id_spp'] = $row['id_spp'];

?>
	<script>alert("Anda Berhasil Login");
		document.location='bayarspp.php';
	</script>
<?php
	}
	

}	else{
	echo "<script>
				alert('Username atau password atau bisa jadi nisn anda salah!, mohon coba lagi!');
				document.location='loginuser.php?=login gagal';
			</script>";
}
?>