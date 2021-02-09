<?php 

  include 'koneksi.php';
  session_start();

  if ($_SESSION['nama_petugas'] == '') {
    header("location: login.php");
  }


 ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="index.css">
	<link rel="stylesheet" type="text/css" href="footer.css">
	<link rel="stylesheet" type="text/css" href="navbar.css">
	<link rel="stylesheet" type="text/css" href="datasiswa.css">
	<link rel="stylesheet" href="fontawesome-free-5.12.1-web/css/all.css">
</head>
<body>
	<nav class="">	
		<div class="nav">
			<div class="nav-list">
				<ul>
					<li class="logo"><a href=""><img src="img/logo.jpeg" width="80"></a></li>
					<li class="nav-tit">
						<a href="#" class="nav-tot">Website Pembayaran SPP</a>
					</li>
					<li class="nav-link">
						<a href="logotproses.php" class="nav-logot">
							<i class="fas fas-logot fa-user-tie"></i>
							<?php
			                  echo $_SESSION['nama_petugas'];
			                  echo " | ";
			                  echo $_SESSION['level']; 
			                ?>
						</a>
					</li>
					<li class="nav-link">
						<a href="Laporan.php" class="nav-list1">Laporan</a>
					</li>
					<li class="nav-link">
						<a href="transaksi.php" class="nav-list1">Transaksi</a>
					</li>
					<li class="nav-link">
						<a href="data_petugas.php" class="nav-list1">Data Petugas</a>
					</li>
					<li class="nav-link aktif">
						<a href="data_siswa.php" class="nav-list1">Data Siswa</a>
					</li>
					<li class="nav-link">
						<a href="adminindex.php" class="nav-list1">Beranda</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

<!-- Akhir navbar -->


<!-- edit-table -->
	<?php  
	include 'koneksi.php';

	$id = $_GET['id_user'];
	$data = mysqli_query($koneksi, "SELECT * FROM tb_userslog WHERE id_user='$id' ");
	while($d = mysqli_fetch_array($data)) {
	?>

	<div class="tab-cont" align="center">
		<form method="post" action="updatesiswa.php">
			<table border="1" class="table">
				<tr>
				<th width="100" align="center">Id user</th>
				<th width="200" align="center">Nama</th>
				<th width="150" align="center">Nisn</th>
				<th width="200" align="center">Username</th>
				<th width="200" align="center">Email</th>
				<th width="150" align="center">Telp</th>
				</tr>
				<tr>
					<td><input type="text" name="id_user" value="<?php echo $d['id_user'];?>"></td>
					<td><input type="text" name="nama" value="<?php echo $d['nama'];?>"></td>
					<td><input type="text" name="nisn" value="<?php echo $d['nisn'];?>"></td>
					<td><input type="text" name="username" value="<?php echo $d['username'];?>"></td>
					<td><input type="text" name="email" value="<?php echo $d['email'];?>"></td>
					<td><input type="number" name="telp" value="<?php echo $d['telp'];?>"></td>
				</tr>
			</table>
			<button type="submit" value="submit">Simpan</button>
		</form>


	<?php
	}
	?>
	</div>



<!-- akhir edit-table -->

<!-- footer -->

<?php include 'footer.php' ?>

<!-- akhir footer -->