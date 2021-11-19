<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="templates/CSS/sport_list.css">
    <title>Accounts</title>
</head>
<body>
 <?php
    include "templates/nav_admin.php";
 ?>   
<div class="container">
    <?php
    $accounts = $_SESSION['accounts'];
    echo "<table><tr><th>ID</th><th>Naam</th><th>Tussenvoegsel</th><th>Achternaam</th><th>email</th><th>rol</th></tr>" ;
    foreach($accounts as $account){
        $id = $account['idKlant'];
        echo "<tr><td>". $account['idKlant']. "</td><td>". $account['naam']. "</td><td>". $account['tussenvoegsel']. "</td><td>". $account['achternaam'].  
        "</td><td>". $account['email']. "</td><td>". $account['rol']. "</td><td>". "<a href='?fun=au&idKlant=$id'>Wijzigen</a>". "</td><td>".
        "<a href='?fun=ad&idKlant=$id'>Verwijderen</a>". "</td></tr>";
    }
    echo '</table>';

    ?>
</div>
</body>
</html>