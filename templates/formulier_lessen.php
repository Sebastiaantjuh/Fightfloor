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
			<h1>Login</h1> <?php if(isset($les)){
				$les_naam = $les['naam'];
				$les_id = $les['idLes'];
				$les_lokaal = $les['lokaal_idlokaal'];
                $les_sport = $les['sport_idSport'];
                $les_leraar = $les['gebruiker_idLeraar']; 	
				$les_datum = $les['datum'];	
				} else {
					$les_naam = '';
					$les_id = '';
					$les_lokaal = '';
                    $les_sport = '';
                    $les_leraar = '';
					$les_datum = '';
				}?>
			<form action="" method="post">
				<label for="naam">
					<i class="fas fa-registered"></i>
				</label>
				<input type="text" name="naam" value='<?php echo $les_naam; ?>' >
				<label for="locatie">
					<i class="fas fa-city"></i>
				</label>
				<input type="text" name="lokaal" value='<?php echo $les_lokaal; ?>' >
                <label for="sport">
					<i class="fas fa-futbol"></i>
				</label>
				<input type="text" name="sport" value='<?php echo $les_sport; ?>' >
				<label for="leraar">
					<i class="fas fa-user"></i>
				</label>
				<input type="text" name="leraar" value='<?php echo $les_leraar; ?>' >
				<label for="datum">
					<i class="fas fa-user"></i>
				</label>
				<input type="datetime-local" name="datum" value='<?php echo $les_datum; ?>' >
				<input type="hidden" name="form" value='<?php echo $verwerking; ?>'>
				<input type="hidden" name="id" value='<?php echo $les_id; ?>' >
				<input type="submit" value="Opslaan">
			</form>
		</div>
		
</body>
</html>