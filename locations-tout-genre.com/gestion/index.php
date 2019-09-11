<?php

// c'est un comentaire

/*
c'est un comentaire sur plusieurs lignes
*/

/*echo "Bonjour c'est la D-WEB";
echo 'Bonjour c\'est la D-WEB'; // altgr+8
echo"<p>Bonjour c'est la D-WEB</p>";
?>
<h1>mon titre</h1>
*/
//phpinfo();


//une variable est un espace de mémoire


//comment decmarer une varible en php
$nom_variable ="";
$_nomVariable =""; //camelCase
$nomVariable ="";
$NomVariable =""; //je ne le vous conseille pas
$nomVariable;

/*$nomFiliere = "D-WEB";
//comment afficher la variable

echo "bonjour la $nomFiliere";
echo 'Bonjor la $nomFiliere'; // A NE PAS FAIRE!!
echo "Bonjour la ".$nomFiliere;
echo 'bonjour la'.$nomFiliere."c'est l'heure de manger";
*/

// variables et les chffres / nombres / additions

/*
$a = 1;
$b = 100;
$c = $a + $b;
echo $c;
echo"le résultat est :$c";

$c += $a;
echo $c;

echo$c += $c;


// les comparaisons

if ($a <=> $b)
{
    echo 1;
    echo'true';
}else{
    echo 0;
    echo 'false';
}
*/

// affichier contenu d'une variable
/*
var_dump($nomFiliere);
var_dump($e);

//affichier information d'une variable lisible

print_r($nomFiliere);
print_r($e);
*/

//tableaux
$tab = array();
$tab = [];

// donnes dans un tableau

$tab = array("d-web", "pmspa");
//var_dump($tab);
//br colonne // index /: valeur correspondant index + longueurde chaine

$tab2=array($tab, $c,$e);
//var_dump($tab2);
//tableau d e3 elements = array(3) qui sont
/*
-index 0 = un tableau
-index 1 = une variable
-index 2 = une variable
*/

// pour afficher un tableau
//echo $tab2[0][0];

// afficher toutes les valeurs d'un tableau

//compter le nombre elements dans un tableau
$nbrElement = count($tab);

//boucle for
for($i=0;$i < $nbrElement;$i++)
{
    //echo $i;
    //comment afficher tout les tableaux
    //echo $tab[$i];
}

//boucle foreach
// deuxieme methode d'afficher tout les tableaux
foreach($tab as $filiere)
{
    //afficher valeur tableau
    //echo$filiere;
}
//afficher valeur avec index
foreach($tab as $inedx => $filiere)
{
    //echo" L'index : $inedx, correspond a la filière : $filiere.";
}


//afficher contenu de $tab2

//reponse
foreach ($tab2 as $index => $filiere)
{
   //var_dump($filiere);
   
    
}

//autre type de boucle
$tab3 = ["un","deux","trois","cinq","stop"];

foreach ($tab3 as $value ) 
{
    //  afficher l'un des elements du tableau
    //  echo $ta3[2]; //trois
    if ($value == "trois") {
       // echo $value;
    }


}

//declarer un tableau dans une variabe
//qui contient les elements suivants 
/*
janvier, fevrier , mars , 2019,2018,2017
"fin", "stop,"recommencer"
*/

$tab4 = array("janvier", "fevrier" , "mars",2019,2018,2017,"fin", "stop","recommencer");

// Afficher le contenu du tableau $tabMois
// $tabMoisNum = [1,2,3,4,5,6,7,8,9,10,11,12];
/*

$tabMois = ["Janvier","Février","Mars","Juin","Juillet","Août","Septembre","Octobre","Novembre","Décembre"];
//afficher le contenu du tableau
foreach ($tabMois as $valeur)
{
  echo $valeur;
  echo "$index - $value";
}
*/

//  choisi/paramettrer/personnaliser index de tableau
$tabVS =["id-850"=>"VERROUX ","id-851"=>"RENAY","id-852"=>"VITULAINT","id-853"=>"TERRINE"];
foreach($tabVS as $ID=>$nomVS)
/*{
    // afficher id et nom VS
    echo "<pre>";
    echo "L'identifiant : $ID est attribué au VS $nomVS";
    echo"</pre>";
}*/

//une variable constante

//declarer ne variable constante
define("JOURNÉE","24h");
// echo JOURNÉE;

/*
A ne pas faire
echo"A la fin de cette journée , nous aurons JOURNÉE de plus";
echo'A la fin de cette journée, nous aurons JOURNÉE deplus';
*/
//echo"A la fin de cette journée, nous aurons ".JOURNÉE." deplus";

// addition de variable constante
/*define("NBR1",50);
define("NBR2",150);
$resultat = NBR1+NBR2;
echo $resultat;

define("INFO",NBR1);
echo INFO;
*/
// structures de controle
$a=10;
$b=-15;
$c=0.50;
$e= $a+$c;

//IF
if ($a==$e) {
    // si c'est vrai , affiche une reponse
    echo"La réponse est vrai.";

    // mettre d'autres actions
    $e = $a;

    // si c'est faut, il ne se passe rien
}

//ELSE
/*
if ($a==$e) {
    //si c'est vrai affiche quelque chose
    
}else {
    // si c'est fait affiche autre chose
    echo"la réponse est fausse.";

    // mettre des actions
    $e = 0;
}
*/

//ELSE IF / ELSEIF permet de faire des test à condition que le resultat soit faux
/*
if ($a > $b) {
    //sic'est vrai
    echo "a est plus grand que b";
}elseif ($a==$b) {
    echo "a est égal à la b";
}else {
    echo"a est plus petit que b.";
}
*/

//Syntaxe alternative
?>

<?php /*
if($a==5):?>
<p>A est égale 5</p>
<?php endif; ?>
<?php
$a = 7;
$b = 6;
if ($a==5): 

   echo "a égale 5";   // c'est faux
   echo "...";
elseif ($a == 6):    //c'est faux
   echo"a égale 6";
   echo"!!!";
else:              //c'est vrai
    echo"a ne vaut ni 5 ni 6";
endif;

// operateur ternaire = condition ternaire
// ?

// resultat ? si c'est vrai : si c'est faux
echo $result ? $a == $b :"c'est faux";

// c'est égal
if ($a == $b) 
{
    // affiche rien
}else {
    //affiche
    echo $result = "c'est faux";
}
*/



// exercices
/*
    - Mettre en place un script autoriser les hommes d'un âge supérieur à 35 ans à écrire un livre

    - Mettre en place un script permettant de lister
    les personnes ayant  réussie l'examen du code de la route. Voici les notes .

    35,37,25,4,40,12,34,22,20,10,10
*/

/*
$age = 35;
$infa = 10;

if ($age > $infa)
 {
    //si c'est vrai
    echo "l'age est autoriser";
}elseif ($age==$infa) {
    echo "l'age n'est pas autoriser";
}
*/
$codeP = [35,37,25,4,40,36,40,12,34,22,20,10,10];
     
foreach($codeP as $value)
{
if($value > 34)
{
    echo $value;
}

}
//boucle while (prend une expression et une commande)
/*
$i = 1;
while($i <= 10) {
echo $i;
$i++;
}
*/
// boucle do while (fonction tester a la fin de chaque itération,ce qui n'est pas le cas avec la boucle while, la premiere est tjr exécuter)
$i = 0; //déclaration de variable
do {
   echo $i;
}while ($i > 0);

//break

$tabVS = ["RENARD","TERRINE","NEY","MARIELUCE","THOME"];
/*
$nbr = count($tabVS);
 foreach($tabVS as $value)
 {
      if($value == "MARIELUCE")
      {
          break;
      }
      echo $value;
 }*/

//switch 

$i=25;
switch($i){
    case 2 :
        echo $i; 
        break;


    case 20 :
    echo $i;
    break;

    case 25 ;
    echo $i;
    break;

}

//include (a l'intérieur d'un fichier php on inclus un fichier php, inclure un script dans au autre, exemple programme press, on appelle le ficher, on fait appelle a la fonction qui ce trouve à l'intérieur)

include ("head.php");














?> 