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
	<title>Tmabah Petugas</title>
	<link rel="stylesheet" type="text/css" href="index.css">
	<link rel="stylesheet" type="text/css" href="footer.css">
	<link rel="stylesheet" type="text/css" href="navbar.css">
	<link rel="stylesheet" type="text/css" href="datapetugas.css">
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
					<li class="nav-link aktif">
						<a href="datapetugas.php" class="nav-list1">Data Petugas</a>
					</li>
					<li class="nav-link">
						<a href="datasiswa.php" class="nav-list1">Data Siswa</a>
					</li>
					<li class="nav-link">
						<a href="adminindex.php" class="nav-list1">Beranda</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

<!-- Akhir navbar -->

<!-- table tambah -->
	<div class="tab-cont" align="center">
		<form method="post" action="tambahproses.php">
			<table class="table" border="1">
				<tr class="title-data">
					<td colspan="8" align="center" class="tab-title"> Tambah Data Petugas</td>
				</tr>
				<tr>
					<th width="200" align="center">Nama</th>
					<th width="150" align="center">Username</th>
					<th width="200" align="center">Password</th>
					<th width="200" align="center">Level</th>
				</tr>
				<tr>
					<td><input type="text" name="nama_petugas" autocomplete="off"></td>
					<td><input type="text" name="username" autocomplete="off"></td>
					<td><input type="text" name="password" autocomplete="off"></td>
					<td>
						<select name="level">
							<option value="petugas">Petugas</option>
							<option value="admin">Admin</option>
						</select>
					</td>
				</tr>
			</table>
			<button type="submit" value="simpan">Tambah</button>
		</form>
	</div>


<!-- akhir table tambah -->
</body>
</html>