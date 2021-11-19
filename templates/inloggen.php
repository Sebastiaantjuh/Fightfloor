<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Login</title>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
        <link href="templates/CSS/style.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<div class="login">
			<h1>Login</h1>
			<form action="" method="post">
				<label for="email">
					<i class="fas fa-paper-plane"></i>
				</label>
				<input type="text" name="email" placeholder="Email" id="email" required>
				<label for="password">
					<i class="fas fa-lock"></i>
				</label>
				<input type="password" name="password" placeholder="Password" id="password" required>
				<input type="hidden" name="form" value="inlog">
				<input type="submit" value="Login">
			</form>
		</div>
		<br>
		<br>
		<br>
		<div class="link">
			<p>Geen acccount? registreer <a href="?fun=2">Hier</a></p>
		</div>
	</body>
</html>