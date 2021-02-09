<!DOCTYPE html>
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
				<form method="post" action="loginproses.php">
					<div class="username">
						<label>Username</label>
						<input type="text" name="username" placeholder="Admin/Petugas" autocomplete="off" required="on">
						<span class="input-ic1"><i class="far fa-user"></i></span>
					</div>
					<div class="pass">
						<label>Password</label>
						<input type="password" name="password" placeholder="Password" required="on">
						<span class="input-ic2"><i class="fas fa-lock"></i></span>
					</div>
					<div class="lupa">
						<p><a href="lupapass.php">Lupa pasword?</a></p>
					</div>
					<div class="btn" align="center">
						<button value="submit">Login</button>
					</div>
				</form>
				<div class="loginuser">
					<a href="loginuser.php"><i class="fas fa-long-arrow-alt-left"></i> Kembali ke login user</a>
				</div>
			</div>
		</div>
	</div>
</body>
</html>