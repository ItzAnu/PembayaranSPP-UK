<?php 

  include 'koneksi.php';
  session_start();

  if ($_SESSION['nama'] == '') {
    header("location: loginuser.php");
  }


 ?>

<html lang="en">
<head>
	<title>Pembayaran SPP</title>
	<link rel="stylesheet" type="text/css" href="footer.css">
	<link rel="stylesheet" type="text/css" href="navbar.css">
	<link rel="stylesheet" type="text/css" href="index.css">
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
						<a href="#" class="nav-tot">Website Pembayaran SPP</a>
					</li>
					<li class="nav-link">
						<a href="logotprosesuser.php" class="nav-login">
							<i class="fas fas-login fa-user-circle"></i>
							<?php
			                  echo $_SESSION['nama'];
			                  echo " | ";
			                  echo $_SESSION['level']; 
			                ?>
						</a>
					<li class="nav-link">
						<a href="index.php" class="nav-list1">Cara bayar</a>
					</li>
					</li>
					<li class="nav-link">
						<a href="index.php" class="nav-list1">Tentang kami</a>
					</li>
					<li class="nav-link">
						<a href="bayarspp.php" class="nav-list1">Bayar SPP</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

<!-- Akhir navbar -->


<!-- Jumbotron -->

	<div class="jumb-cont" align="center">
		<div class="jumb">
			<h2>Selamat Datang di Website Pembayaran SPP ONLEN</h2>
			<h3>Selesai lebih <span>cepat</span> dan lebih <span>baik</span> bersama kami</h3>
			<div class="tentang">
				<a href="tentang.php">Tentang Kami</a>
			</div>
		</div>
	</div>

<!-- Akhir jumbotron -->


<!-- info panel -->

	<div class="panel-cont" align="center">
		<div class="panel-isi">
			<figure>
				<img src="img/employee.png">
				<div class="capt">
					<p class="titel">Lorem ipsum.</p>
					<p>Lorem ipsum dolor sit.</p>
				</div>
			</figure>
			<figure>
				<img src="img/loding.png">
				<div class="capt">
					<p class="titel">Lorem ipsum.</p>
					<p>Lorem ipsum dolor sit.</p>
				</div>
			</figure>
			<figure>
				<img src="img/security.png">
				<div class="capt">
					<p class="titel">Lorem ipsum.</p>
					<p>Lorem ipsum dolor sit.</p>
				</div>
			</figure>
		</div>
	</div>

<!-- akhir panel -->

<!-- isi -->
	
	<div class="isi-cont" align="center">
		<div class="isi">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, aut.</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
			<p>Lorem ipsum dolor sit.</p>
			<h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, illum.</h4>
		</div>
		<div class="gabung">
			<a href="login.php">Hayuk gabung yuk</a>
		</div>
	</div>






<!-- akhir isi -->




<!-- kerja -->

	<div class="kerja-cont" align="center">
		<div class="sama">
			<h2>Bekerja Sama Dengan </h2>
			<hr color="#007bff">
			<div class="kerja-fig">
				<figure>
					<img src="img/gopayev.png">
				</figure>
				<figure class="smk">
					<img src="img/bni1.png">
				</figure>
				<figure class="bpd">
					<img src="img/bca.png">
				</figure>
				<figure class="indomrt">
					<img src="img/indomaret.png">
				</figure>
			</div>
		</div>
	</div>



<!-- akhir sama -->

<!-- footer -->
<?php include 'footer.php' ?>
</body>
</html>