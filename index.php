<?php
session_start();
require 'model/crudUser.php';
require 'model/crudSporten.php';
require 'model/crudLessen.php';

if(isset($_POST['form']))
{
    switch($_POST['form'])
    {
        case 'inlog':inlogAction();
        break;
        case 'su': sport_wijzigen();
        break;
        case 'sc': sport_toevoegen();
        break;
        case 'register': registerAction();
        break;
        case 'au': account_wijzigen();
        break;
        case 'lu': les_wijzigen();
        break;
        case 'lc':les_toevoegen();
        default;
    
    }
} 
elseif(isset($_GET['fun'])){
    if($_GET['fun']==1){
        inlogAction();
    }
    elseif($_GET['fun']=='sr' && $_SESSION['rechten']== 1 ){ //crud items a
        get_sporten();       
    }
    elseif($_GET['fun']=='sc' && $_SESSION['rechten']== 1 ){ // crud items b
        sport_toevoegen();
    }
    elseif($_GET['fun']=='su' && $_SESSION['rechten']== 1){
        sport_wijzigen();
    }
    elseif($_GET['fun']=='sd' && $_SESSION['rechten']== 1){
        sport_weggooien();
    }
    elseif($_GET['fun']=='ar' && $_SESSION['rechten']== 1){
        get_accounts();
    }
    elseif($_GET['fun']=='au' && $_SESSION['rechten']== 1){
        account_wijzigen();
    }
    elseif($_GET['fun']=='ad' && $_SESSION['rechten']== 1){
        account_weggooien();
    }
    elseif($_GET['fun']=='lr' && $_SESSION['rechten']== 2){
        get_lessen();
    }
    elseif($_GET['fun']=='lc' && $_SESSION['rechten']== 2){
        les_toevoegen();
    }
    elseif($_GET['fun']=='lu' && $_SESSION['rechten']== 2){
        les_wijzigen();
    }
    elseif($_GET['fun']=='ld' && $_SESSION['rechten']== 2){
        les_weggooien();
    }
    elseif($_GET['fun']==2){
        registerAction();
    }
    elseif($_GET['fun']==99){
        uitlogAction();
    }
    
}
else{
    if(!isset($_SESSION['rechten'])){
        // inlogAction();
        include 'templates/home.php';
    }
    else{
        switch($_SESSION['rechten'])
        {
            case 1:
                include 'templates/admin.php';
                break;
            case 2: 
                include 'templates/docenten.php';
                break;
            case 3:
                include 'templates/rol3.php';
                break;
            default: break;
        }
    }
    
}
    

