<?php

class Inscription
{
    //proprietes
    public $nom;
    public $prenom;
    public $cilvilite;
    public $naissance;
    public $naissancePays;
    public $naissanceVille;
    public $nationnalite;
    public $situationFamiliale;
    public $langue;
    public $adresse;
    public $postale;
    public $ville;
    public $numcir;
    public $pays;
    public $telephone;
    public $telephoneFixe;
    public $email;
    public $travailEnFrance;
    public $travailActuellement;
    public $inputMetier;
    public $inscritPoleEmploi;
    public $inputPoleEmploi;
    public $allocationChomage;
    public $formationa1;
    public $inputa1;
    public $formation2;
    public $inputa2;
    public $inputAutreFormation;
    public $scolaritePays;
    public $inputClass;
    public $inputage;
    public $diplome;
    public $inputDiplome;
    public $utilisationOrdinateur;
    public $inputPourquoiFormation;
    public $inputAutreFormation2;

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
   
        print_r($data);

        $this->civilite =$data["frmCivilite"];
        if ($this->civilite !="M"|| $this->civilite !="Mme") {
            //return false;
            echo false;
        }

        $this->situationFamiliale =$data["frmSituation"];
        if ($this->situationFamiliale !="Celibataire"|| $this->situationFamiliale !="Divorce"|| $this->situationFamiliale !="Marie"|| $this->situationFamiliale !="Veuf") {
            //return false;
            echo false;
        }


         $this->prenom = ltrim(htmlentities(ucfirst($data["frmPrenom"])));
         $this->nom = ltrim(htmlentities(strtoupper($data["frmNom"])));
         $this->naissance = ltrim(htmlentities(ucfirst($data["frmBday"])));
         $this->naissancePays = ltrim(htmlentities(ucfirst($data["frmPaysnaissanceT"])));
         $this->naissanceVille = ltrim(htmlentities(ucfirst($data["frmVilledenaissance"])));
         $this->nationalite = ltrim(htmlentities(ucfirst($data["frmNationalite"])));
         $this->langue = ltrim(htmlentities(ucfirst($data["frmLpremiereT"])));
         $this->adresse = ltrim(htmlentities($data["frmAdresse"]));

         $this->postale = ltrim(htmlentities($data["frmPostale"]));
         if (preg_match("#a-zA-Z{5}#", $data["frmPostale"]) ); 
        {
            //return false;
            echo false;
        }

         $this->ville = ltrim(htmlentities(ucfirst($data["frmVille"]))); 
         $this->numcir = ltrim(htmlentities(ucfirst($data["frmCir"])));  
         $this->pays = ltrim(htmlentities(ucfirst($data["frmPays"])));
         $this->telephone = htmlentities($data["frmTelephone"]);        
         $this->telephoneFixe = ltrim(htmlentities(ucfirst($data["frmTelephonefixe"])));
         $this->email = $data["frmEmail"];
         $this->travailEnFrance = ltrim(htmlentities(ucfirst($data["travailler"])));
         $this->travailActuellement = ltrim(htmlentities(ucfirst($data["travActu"])));
         $this->inputMetier = ltrim(htmlentities(ucfirst($data["metieractu"])));
         $this->inscritPoleEmploi = ltrim(htmlentities(ucfirst($data["poleEmploi"])));
         $this->allocationChomage = ltrim(htmlentities(ucfirst($data["chomage"])));
         $this->inputPoleEmploi = ltrim(htmlentities(ucfirst($data["poleEmploiO"])));
         $this->formationa1 = ltrim(htmlentities(ucfirst($data["formA1"])));
         $this->inputa1 = ltrim(htmlentities(ucfirst($data["formA1Oui"])));
         $this->formation2 = ltrim(htmlentities(ucfirst($data["formA2"])));
         $this->inputa2 = ltrim(htmlentities(ucfirst($data["formA2Oui"])));
         $this->inputAutreFormation = ltrim(htmlentities(ucfirst($data["formAutre"])));
         $this->scolaritePays = ltrim(htmlentities(ucfirst($data["scolarisation"])));
         $this->inputClass = ltrim(htmlentities(ucfirst($data["scoClasse"])));
         $this->inputage = ltrim(htmlentities(ucfirst($data["scoAge"])));
         $this->diplome = ltrim(htmlentities(ucfirst($data["diplome"])));
         $this->inputDiplome = ltrim(htmlentities(ucfirst($data["diploName"])));
         $this->utilisationOrdinateur = ltrim(htmlentities(ucfirst($data["ordinateur"])));
         $this->inputPourquoiFormation = ltrim(htmlentities(ucfirst($data["objetForm"])));
         $this->inputAutreFormation2 = ltrim(htmlentities(ucfirst($data["frmling"])));

        // insert in database
        //table inscription
         $req = $this->connectDB->query("INSERT INTO inscription (nom, prenom, civilite, datedenaissance, paysdenaissance, villedenaissance, nationalite, situationfamiliale, adresse, postale, ville, numerocir, telephone, telephonefixe, email) 
         VALUES ('".$this->nom."', '".$this->prenom."', '".$this->civilite."', '".$this->naissance."', '".$this->naissancePays."','".$this->naissanceVille."', '".$this->nationalite."', '".$this->situationFamiliale."','".$this->adresse."', '".$this->postale."', '".$this->ville."', '".$this->numcir."', '".$this->telephone."', '".$this->telephoneFixe."', '".$this->email."')");
        
        //situation emploi
        $req =$this->connectDB->query("INSERT INTO situation_emploi(travailenfrance, travaileactuellement, ) 
        VALUES('".$this->travailEnFrance."')");
        print_r($req);




    }



}//fin de class inscription


