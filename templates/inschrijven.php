<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <link rel="stylesheet" type="text/css" href="templates/CSS/style.css">
    <title>Sporten</title>
</head>

<body>
		<div class="login">
			<h1>Login</h1>
			<form action="" method="post">
				<label for="naam">
					<i class="fas fa-paper-plane"></i>
				</label>
				<input type="text" name="naam" value='<?php echo $account_naam; ?>' >
                <label for="Tussenvoegsel">
					<i class="fas fa-user"></i>
				</label>
				<input type="text" name="tussenvoegsel" value='<?php echo $account_tussenvoegsel; ?>'  >
                <label for="Achternaam">
					<i class="fas fa-user"></i>
				</label>
                <input type="text" name="achternaam" value='<?php echo $account_achternaam; ?>' >
                <label for="Email">
					<i class="fas fa-paper-plane"></i>
				</label>
				<input type="text" name="email" value='<?php echo $account_email; ?>' >
                <label for="Rol">
					<i class="fas fa-user"></i>
				</label>
                <input type="text" name="rol" value='<?php echo $account_rol; ?>' >
				<input type="hidden" name="form" value='<?php echo $verwerking; ?>'>
				<input type="hidden" name="id" value='<?php echo $account_id ?>' >
				<input type="submit" value="Opslaan">
			</form>
		</div>
		
</body>
</html>