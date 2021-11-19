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
			<h1>Login</h1> <?php if(isset($sport)){
				$sport_naam = $sport['naam'];
				$sport_id = $sport['idSport'];
				$sport_locatie = $sport['locatie'];				
				} else {
					$sport_naam = '';
					$sport_id = '';
					$sport_locatie = '';
				}?>
			<form action="" method="post">
				<label for="naam">
					<i class="fas fa-paper-plane"></i>
				</label>
				<input type="text" name="naam" value='<?php echo $sport_naam; ?>' >
				<label for="locatie">
					<i class="fas fa-city"></i>
				</label>
				<input type="text" name="locatie" value='<?php echo $sport_locatie; ?>' >
				<input type="hidden" name="form" value='<?php echo $verwerking; ?>'>
				<input type="hidden" name="id" value='<?php echo $sport_id; ?>' >
				<input type="submit" value="Opslaan">
			</form>
		</div>
		
</body>
</html>