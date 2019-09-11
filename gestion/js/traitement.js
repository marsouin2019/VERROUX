// traitement champs formulaire obligatoire
$(document).ready(function(){
    // le form, champs, type
    $("#frmInscription input[type='text']").blur(function(){
       if(!$(this).val()){
            //faire quelque chose
            $(this).addClass("error");
       } else{
           //faire autre chose
           $(this).removeClass("error");
       }
    });
    $("#frmInscription input[type='email']").blur(function(){
        if(!$(this).val()){
             //faire quelque chose
             $(this).addClass("error");
        } else{
            //faire autre chose
            $(this).removeClass("error");
        }
     });
     $("#frmInscription input[type='password']").blur(function(){
        if(!$(this).val()){
             //faire quelque chose
             $(this).addClass("error");
        } else{
            //faire autre chose
            $(this).removeClass("error");
        }
     });
    
     $("#frmInscription").validate();
     
   
});

console.log($("#frmMDP").val(1))

