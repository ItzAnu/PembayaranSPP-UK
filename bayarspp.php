<?php 

  include 'koneksi.php';
  session_start();

  if ($_SESSION['nama'] == '') {
    header("location: loginuser.php");
  }

  include 'koneksi.php';
  $nisn = $_SESSION['nisn'];
  $data = mysqli_query($koneksi, "SELECT * FROM tb_pembayaran WHERE nisn='$nisn' ");
  $cek_status = mysqli_fetch_array($data);
  $cek = mysqli_num_rows($data);
  	if ($cek > 0) {
  		if ($cek['no_transaksi']=='') {
  			$mtd_pembayaran = $cek['metode_pembayaran'];
  			echo "<script>
					alert('Anda telah melakukan menyetor formulir transaksi, silahkan tulis no transaksi anda');
					documnet.location='bayarkonfirmasi.php?<?php echo $mtd_pembayaran; ?>';
  				</script>";

  		}
  	}


 ?>

<html>
<head>
	<title>Pembayaran SPP</title>
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
						<a href="carabayarsiswa.php" class="nav-list1">Cara membayar</a>
					</li>
					</li>
					<li class="nav-link">
						<a href="aboutsiswa.php" class="nav-list1">Tentang kami</a>
					</li>
					<li class="nav-link aktif">
						<a href="formbayar.php" class="nav-list1">Bayar SPP</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

<!-- Akhir navbar -->

<!-- paralax -->
	<div class="slider-cont">
		<div class="slider">
		<figure>
			<img src="img/galeri1.jpg" style="width:20%; height:500px;">
		</figure>
		<figure>
			<img src="img/galeri2.jpg" style="width:20%; height:500px;">
		</figure>
		<figure>
			<img src="img/galeri3.jpg" style="width:20%; height:500px;">
		</figure>
		<figure>
			<img src="img/galeri4.jpg" style="width:20%; height:500px;">
		</figure>
		<figure>
			<img src="img/galeri6.jpg" style="width:20%; height:500px;">
		</figure>
		</div>
	</div>
	<div class="kata">
		<div class="tittle" align="center">
			<h1>YourSPP.com</h1>
		</div>
		<div class="isi" align="center">
			<p>"Website pembayaran SPP lebih cepat dan lebih mudah bersama kami</p>
			<p>Kalo mau berusaha :v"</p>
		</div>
	</div>
<!-- akhir paralax -->

<!-- form -->
	<form method="post" 
		<?php 
			if ($cek_status['status']=='Belum Lunas') {
				if ($cek_status['id_petugas']=='') {
		?>
		action="bayarspp.php"
		<?php		
				}
				else{
		?>
		action="bayarspp.php"
		<?php
				}
			}
			elseif ($cek_status['status']=='Belum Lunas') {
				if ($cek_status['id_petugas']=='') {
		?>
		action="bayarspp.php"
		<?php
				}
				else{
		?>
		action="bayarproses.php?status=cicil"
		<?php
				}
			}
			else{
		?>
		action="bayarproses.php"
		<?php
			}
		 ?>
		 >
				<div class="form-cont" align="center">
					<div class="form">
						<p class="tittle-form">Formulir Pembayaran SPP</p>
						<div class="input-form">
							<div class="input-nisn">
								<p>Nisn</p>
								<input type="number" name="nisn" autocomplete="off" required="on" placeholder="Ketik nisn anda...">
							</div>
							<div class="input-nis">
								<p>Nis</p>
								<input type="number" name="nis" autocomplete="off" required="on" placeholder="Ketik nis anda...">
							</div>
							<div class="input-email">
								<p>Email</p>
								<input type="text" name="email" autocomplete="off" required="on" placeholder="Ex: anu@gmail.com">
							</div>
						</div>
						<div class="input-form2">
							<div class="input-nama">
								<p>Nama</p>
								<input type="text" name="nama" autocomplete="off" required="on" placeholder="Ketik nama anda...">
							</div>
							<div class="input-telp">
								<p>No. Telp</p>
								<input type="number" name="telp" autocomplete="off" required="on" placeholder="+62">
							</div>
							<div class="input-bayar">
								<p>Nominal</p>
								<select name="nominal">
									<option value="600000">/Semester (Rp.600.000)</option>
									<option value="1200000">Lunas (Rp1.200.000)</option>
								</select>
							</div>
							<div class="metode">
								<p class="text-mtd">Silahkan pilih metode pembayaran</p>
								<ul>
									<li>
										<input type="radio" name="metode" value="Gopay">
										<img src="img/gopayev.png">
									</li>
									<li>
										<input type="radio" name="metode" value="BNI">
										<img src="img/bni1.png">
									</li>
									<li>
										<input type="radio" name="metode" value="BCA">
										<img src="img/bca.png">
									</li>
									<li>
										<input type="radio" name="metode" value="Indomaret">
										<img src="img/indomaret.png">
									</li>
								</ul>
							</div>
						</div>
						<div class="buton">
							<button type="submit">Bayar Sekarang!</button>
						</div>
					</div>
			</form>
	</div>
<!-- akhir form -->


<!-- footer -->

<?php include 'footer.php' ?>

<!-- akhir footer -->
</body>
</html>