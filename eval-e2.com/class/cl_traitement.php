<?php

// mettre en place la class Personne
class Personne
{

    // attributs
    public $civilite;
    public $nom;
    public $prenom;
    public $adresse;
    public $complementaire;
    public $postale;
    public $ville;
    public $telephone;
    public $email;
    public $password;

    //variable mysqli

    public $connectDB;


    // methodes

    public function __construct($myconnexion)
    {
        // initialisation de la connexion internet
       $this->connectDB = $myconnexion;

       //print_r($this->connectDB);
    }
    public function add_personne(array $data)
    {
   

        $this->civilite =$data["frmCivilite"];
        if ($this->civilite !="M"|| $this->civilite !="Mme") {
            //return false;
            echo false;
        }

         echo $this->prenom = ltrim(htmlentities(ucfirst($data["frmPrenom"])));
         echo $this->nom = ltrim(htmlentities(strtoupper($data["frmNom"])));

         
           // mise en forme et securite password
         $this->adresse = ltrim(htmlentities($data["frmAdresse"]));
         
         $this->complementaire =ltrim(htmlentities( $data["frmComplementaire"]));
         $this->postale = ltrim(htmlentities($data["frmPostale"]));
         //preg_match();
         /*
         #0-9(5)#
         

         #dweb#
         
         */

        if (preg_match("#a-zA-Z{5}#", $data["frmPostale"]) ); 
        {
            //return false;
            echo false;
        }
         $this->ville = ltrim(htmlentities(ucfirst($data["frmVille"])));
         $this->telephone = htmlentities($data["frmTelephone"]);
         $this->email = $data["frmEmail"];
         

         // mise en securite du mot de passe
            
         /*1 ere solution
         $nwpass = password_hash($this->password, PASSWORD_DEFAULT);*/
        
         /* 2 ème solution
         password_hash($this->password, PASSWORD_DEFAULT);*/

         /*3 ème solution*/
         //$this->password = password_hash($data["frmPass"], PASSWORD_DEFAULT);

         // mise en securite du mot de passe
         // condition test longueur chaine d emot de passe
         if (strlen($data["frmPass"]) < 8 ) 
         {
             //return false;
             echo false;
         }else {
             if (strlen($data["frmPass"]) > 12 )
              {
                 // return false;
                 echo false;
             } else {
                $this->password = password_hash($data["frmPass"], PASSWORD_DEFAULT);

                $resultat = $this->connectDB->query( "INSERT INTO personnes (civilite, nom , prenom, adresse , complementaire , postale ,ville ,telephone)VALUES('".$this->civilite ."','".$this->nom."','".$this->prenom."','".$this->adresse."','".$this->complementaire."','".$this->postale."','".$this->ville."','".$this->telephone."')");
                // print_r($resultat);

                if ($resultat == 1) 
                {
                    //requette pour recuperer id personne
                    $idPersonne = $this->connectDB->query("SELECT id,prenom FROM personnes WHERE telephone = '".$this->telephone."' ");
                    $row = $idPersonne->fetch_assoc();

                    $idP = $row["id"];
                    $_SESSION["prenom"]=$row["prenom"];

                    if( !empty($idP))
                    {
                        // insert login
                        $resultat = $this->connectDB->query("INSERT INTO logins( email, password, idpersonne )VALUES('".$this->email."', '".$this->password."' ,'".$idP."')");
                        
                        //redirection vers page connexion
                        header("Location: http://localhost/eval-e2.com/login.php", replace);

                    } else {
                        echo "probleme d'insertion d'une personne";
                    }


                }
         
             }
         }

    
    
    } //fin de add personne
    public function login(array $data){
        //recuperer les donnees de form connexion--
        //faire une comparaison entre les donnes saisies et celle de notre base de donnees
        //redirection vers un espace admin


        

             $this->email = $data["frmEmail"];
        
            //requete select pour recuperer les info login d'une personne
            $login = $this->connectDB->query("SELECT * FROM logins WHERE email = '".$this->email."' ");
            $row = $login->fetch_assoc();


            $idPers = $row["idpersonne"];

            $personne = $this->connectDB->query("SELECT prenom FROM personnes WHERE id ='".$idPers."'");
            $rowP = $personne->fetch_assoc();

            //print_r($row);
            // condition test longueur chaine d emot de passe

            if(strlen($data["frmPass"]) < 8)
            {
                echo"false";

            } else {

                if(strlen($data["frmPass"]) > 12)
                {
                    echo "false";
                } else{
                    // $this->password = password_hash($data["frmPassword"],PASSWORD_DEFAULT);
                    $password = $row["password"];

                   if (password_verify($data["frmPass"], $password)) {

                        $_SESSION["prenom"] = $rowP["prenom"];
                        $_SESSION["email"] = $row["email"]; //ok

                        // redirection vers espace admin
                        header("Location: http://localhost/eval-e2.com/admin/", replace);

                   } else {
                        // redirection vers page form Login
                   }

                }
            }

        }// FIN FUNCTION LOGIN
        public function resetPassword($data)
        {
            
            $this->email = $data;
            // traitement adresse email
           
            $resetPassword = $this->connectDB->query("SELECT * FROM logins WHERE email = '".$this->email."' ");
            //print_r($resetPassword);
            // generateur de nouveau password
            //$newPASSWORD = "azertyui";
            echo $newPASSWORD = $this->genePasswd(8);

            // test mail
            echo $this->envoi_password($newPASSWORD);
            exit;
            // cripet mot de passe
            $this->password = password_hash($newPASSWORD, PASSWORD_DEFAULT);


            // metre a jouer mot de passe dans la table logins
            /*

             -UDPATE
           
             */
            $resultat = $this->connectDB->query("UPDATE logins SET password='".$this->paswword."' WHERE email='".$this->email."' ");
            print_r($resultat);

        }//fin de function resetPassword
        public function genePasswd(int $length)
        {
            // test longueur
            $length = ($length == 8) ? 8: 12;

            // chaine
            $chaine = "ABCDEFGHJKMNPQRSTUWXYZabcdefghjkmbpqrs123456789.";

            //melanger
            $melanger = str_shuffle($chaine);

            //retourner
            return $passwd = substr($melanger, 0, $length);





        }//fin de la function genePasswd
        
        public function envoi_password($passwd)
        {
            //
            $to = 'marsouins2019@gmail.com';
            $subject ='New Password localhost';
            $message = 'Bonjour !, voici votre nouveau mot de passe,'.$passwd.'.'."";
            $headers ='From: hostmaster@gmail.com'."\r\n".'Reply-to:noreply@gmail.com'."\r\n".'X-Mailer: PHP/' .phpversion(); 
            
            if (mail($to, $subject, $message, $headers)) 
            {
                return "le message est envoyé.";    
            }else {
                return "le message n'est pas envoyé";
            }

        }// fin la function envoi_password

        public function delete_personne()
        {

        }//fin de la function delete_personne
        
       

       

    // indert data in  database
    // table personnes
    // table logins
    // requete insert data
    

}