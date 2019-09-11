/*$("frmRegister").validate();


// verifier taille champs password

// les elements
$("#frmPass").length;
$("#frmRegister");
*/



// traitement champs formulaire obligatoire
$(document).ready(function(){
  // le form, champs, type
  $("#frmInscription input[type='text']").blur(function(){
      // verifier si donnee saisie
      if( !$(this).val() ){
          // faire quelque chose
          $(this).addClass("error");
      }else{
          // faire autre chose
      $(this) .removeClass("error");
      }
     
  });

    //e-mail


  $("#frmInscription input[type='email']").blur(function(){
      // verifier si donnee saisie
      if( !$(this).val() ){
          // faire quelque chose
          $(this).addClass("error");
      }else{
          // faire autre chose
      $(this) .removeClass("error");
      }
     
  });


        //password



  $("#frmInscription input[type='password']").blur(function(){
      // verifier si donnee saisie
      if( !$(this).val() ){
          // faire quelque chose
          $(this).addClass("error");
      }else{
          // faire autre chose
      $(this) .removeC
      lass("error");
      }
     
  });
  $("#frmInscription") .validate();

});


