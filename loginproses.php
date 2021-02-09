<?php  
$username = $_POST['username'];
$pass = $_POST['password'];

include 'koneksi.php';

$user=mysqli_query($koneksi, "select * from tb_petugas where username='$username' and password='$pass'");
$chek=mysqli_num_rows($user);
if ($chek>0){
	session_start();
	$row = mysqli_fetch_array($user);

	if ($row['level']=="admin") {
		$_SESSION['nama_petugas'] = $row['nama_petugas'];
		$_SESSION['level'] = $row['level'];
?>	
	<script>alert("Anda Berhasil Login");
		document.location='adminindex.php';
	</script>
<?php  
} elseif ($row['level']=="petugas") {
	$_SESSION['nama_petugas'] = $row['nama_petugas'];
	$_SESSION['level'] = $row['level'];
?>
	<script>alert("Anda Berhasil Login");
		document.location='petugasindex.php';
	</script>
<?php  
}
}	else{
		echo "<script>
				alert('Username atau password anda salah mohon coba lagi!');
				document.location='login.php';
			</script>";
			
}
?>