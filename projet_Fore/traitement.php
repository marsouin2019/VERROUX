<?php
session_start();
// connexion db
include("class/connect.php");
include("class/cl_traitement.php");
include("class/cl_admin.php");
// data form
//print_r($_POST);
$newInscription = new Inscription($mysqli);
$addAdmin = new admin($mysqli);



//$_POST[*frmForm] // valeur soit frmRegisster soit frmLogin
switch ($_POST["frmForm"]) 
{
    case 'frmRegisterAdmin':
    //appel methode add_admin
    
    $addAdmin->add_admin($_POST);
    break;
    case 'frmRegister':
        //appel methode add_personne
        $newInscription->add_personne($_POST);
        break;
    case 'frmLogin' :
        $addAdmin->login_admin($_POST);
    break;
    default:
        
        break;
}



