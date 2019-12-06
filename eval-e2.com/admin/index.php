<?php 
session_start();


        if (empty($_SESSION["prenom"]))
        {
            
            header('location:http://localhost/eval-e2.com/login.php');
        }  
        else {
            $nomPage = "Admin";

            $_SESSION["prenom"];
            include("includes/header.php"); 
            include("includes/content.php");
            include("includes/footer.php") ;
        }
   
?>