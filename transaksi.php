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
 	<title>laporan</title>
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
						<a href="transaksi.php" class="nav-list1 transaksi aktif">Transaksi</a>
					</li>
					<li class="nav-link ">
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

<!-- laporan -->
	<div class="tab-cont" align="center">
		<p class="tittle-lap">Laporan Transaksi</p>
		<table border="1" class="table">
			<tr class="title-data">
				<td colspan="10" align="center" class="tab-title">Data Laporan Transaksi</td>
			</tr>
			<tr>
				<td align="center">No.</td>

				<th width="150" align="center">Nama</th>
				<th width="150" align="center">Nisn</th>
				<th width="200" align="center">Nis</th>
				<th width="200" align="center">Email</th>
				<th width="200" align="center">Telp</th>
				<th width="150" align="center">Nominal</th>
				<th width="160" align="center">Tgl Bayar</th>
				<th width="190" align="center">ID Pembayaran</th>
				<th width="200" align="center">Edit</th>
			</tr>
				<?php  
					include 'koneksi.php';

					$no = 1;

					$data = mysqli_query($koneksi, "SELECT * FROM tb_pembayaran");
					while($d = mysqli_fetch_array($data)){
				?>
			<tr align="center">
				<td><?php echo $no++ ?></td>
				<td><?php echo $d['nama']; ?></td>
				<td><?php echo $d['nisn']; ?></td>
				<td><?php echo $d['nis']; ?></td>
				<td><?php echo $d['email']; ?></td>
				<td><?php echo $d['telp']; ?></td>
				<td><?php echo $d['jumlah_bayar']; ?></td>
				<td><?php echo $d['tgl_bayar']; ?>-<?php echo $d['bulan_dibayar']; ?>-<?php echo $d['tahun_dibayar']; ?></td>
				<td><?php echo $d['id_pembayaran']; ?></td>

					<td>
						<a href="deletetransaksi.php?id_pembayaran=<?php echo $d['id_pembayaran']; ?> ">Hapus</a>
					</td>		
			</tr>
		<?php	
		}
		?>
		</table>
		</table>
	</div>


<!-- akhir laporan -->

 </body>
 </html>