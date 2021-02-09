<html lang="en">
<head>
	<title>Login Pembayaran SPP</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="login.css">
	<link rel="stylesheet" href="fontawesome-free-5.12.1-web/css/all.css">
</head>
<body>
	<div class="login-form">
		<div class="login-index">
			<h4>Silahkan Login</h4>
			<div class="input">
				<form method="post" action="loginprosesusers.php">
					<div class="username">
						<label>Username</label>
						<input type="text" name="username" placeholder="Ketik username kamu" autocomplete="off" required="on">
						<span class="input-ic1"><i class="far fa-user"></i></span>
					</div>
					<div class="pass">
						<label>Password</label>
						<input type="password" name="password" placeholder="Ketik password kamu" required="on">
						<span class="input-ic2"><i class="fas fa-lock"></i></span>
					</div>
					<div class="pass">
						<label>NISN</label>
						<input type="text" name="nisn" placeholder="Ketik NISN kamu" required="on" autocomplete="off">
						<span class="input-pic3"><i class="fas fa-barcode"></i></span>
					</div>
					<div class="lupa">
						<p><a href="lupapass.php">Lupa pasword/NISN?</a></p>
					</div>
					<div class="btn" align="center">
						<button value="submit">Login</button>
					</div>
				</form>
				<div class="beranda">
					<a href="index.php"><i class="fas fa-long-arrow-alt-left"></i> Beranda</a>
				</div>
				<div class="login-ad">
					<span><a href="login.php">Login Admin/Petugas <i class="fas fa-long-arrow-alt-right"></i></a></span>
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
			<div class="alter-log-2" align="center">
				<div class="daftar-2">
					<p><a href="register.php">Atau bisa juga daftar disini <i class="fas fa-long-arrow-alt-right"></i></a --></p>
				</div>
			</div>
		</div>
	</div>
</body>
</html>