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
					<li class="nav-link">
						<a href="datapetugas.php" class="nav-list1">Data Petugas</a>
					</li>
					<li class="nav-link aktif">
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
		<h2>Dashboard data siswa</h2>
	</div>



<!-- akhir title -->

<!-- data  siswa -->


	<div class="tab-cont" align="center">
		<table border="1" class="table">
			<tr class="title-data">
				<td colspan="8" align="center" class="tab-title">Data Siswa</td>
			</tr>
			<tr>
				<td align="center">No.</td>
				<th width="100" align="center">Id user</th>
				<th width="200" align="center">Nama</th>
				<th width="150" align="center">Nisn</th>
				<th width="200" align="center">Username</th>
				<th width="200" align="center">Email</th>
				<th width="150" align="center">Telp</th>
				<th width="200" align="center">Edit</th>	
			</tr>
				<?php  
					include 'koneksi.php';

					$no = 1;

					$data = mysqli_query($koneksi, "SELECT * FROM tb_userslog");
					while($d = mysqli_fetch_array($data)){
				?>
			<tr align="center">
				<td><?php echo $no++ ?></td>
				<td><?php echo $d['id_user']; ?></td>
				<td><?php echo $d['nama']; ?></td>
				<td><?php echo $d['nisn']; ?></td>
				<td><?php echo $d['username']; ?></td>
				<td><?php echo $d['email']; ?></td>
				<td><?php echo $d['telp']; ?></td>

					<td>
						<a href="editsiswa.php?id_user=<?php echo $d['id_user']; ?>">Edit</a>
						|
						<a href="hapussiswa.php?id_user=<?php echo $d['id_user']; ?> ">Hapus</a>
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