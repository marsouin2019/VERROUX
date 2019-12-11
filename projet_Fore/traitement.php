<?php

// connexion db
include("class/connect.php");
include("class/cl_traitement.php");

// data form
//print_r($_POST);


//et instanciation class
$newInscription = new Inscription($mysqli);
$newInscription->add_personne($_POST);


