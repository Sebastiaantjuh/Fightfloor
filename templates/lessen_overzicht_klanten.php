<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="templates/CSS/sport_list.css">
    <link rel="stylesheet" type="text/css" href="templates/CSS/styles.css">
    <link rel="stylesheet" type="text/css" href="templates/CSS/tabel.css">
    <title>Document</title>
</head>
<body>
<?php
include "templates/nav_klanten.php";
?>
<div class="container">
    <?php
    $lessen = $_SESSION['lessen'];
    echo "<table class='styled-table'>
            <tr>
                <th>ID</th>
                <th>Naam</th>
                <th>Lokaal</th>
                <th>Sport</th>
                <th>Leraar</th>
                <th>datum</th>
            </tr>" ;
    foreach($lessen as $les){
        $id = $les['idLes'];
        echo "<tr>
                <td>". $les['idLes']. "</td>
                <td>". $les['naam']. "</td>
                <td>". $les['lokaal_idlokaal']. "</td>
                <td>". $les['sport_idSport']. "</td>
                <td>". $les['gebruiker_idLeraar']. "</td>
                <td>". $les['Datum']. "</td>
                <td>".  "<a href='?fun=in&idLes=$id'>inschrijven</a>"."</td>
              </tr>";
                
        
    }
    echo '</table>';
    ?>
</div>
</body>
</html>