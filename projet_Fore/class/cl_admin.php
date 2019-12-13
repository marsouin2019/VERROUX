<?php


class admin{
    
    
    //proprietes
    public $email;
    public $password;
    public $profil;

    //variable mysqli
    public $connectDB;
   
   
    //méthode
    public function __construct($myconnexion)
    {
        // initialisation de la connexion internet
       $this->connectDB = $myconnexion;

       //print_r($this->connectDB);
    }
    public function add_admin(array $data)
    {
     //print_r($datadata);
     $this->email = $data["frmEmailAdmin"];
     $this->password = password_hash($data["frmPassAdmin"], PASSWORD_DEFAULT);
     $this->profil = "admin";
    

      // insert in database
     //table login_admin
     // insert login
     $req = $this->connectDB->query("INSERT INTO logins_admin( email, password, profil)VALUES('".$this->email."', '".$this->password."', '".$this->profil."')");
    }//fin de add_admin

    public function login_admin(array $data)
    {
        //recuperer les donnees de form connexion--
        //redirection vers un espace admin

     $this->email =$data["frmEmailAdmin"];

     //requete select pour recuperer les info login d'une personne

     $login = $this->connectDB->query("SELECT * FROM logins_admin WHERE email = '".$this->email."' ");
     $row = $login->fetch_assoc();

     $_SESSION["logins_admin"]= $row["id"];

     // verif password
     $hash = $row["password"];

    if (password_verify( $data["frmPassAdmin"], $hash)) {
        echo 'Le mot de passe est valide !';

        // redirection 
        header("Location: http://localhost/projet_Fore/admin/", replace);
    } else {
        echo 'Le mot de passe est invalide.';
    }

    
     
    
    }//fin de function login_admin

    


   




}//fin de class admin