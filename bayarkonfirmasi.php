<?php 

  include 'koneksi.php';
  session_start();

  if ($_SESSION['nama'] == '') {
    header("location: loginuser.php");
  }

  $query = mysqli_query($koneksi, "SELECT * FROM tb_pembayaran ORDER BY tb_pembayaran.id_pembayaran DESC ");
  $row = mysqli_fetch_array($query);

 ?>


 <!DOCTYPE html>
 <html>
 <head>
 	<title>Konfirmasi</title>
 	<link rel="stylesheet" type="text/css" href="bayarspp.css">
	<link rel="stylesheet" type="text/css" href="index.css">
	<link rel="stylesheet" type="text/css" href="footer.css">
	<link rel="stylesheet" type="text/css" href="navbar.css">
	<link rel="stylesheet" href="fontawesome-free-5.12.1-web/css/all.css">
 </head>
 <body>
 	<!-- Navbar -->

	<nav class="">	
		<div class="nav">
			<div class="nav-list">
				<ul>
					<li class="logo"><a href=""><img src="img/logo.jpeg" width="80"></a></li>
					<li class="nav-tit">
						<a href="#" class="nav-tot">YourSPP.com</a>
					</li>
					<li class="nav-link">
						<a href="#" class="nav-login">
							<i class="fas fas-login fa-user-circle"></i>
							<?php
			                  echo $_SESSION['nama'];
			                  echo " | ";
			                  echo $_SESSION['level']; 
			                ?>
						</a>
					<li class="nav-link">
						<a href="#.php" class="nav-list1">Log out</a>
					</li>
					<li class="nav-link">
						<a href="#" class="nav-list1">Cara membayar</a>
					</li>
					</li>
					<li class="nav-link">
						<a href="#.php" class="nav-list1">Tentang kami</a>
					</li>
					<li class="nav-link aktif">
						<a href="formbayar.php" class="nav-list1">Bayar SPP</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

<!-- Akhir navbar -->

<!-- bayar konfirmasi -->
	<div class="bayar-cont" align="center">
		<h2>Konfirmasi Transaksi</h2>
		<hr width="125" color="blue">
		<p class="identitas">Keterangan</p>
			<div class="bayar-isi">
				<p >Nama: <?php echo $row['nama']; ?></p>
				<p >NISN: <?php echo $row['nisn']; ?></p>
				<p >Email: <?php echo $row['email']; ?></p>
				<p >Metode: <?php echo $row['metode_bayar'] ?></p>
				<p >Jumlah bayar: <?php echo $row['jumlah_bayar']; ?></p>
			</div>
			
			<div class="metode-bayar">
			<p>Silahkan Konfirmasi di Bawah ini</p>
				<form method="post" action="konfirmasi.php?id_pembayaran=<?php echo $row['id_pembayaran'] ?>">
					<button type="submit" name="konfirmasi">Konfirmasi!</button>
				</form>
			</div>

	</div>

<!-- akhir konfirmasi -->

<!-- footer -->

<?php include 'footer.php' ?>

<!-- akhir footer -->
 </body>
 </html>