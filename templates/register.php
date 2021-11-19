<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Register</title>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
		<link href="templates/CSS/register.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<div class="register">
			<h1>Register</h1>
			<form action="" method="post" autocomplete="off">
				<label for="Naam">
					<i class="fas fa-user"></i>
				</label>
				<input type="text" name="naam" placeholder="Naam" id="naam" required>
                <label for="Tussenvoegsel">
					<i class="fas fa-user"></i>
				</label>
				<input type="text" name="tussenvoegsel" placeholder="Tussenvoegsel" id="tussenvoegsel">
                <label for="Achternaam">
					<i class="fas fa-user"></i>
				</label>
				<input type="text" name="achternaam" placeholder="Achternaam" id="achternaam" required>
				<label for="password">
					<i class="fas fa-lock"></i>
				</label>
				<input type="password" name="password" placeholder="Password" id="password" required>
                <label for="Email">
					<i class="fas fa-paper-plane"></i>
				</label>
				<input type="text" name="email" placeholder="Email" id="email" required>
                <label for="Woonplaats">
					<i class="fas fa-city"></i>
				</label>
				<input type="text" name="woonplaats" placeholder="Woonplaats" id="woonplaats" required>
                <label for="Straat">
					<i class="fas fa-road"></i>
				</label>
				<input type="text" name="straat" placeholder="Straat" id="straat" required>
                <label for="Postcode">
					<i class="fas fa-envelope"></i>
				</label>
				<input type="text" name="postcode" placeholder="Postcode" id="postcode" required>
                <label for="Telefoonnummer">
					<i class="fas fa-phone"></i>
				</label>
				<input type="text" name="telefoonnummer" placeholder="Telefoonnummer" id="telefoonnummer" required>
				<input type="hidden" name="form" value="register">
				<input type="submit" value="Register"> 
			</form>
		</div>
	</body>
</html>