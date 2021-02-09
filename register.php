<html lang="en">
<head>
	<title>Login Pembayaran SPP</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="logot.css">
	<link rel="stylesheet" href="fontawesome-free-5.12.1-web/css/all.css">
</head>
<body>
	<div class="login-form">
		<div class="login-index">
			<h4>Form Registration</h4>
			<div class="input">
				<form method="post" action="registerproses.php">
					<div class="nama">
						<label>Nama</label>
						<input type="text" name="nama" placeholder="Ketik nama kamu" autocomplete="off" required="on">
						<span class="input-ic1"><i class="fas fa-user-alt"></i></span>
					</div>
					<div class="username">
						<label>Username</label>
						<input type="text" name="username" placeholder="Buat username kamu" autocomplete="off" required="on">
						<span class="input-ic2"><i class="far fa-user"></i></span>
					</div>
					<div class="pass">
						<label>Password</label>
						<input type="password" name="password" placeholder="Buat password kamu" required="on">
						<span class="input-ic3"><i class="fas fa-unlock-alt"></i></span>
					</div>
					<div class="con-pass">
						<label>Confirm Password</label>
						<input type="password" name="password2" placeholder="Ketik ulang password kamu" required="on">
						<span class="input-ic4"><i class="fas fa-lock"></i></span>
					</div>
					<div class="email">
						<label>E-mail</label>
						<input type="text" name="email" placeholder="ex: blabla@gmail.com" required="on" autocomplete="off">
						<span class="input-ic5"><i class="fas fa-envelope-square"></i></span>
					</div>
					<div class="nomor">
						<label>No. Telp</label>
						<input type="text" name="telp" placeholder="ex: 911" required="on" autocomplete="off">
						<span class="input-ic6"><i class="fas fa-phone-square-alt"></i></span>
					</div>
					<div class="nisn">
						<label>NISN</label>
						<input type="text" name="nisn" placeholder="Ketik NISN kamu" required="on" autocomplete="off">
						<span class="input-ic7"><i class="fas fa-barcode"></i></span>
					</div>
					<div class="btn" align="center">
						<button value="submit" name="register">Register</button>
					</div>
				</form>
				<div class="beranda">
					<a href="loginuser.php"><i class="fas fa-long-arrow-alt-left"></i> Kembali</a>
				</div>
			</div>
			<div class="alter-log" align="center">
				<div class="daftar">
					<p>Atau daftar disini</p>
				</div>
				<div class="daftar-sosmed">
					<a href="#"><i class="fab fa-facebook"></i></a>
					<a href="#"><i class="fab fa-twitter-square"></i></a>
					<a href="#"><i class="fab fa-google"></i></a>
				</div>
			</div>
		</div>
	</div>
</body>
</html>