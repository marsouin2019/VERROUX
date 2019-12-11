<?php

class Inscription
{
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
    public $imputMetier;
    public $inscritPoleEmploi;
    public $imputPoleEmploi;
    public $allocationChomage;
    public $formationa1;
    public $imputa1;
    public $formation2;
    public $imputa2;
    public $imputAutreFormation;
    public $scolaritePays;
    public $imputClass;
    public $imputage;
    public $diplome;
    public $imputDiplome;
    public $utilisationOrdinateur;
    public $imputPourquoiFormation;
    public $imputAutreFormation2;


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

         $this->prenom = ltrim(htmlentities(ucfirst($data["frmPrenom"])));
         $this->nom = ltrim(htmlentities(strtoupper($data["frmNom"])));
         $this->naissance = ltrim(htmlentities(ucfirst($data["frmBday"])));
         $this->naissancePays = ltrim(htmlentities(ucfirst($data["frmPaysnaissanceT"])));
         $this->naissanceVille = ltrim(htmlentities(ucfirst($data["frmVilledenaissance"])));
         $this->nationnalite = ltrim(htmlentities(ucfirst($data["frmNationalite"])));
         $this->situationFamiliale = ltrim(htmlentities(ucfirst($data["frmSituation"])));
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
         $this->imputMetier = ltrim(htmlentities(ucfirst($data["metieractu"])));
         $this->inscritPoleEmploi = ltrim(htmlentities(ucfirst($data["poleEmploi"])));
         $this->allocationChomage = ltrim(htmlentities(ucfirst($data["chomage"])));
         $this->imputPoleEmploi = ltrim(htmlentities(ucfirst($data["poleEmploiO"])));
         $this->formationa1 = ltrim(htmlentities(ucfirst($data["formA1"])));
         $this->imputa1 = ltrim(htmlentities(ucfirst($data["formA1Oui"])));
         $this->formation2 = ltrim(htmlentities(ucfirst($data["formA2"])));
         $this->imputa2 = ltrim(htmlentities(ucfirst($data["formA2Oui"])));
         $this->imputAutreFormation = ltrim(htmlentities(ucfirst($data["formAutre"])));
         $this->scolaritePays = ltrim(htmlentities(ucfirst($data["scolarisation"])));
         $this->imputClass = ltrim(htmlentities(ucfirst($data["scoClasse"])));
         $this->imputage = ltrim(htmlentities(ucfirst($data["scoAge"])));
         $this->diplome = ltrim(htmlentities(ucfirst($data["diplome"])));
         $this->imputDiplome = ltrim(htmlentities(ucfirst($data["diploName"])));
         $this->utilisationOrdinateur = ltrim(htmlentities(ucfirst($data["ordinateur"])));
         $this->imputPourquoiFormation = ltrim(htmlentities(ucfirst($data["objetForm"])));
         $this->imputAutreFormation2 = ltrim(htmlentities(ucfirst($data["frmling"])));

         // insert in database
         $req = $this->connectDB->query("INSERT INTO inscription (nom, prenom, civilite) 
         VALUES ('".$this->nom."', '".$this->prenom."', '".$this->civilite."')");

         print_r($req);




    }



}