<?php

if(isset($_GET['formAdd']))
{
    if($_GET['formAdd'])
    {
    sport_toevoegen();
    }
}
else{
    // get_sporten();
}

function sport_toevoegen(){
    if (isset($_POST['naam'])){
        $pdo = require 'secure/config.php';
        $naam = $_POST['naam'];
        $locatie = $_POST['locatie'];
        $statement = $pdo->prepare("INSERT INTO sport (naam, locatie) VALUES(:naam, :locatie)");
        $statement->bindParam(':naam',$naam);
        $statement->bindParam(':locatie',$locatie);
        $statement->execute();

        if ($statement)
        {
            $pdo=null;
            get_sporten();
        }
    }
    else {
            $verwerking = 'sc';
            include 'templates/sport_form.php';
    }
}
    

function get_sporten(){

    $pdo = require 'secure/config.php';

    $sql = 'SELECT * FROM sport';
    $statement = $pdo->prepare($sql);

    try {
        $statement->execute();
        $sporten = $statement->fetchAll(PDO::FETCH_ASSOC);
        $_SESSION['sporten']=$sporten;
        include 'templates/listsporten.php';
        
    }
    catch(PDOException $pdoe) {
        echo "fout bij opvragen";
        die;
    }
}

function sport_wijzigen(){
    if (isset($_POST['naam'])){
        require 'secure/config.php';
        $id = $_POST['id'];
        $naam = $_POST['naam'];
        $statement = $pdo->prepare("UPDATE sport SET naam = :naam
        WHERE idSport =:id");
        $statement->bindParam(':naam',$naam);
        $statement->bindParam(':id', $id);
        $statement->execute();
        if ($statement)
        {
            $pdo=null;
            get_sporten();
        }
    }
    else {
        $id = $_GET['idSport'];
        require 'secure/config.php';
        $statement = $pdo->prepare("SELECT * FROM sport WHERE idSport =:id");
        $statement->bindParam(':id', $id);
        $statement->execute();
        $count = $statement->rowCount();
        if ($count > 0)
        {
            $statement->setFetchMode(PDO::FETCH_ASSOC);
            $sport = $statement->fetch();
            $pdo=null;
            $verwerking = 'su';
            include 'templates/sport_form.php';
        }
        else {
            $pdo=null;
            
        }
    }
}

function sport_weggooien(){

    $pdo = require 'secure/config.php';
    $id = $_GET['idSport'];
    $sql = 'DELETE from sport WHERE idSport =:id';

    $statement = $pdo->prepare($sql);
    $statement->bindParam(':id', $id);
    
    try {
        $statement->execute();
        $pdo=null;
        get_sporten();
    }
    catch (PDOException $pdoe) {
        echo "fout bij verwijderen";
        die;
    }
}



?>