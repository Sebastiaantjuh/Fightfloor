<?php 

if(isset($_GET['formAdd']))
{
    if($_GET['formAdd'])
    {
    les_toevoegen();
    }
}
else {
// get_lessen();
}

function les_toevoegen() {
    if (isset($_POST['naam'])){
        $pdo = require 'secure/config.php';
        $naam = $_POST['naam'];
        $lokaal = $_POST['lokaal'];
        $sport = $_POST['sport'];
        $leraar = $_POST['leraar'];
        $datum = $_POST['datum'];
        $statement = $pdo->prepare("INSERT INTO les (naam, lokaal_idlokaal, sport_idSport, gebruiker_idLeraar, datum)
        VALUES (:naam, :lokaal, :sport, :leraar, :datum)");
        $statement->bindParam(':naam', $naam);
        $statement->bindParam(':lokaal', $lokaal);
        $statement->bindParam(':sport', $sport);
        $statement->bindParam(':leraar', $leraar);
        $statement->bindParam(':datum', $datum);
        $statement->execute();

        if ($statement)
        {
            $pdo=null;
            get_lessen();
        }
    }
    else {
        $verwerking = 'lc';
        include 'templates/formulier_lessen.php';
    }
}

function get_lessen(){

    $pdo = require 'secure/config.php';

    $sql = 'SELECT * FROM les';
    $statement = $pdo->prepare($sql);

    try {
        $statement->execute();
        $lessen = $statement->fetchAll(PDO::FETCH_ASSOC);
        $_SESSION['lessen']=$lessen;
        //docenten naar een andere pagina leiden
        if ($_SESSION['rechten']== 2){
            include 'templates/lessen_overzicht.php';
        }
        elseif ($_SESSION['rechten']== 3){
            include 'templates/lessen_overzicht_klanten.php';
        }
    }
    catch(PDOExeception $pdoe) {
        echo "fout bij opvragen";
        die;
    }
}

function les_wijzigen(){
    if (isset($_POST['naam'])) {
        require 'secure/config.php';
        $id = $_POST['id'];
        $naam = $_POST['naam'];
        $lokaal = $_POST['lokaal'];
        $leraar = $_POST['leraar'];
        $datum = $_POST['datum'];
        $statement = $pdo->prepare("UPDATE les SET naam = :naam, lokaal_idlokaal = :lokaal, gebruiker_idLeraar = :leraar, datum = :datum 
        WHERE idLes =:id ");
        $statement->bindParam(':naam', $naam);
        $statement->bindParam(':id', $id);
        $statement->bindParam(':lokaal', $lokaal);
        $statement->bindParam(':leraar', $leraar);
        $statement->bindParam(':datum', $datum);
        $statement->execute();
        if ($statement)
        {
            $pdo=null;
            get_lessen();
        }
    }
    else {
        $id = $_GET['idLes'];
        require 'secure/config.php';
        $statement = $pdo->prepare("SELECT * FROM les WHERE idLes = :id");
        $statement->bindParam(':id', $id);
        $statement->execute();
        $count = $statement->rowCount();
        if ($count > 0)
        {
            $statement->setFetchMode(PDO::FETCH_ASSOC);
            $les = $statement->fetch();
            $verwerking = 'lu';
            include 'templates/formulier_lessen.php';
        }
        else {
            $pdo=null;
        }
    }
}

function les_weggooien(){
    
    $pdo = require 'secure/config.php';
    $id = $_GET['idLes'];
    $sql = 'DELETE FROM les WHERE idLes =:id';

    $statement = $pdo->prepare($sql);
    $statement->bindParam(':id', $id);

    try {
        $statement->execute();
        $pdo=null;
        get_lessen();
    }
    catch (PDOException $pdoe) {
        echo "fout bij verwijderen";
        die;
    }
}
?>