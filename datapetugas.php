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
						<a href="#" class="nav-tot">YourSPP.com</a>
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

<!-- tittle -->
	<div class="title" align="center">
		<h2>Dashboard data petugas</h2>
	</div>



<!-- akhir title -->

<!-- data  siswa -->


	<div class="tab-cont" align="center">
		<p><a href="tambahpetugas.php">Tambah petugas</a></p>
		<table border="1" class="table">
			<tr class="title-data">
				<td colspan="8" align="center" class="tab-title">Data Petugas</td>
			</tr>
			<tr>
				<td align="center">No.</td>

				<th width="200" align="center">Nama</th>
				<th width="150" align="center">Username</th>
				<th width="200" align="center">Password</th>
				<th width="200" align="center">Level</th>
				<th width="200" align="center">Edit</th>
			</tr>
				<?php  
					include 'koneksi.php';

					$no = 1;

					$data = mysqli_query($koneksi, "SELECT * FROM tb_petugas");
					while($d = mysqli_fetch_array($data)){
				?>
			<tr align="center">
				<td><?php echo $no++ ?></td>
				<td><?php echo $d['nama_petugas']; ?></td>
				<td><?php echo $d['username']; ?></td>
				<td><?php echo $d['password']; ?></td>
				<td><?php echo $d['level']; ?></td>

					<td>
						<a href="editpetugas.php?id_petugas=<?php echo $d['id_petugas']; ?>">Edit</a>
						|
						<a href="hapuspetugas.php?id_petugas=<?php echo $d['id_petugas']; ?> ">Hapus</a>
					</td>		
			</tr>
		<?php	
		}
		?>
		</table>
	</div>
<!-- akhir data siswa -->


</body>
</html>