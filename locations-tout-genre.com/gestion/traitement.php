<?php
//traitement du formulaire register
//print_r($_POST);

//var_dump($_POST["frmPrenom"]);

// echo password_hash("rasmuslerdorf", PASSWORD_DEFAULT);

/*$salt = "MARsouins";

$salt = md5($salt);

echo hash($salt.$_POST["frmPass"]);
*/
echo sha1(mdr5($_POST["frmPass"]));




/*foreach($_POST as $key => $value)
{
   // echo $key." valeur ".strlen(htmlentities(strip_tags($value))). "<br />";

   if (strlen(htmlentities(strip_tags($value)) ) > 50 ) 
    {
        echo "la chaine correspondant à $key , n'est pas valide <br />";
       
    }else {
        echo "$key valeur".htmlentities(strip_tags($value)). "<br />";
    }
    



}
*/