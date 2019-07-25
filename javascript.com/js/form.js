//declartation variable sur element html titre
//let titre = document.getElementById("titre");
//affiche la propriete de l'element cible
//document.write(titre);

//declaration variable sur les elements html de type paragraphe
//let paragraphes = document.getElementsByTagName("p" );
// indiquer index de la collection (tableau)

//document.write(paragraphes[1]);
//declaration variable sur les elements html de type class

//let info = document.getElementsByClassName("info");
//document.write(info[1]);
/*exercice*/
/* 
 -cible le 2 eme paragraphe
 -cibler la class bleu
*/
//let menu = document.querySelectorAll(".menu");
//document.write(menu [1]);

//let bleu = document.getElementsByClassName("bleu");
//document.write(bleu);

//afficher le contenu dun element cible

/* Difference entre la methode var et let
 -var declaration de variable de même nom possible
 -let impossible de declarer des variable de même nom
*/

//let Titre = document.getElementById("titre").innerHTML;
//document.write(Titre);

// cible un element par son tag et affiche son contenue

//let P = document.getElementsByTagName("p");
//document.write(P[3].innerHTML);

//cible le contenu , la class bleu

//let M = document.getElementsByTagName("ul");

//document.write(M[1.].innerHTML);
//console.log(M[1].children[3]);
/*
 -cibler les listes document.getElementsByTagName("ul") => M
 -selection la liste qui contient element de classe bleu => M[1]
 -afficher le contenu de la liste selectionne M[1].innerHTML
 -afficher l'enfant qui contient la class bleu => M[1].children[3].innerHTML
*/
//document.write(M[1].children[3].innerHTML);


//formulaire facture traitement
/*document.getElementById("submit").addEventListener("click", function(event){
    event.preventDefault();  //enpeche le rechargement formulaire

    // quantite 1 definition et calcul
    

    // q1.innerHTML = 10 ; //ne s'affiche pas dans input q1
    //innerHTML n'affiche que = div,spam,p,li,a,nav,h1-h6,td

    // le value sa sert a appliquer un element en formulaire
    //imput renvoi des valeurs  = value
   /*let q1 = document.getElementById ("q1");
   document.getElementById("q1").value =2.00 ;

   
   let q2= document.getElementById("q2");
   q2.value = 20;
   let q3= document.getElementById("q3");
   q3.value = 30;
   let q4= document.getElementById("q4");
   q4.value = 40;
   let q5= document.getElementById("q5");
   q5.value = 50;
   //prix definition et calcul
   let p1 = document.getElementById("p1");
   p1.value = 100;

   let p2 = document.getElementById("p2");
  
   p2.value = 200;

   let p3 = document.getElementById("p3");
   
   p3.value = 300;
   
   let p4 = document.getElementById("p4");
   
   p4.value = 400;
   
   let p5 =document.getElementById("p5");
  
   p5.value = 500 ;
   */

   //calculet quantite/rix et afficher le total ligne
   /*
   -variable quantite
   -variable prix
   -calcule = quantite * prix
   -afficher le total
  */
   //calculer(q1,p1);  // fonction avec passage de paramettre
   // tableau - les quantites et les prix 
   /*let tabQ = [q1.value,q2.value,q3.value,q4.value,q5.value];
   let tabP = [p1.value,p2.value,p3.value,p4.value,p5.value];
  
   calculer(tabQ,tabP);



   
});//fin fonction anonyme

function calculer(quantites, prix)
  {
    //console.log(quantites);
    let nbrQ = quantites.length;
    let totals = document.getElementsByClassName("total");//8
    let subTotal = [];
    for(let i=0; i < nbrQ ; i++)
      {
          //console.log(quantites[1]);  
            //console.log(prix[1]);
            // console.log(quantites[i] * prix[i]);
            //console.log(totals[1].innerHTML = quantites[1] * prix[1]);
            for(let t=0; t < nbrQ; t++)
            {
              // i et t
              if( i === t)
              {
                totals[t].innerHTML = quantites[i] * prix[i];

                // stkoker les resultats de total par ligne
                subTotal.push((quantites[i] * prix [i]) );
              
              }
            
            }
      
      }
      // comment faire une addition des sommes dabs botre array "tableau"
      //console.log(subTotal);
      //crer une fonction calculer totaux
      function getTotal(valP,valC)
      {
        // faire une a ddition
        return valP + valC;
      }      
    //console.log(subTotal.reduce( getTotal,0 ) );
    // afficher resultat dans html td subTotal
    totals[5].innerHTML = subTotal.reduce( getTotal,0  );

    // ajouter au total la taxe unique de 5.50
    /*
    -30000 * 0.55 + 30000 =  total sur la tva
    */
  /* let taxe = 0.055;
   totals[6].innerHTML = subTotal.reduce( getTotal,0  ) * taxe ; 
  
  // total TTC
  totals[7].innerHTML =subTotal.reduce( getTotal,0  ) * taxe +  subTotal.reduce( getTotal,0  ) ;
  } //fin de la 1 ere boucle
 //calculet ma facture
   //alert(quantites.value*prix.value);
   // afficher dans totaLine-+
   //let totals = document.getElementsByClassName("total"); // collection => tableau
   //let compteTotal = totals.length; //compter le nbr d'elemnt dans le tableau afin de récuper les index // affiche 8
   // test pour calculer et affinche Un total

   //let afficheTotal = quantites.value * prix.value;
   // récuperer 
   //totals[0].innerHTML= afficheTotal;
   //alert(quantites+""+prix);
   */
