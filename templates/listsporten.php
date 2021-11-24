<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="templates/CSS/sport_list.css">
    <link rel="stylesheet" type="text/css" href="templates/CSS/styles.css">
    <Link rel="stylesheet" type="text/css" href="templates/CSS/tabel_sporten.css">
    <title>Document</title>
</head>
<body>
<?php
include "templates/nav_admin.php";
?>
<div class="container">
    <?php
    $sporten = $_SESSION['sporten'];
    echo "<table class='styled-table'>
            <tr>
                <th>ID</th>
                <th>Naam</th>
            </tr>" ;
    foreach($sporten as $sport){
        $id = $sport['idSport'];
        echo "<tr>
                <td>". $sport['idSport']. "</td>
                <td>". $sport['naam']. "</td>
                <td>". "<a href='?fun=su&idSport=$id'>wijzigen</a>"."</td>
                <td>". "<a href='?fun=sd&idSport=$id'>verwijderen</a>". "</td>
              </tr>";
        
    }
    echo '</table>';

        echo "<a href='?fun=sc'>nieuw</a>";
    ?>
</div>
</body>
</html>