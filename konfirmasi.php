<?php 

  include 'koneksi.php';
  session_start();

  if ($_SESSION['nama'] == '') {
    header("location: loginuser.php");
  }

  $query = mysqli_query($koneksi, "SELECT * FROM tb_pembayaran ORDER BY tb_pembayaran.id_pembayaran DESC ");
  $row = mysqli_fetch_array($query);
  $id = $_GET['id_pembayaran'];
  $konfirmasi = mysqli_query($koneksi, "SELECT * FROM tb_pembayaran WHERE id_pembayaran='$id'  ");
  $row2 = mysqli_fetch_array($konfirmasi);

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>
 		konfirmasi
 	</title>
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
						<a href="logotprosesuser.php" class="nav-list1">Log out</a>
					</li>
					<li class="nav-link">
						<a href="#" class="nav-list1">Cara membayar</a>
					</li>
					</li>
					<li class="nav-link">
						<a href="#" class="nav-list1">Tentang kami</a>
					</li>
					<li class="nav-link aktif">
						<a href="#" class="nav-list1">Bayar SPP</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

<!-- Akhir navbar -->


<!-- konfirmasi -->
		<div class="no-form" align="center">
			<form method="post" action="konfirmasiproses.php">
				<div class="no-isi">
					<p>Masukan No. Transaksi</p>
					<input type="hidden" value="<?php echo $row['id_pembayaran']; ?> " name="id_pembayaran">
					<input type="number" name="no_transaksi" placeholder="NO. Transaksi">
					<button type="submit">Kirim!</button>
				</div>
			</form>
		</div>



<!-- akhir konfirmasi -->


 </body>
 </html>