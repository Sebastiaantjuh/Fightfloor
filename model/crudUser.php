<?php
function inlogAction(){
    
    if(isset($_POST['email']))
    {
        require 'secure/config.php';
        $email = $_POST['email'];
        $password = $_POST['password'];
        $hashed_password = hash('sha256',$password);
        $sql = 'SELECT idKlant, wachtwoord, naam, rol FROM gebruiker where email = :email';
        $statement = $pdo->prepare($sql);
        $statement->bindParam(':email',$email);
        $statement->execute();
        $user = $statement->fetch(PDO::FETCH_ASSOC);
        if(is_array($user))
        {
            if($user['wachtwoord']==$hashed_password)
            {
                $_SESSION['id']=$user['idKlant'];
                $_SESSION['naam']=$user['naam'];
                $_SESSION['rechten']=$user['rol'];
                switch($_SESSION['rechten'])
                {
                    case 1:
                        include 'templates/admin.php';
                        break;
                    case 2: 
                        include 'templates/docenten.php';
                        break;
                    case 3:
                        include 'templates/klant.php';
                        break;
                    default: break;
                }
            }
        }
        else{
           include 'templates/foutInlog.php';
        }

    }
    else{
        include 'templates/inloggen.php';
    }
}

function registerAction() {
    if (isset($_POST['naam'])) {
    require 'secure/config.php';
    $naam = $_POST['naam'];
    $tussenvoegsel = $_POST['tussenvoegsel'];
    $achternaam = $_POST['achternaam'];
    $wachtwoord = $_POST['password'];
    $hash = hash('sha256', $wachtwoord);
    $email = $_POST['email'];
    $woonplaats = $_POST['woonplaats'];
    $straat = $_POST['straat'];
    $postcode = $_POST['postcode'];
    $telefoonnumer = $_POST['telefoonnummer'];

    $sql = 'INSERT INTO gebruiker 
    (naam, tussenvoegsel, achternaam, woonplaats, straat, postcode, telefoonnummer, email, wachtwoord) 
    VALUES (:naam, :tussenvoegsel, :achternaam, :woonplaats, :straat, :postcode, :telefoonnummer, :email, :wachtwoord)';

    $statement = $pdo->prepare($sql);

    $statement->execute([
        ':naam' => $naam,
        ':tussenvoegsel' => $tussenvoegsel,
        ':achternaam' => $achternaam,
        ':woonplaats' => $woonplaats,
        ':straat' => $straat,
        ':postcode' => $postcode,
        ':telefoonnummer' => $telefoonnumer,
        ':email' => $email,
        ':wachtwoord' => $hash,

    ]);
        header('Refresh:0.1; URL=?fun=1');
    } 
    else {
        include 'templates/register.php';
    }
}

function get_accounts() {

    $pdo = require 'secure/config.php';

    $sql = 'SELECT * FROM gebruiker';
    $statement = $pdo->prepare($sql);

    try {
        $statement->execute();
        $accounts = $statement->fetchAll(PDO::FETCH_ASSOC);
        $_SESSION['accounts']=$accounts;
        include 'templates/accounts.php';
    }
    catch (PDOException $pdoe) {
        echo "fout bij opvragen";
        die;
    }
}

function account_wijzigen() {
    if (isset($_POST['naam'])) {
        require 'secure/config.php';
        $id = $_POST['id'];
        $naam = $_POST['naam'];
        $tussenvoegsel = $_POST['tussenvoegsel'];
        $achternaam = $_POST['achternaam'];
        $email = $_POST['email'];
        $rol = $_POST['rol'];
        $statement = $pdo->prepare("UPDATE gebruiker SET naam = :naam, tussenvoegsel = :tussenvoegsel, achternaam = :achternaam, email = :email, rol = :rol 
        WHERE idKlant = :id");
        $statement->bindParam(':id', $id);
        $statement->bindParam(':naam', $naam);
        $statement->bindParam(':tussenvoegsel', $tussenvoegsel);
        $statement->bindParam(':achternaam', $achternaam);
        $statement->bindParam(':email', $email);
        $statement->bindParam(':rol', $rol);
        $statement->execute();
        if ($statement){
            $pdo=null;
            get_accounts();
        }
    }
    else {
        $id = $_GET['idKlant'];
        require 'secure/config.php';
        $statement = $pdo->prepare('SELECT * FROM gebruiker WHERE idKlant = :id');
        $statement->bindParam(':id', $id);
        $statement->execute();
        $count = $statement->rowCount();
        if ($count > 0)
        {
            $statement->setFetchMode(PDO::FETCH_ASSOC);
            $account = $statement->fetch();
            $pdo=null;
            $verwerking = 'au';
            include 'templates/account_form.php';
        }
        else {
            $pdo=null;
        }
    }

}

function account_weggooien(){
    $pdo = require 'secure/config.php';
    $id = $_GET['idKlant'];
    $sql = 'DELETE FROM gebruiker WHERE idKlant = :id';
    $statement = $pdo->prepare($sql);
    $statement->bindParam(':id', $id);

    try {
        $statement->execute();
        $pdo=null;
        get_accounts();
    }
    catch (PDOException $pdoe) {
        echo "fout bij verwijderen";
        die;
    }
}
function uitlogAction() {
    session_unset();
    if(isset($_SESSION)){
            session_destroy();
            include 'templates/home.php';
    }
}


?>