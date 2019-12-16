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
if ($_POST) {
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
        case 'frmUpdate' :

        break;
        default:
            
            break;
    }
}else {
    //$_GET
    $idpersonne = $_GET["id"];
    $action = $_GET["action"];

    switch ($action) {
        case 'modifier':
            # code...
            
            break;
        
        default:
            # code...
            $newInscription->delete_personne($id);
            break;
    }


    exit;

    $newInscription->delete_personne($idpersonne);
}




