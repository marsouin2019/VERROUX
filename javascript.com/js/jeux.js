// declaration tableau vide
var joueurs=[];

//declaration de ma function add_joueur

function add_joueur(){
    //afficher et stocker les joueurs
    joueurs.push(prompt("Ecrire un nom de jouer en majuscule."));

    //tester variable joueurs
    if(joueurs!=null)
    {
    alert(joueurs.length);  
    document.getElementById("affiche_joueur").innerHTML = joueurs;
}  else {
           alert("vous n'avez pas indiqué de nom de joueur.");}
         }
//declaration de ma function tirage_au_sort
function tirage_au_sort()
{
  //tester la longeur de la chaine
  if( joueurs.length >0)
   { 
       /* -dé claration d'une variable
          -methode mathematique pour melanger des donnees
          -tirage au sort d'une ddonee
          -indication de la longueur de mon tableau joueurs
        */
     
       var rand = Math.floor(Math.random()*joueurs.length);
       //affichier le nom du gagnant
       document.getElementById("affiche_gagnant").innerHTML="le gagnant est : <strong>"+joueurs[rand]+"</strong>";
     } else(
         alert("vous n'avez pas inscrit de joueurs !!!")
     )





}