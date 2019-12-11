$("#frmFormation").blur(function(){
    if($(this).val().length == 0)
  {
    $(this).addClass("is-invalid");
  }else{
    $(this).removeClass("is-invalid").addClass("is-valid");
  }
  });

  $("#frmCivilite").blur(function(){
    if($(this).val().length == 0)
  {
    $(this).addClass("is-invalid");
  }else{
    $(this).removeClass("is-invalid").addClass("is-valid");
  }
  });

  $("#frmPrenom").blur(function(){
    if($(this).val().length == 0)
  {
    $(this).addClass("is-invalid");
    $(".msgP").removeClass("Off");
  }else{
    $(this).removeClass("is-invalid").addClass("is-valid");
    $(".msgP").addClass("Off");
  }
  });

  $("#frmNom").blur(function(){
    if($(this).val().length == 0)
  {
    $(this).addClass("is-invalid");
    $(".msgN").removeClass("Off");
  }else{
    $(this).removeClass("is-invalid").addClass("is-valid");
    $(".msgN").addClass("Off");
  }
  });
  
  $("#frmPays").blur(function(){
    if($(this).val().length == 0)
  {
    $(this).addClass("is-invalid");
    $(".msgPays").removeClass("Off");
  }else{
    $(this).removeClass("is-invalid").addClass("is-valid");
    $(".msgPays").addClass("Off");
  }
  });

  $("#frmPaysnaissanceT").blur(function(){
    if($(this).val().length == 0)
  {
    $(this).addClass("is-invalid");
    $(".msgLs").removeClass("Off");
  }else{
    $(this).removeClass("is-invalid").addClass("is-valid");
    $(".msgLs").addClass("Off");
  }
  });
  
  $("#frmVilledenaissance").blur(function(){
    if($(this).val().length == 0)
  {
    $(this).addClass("is-invalid");
    $(".msgVdn").removeClass("Off");
  }else{
    $(this).removeClass("is-invalid").addClass("is-valid");
    $(".msgVdn").addClass("Off");
  }
  });
 
  $("#frmSituation").blur(function(){
    if($(this).val().length == 0)
  {
    $(this).addClass("is-invalid");
  }else{
    $(this).removeClass("is-invalid").addClass("is-valid");
  }
  });

  $("#frmNationalite").blur(function(){
    if($(this).val().length == 0)
  {
    $(this).addClass("is-invalid");
    $(".msgNa").removeClass("Off");
  }else{
    $(this).removeClass("is-invalid").addClass("is-valid");
    $(".msgNa").addClass("Off");
  }
  });

  $("#frmLanguepremièreT").blur(function(){
    if($(this).val().length == 0)
  {
    $(this).addClass("is-invalid");
    $(".msgLpt").removeClass("Off");
  }else{
    $(this).removeClass("is-invalid").addClass("is-valid");
    $(".msgLpt").addClass("Off");
  }
  });
  
  $("#frmAdresse").blur(function(){
    if($(this).val().length == 0)
  {
    $(this).addClass("is-invalid");
    $(".msgA").removeClass("Off");
  }else{
    $(this).removeClass("is-invalid").addClass("is-valid");
    $(".msgA").addClass("Off");
  }
  });

  $("#frmCir").blur(function(){
    if($(this).val().length == 0)
  {
    $(this).addClass("is-invalid");
    $(".msgCir").removeClass("Off");
  }else{
    $(this).removeClass("is-invalid").addClass("is-valid");
    $(".msgCir").addClass("Off");
  }
  });

  $("#frmPostale").blur(function(){
    if($(this).val().length == 0)
  {
    $(this).addClass("is-invalid");
    $(".msgPo").removeClass("Off");
  }else{
    $(this).removeClass("is-invalid").addClass("is-valid"); 
    $(".msgPo").addClass("Off");
  }
  });
  $("#frmVille").blur(function(){
    if($(this).val().length == 0)
  {
    $(this).addClass("is-invalid");
    $(".msgV").removeClass("Off");
  }else{
    $(this).removeClass("is-invalid").addClass("is-valid");
    $(".msgV").addClass("Off");
  }
  });


  $("#frmTelephone").blur(function(){
    if($(this).val().length == 0)
  {
    $(this).addClass("is-invalid");
    $(".msgT").removeClass("Off");
  }else{
    $(this).removeClass("is-invalid").addClass("is-valid");
    $(".msgT").addClass("Off");
  }
  });
  $("#frmTelephonefixe").blur(function(){
    if($(this).val().length == 0)
  {
    $(this).addClass("is-invalid");
    $(".msgTfixe").removeClass("Off");
  }else{
    $(this).removeClass("is-invalid").addClass("is-valid");
    $(".msgTfixe").addClass("Off");
  }
  });

  $("#frmEmail").blur(function(){
    if($(this).val().length == 0)
  {
    $(this).addClass("is-invalid");
    $(".msgE").removeClass("Off");
  }else{
    $(this).removeClass("is-invalid").addClass("is-valid");
    $(".msgE").addClass("Off");
  }
  });

 $("#frmFormation").blur(function(){
if ($(this).val()== 0 ) {
  $(this).addClass("is-invalid");
}
 });









// test sur checkboxe
$( ".check" ).click(function() {
  if($(this).prop('checked'))
  {
    // decocher autre case
    $('.check1').prop('checked', false);
    

  }
});

$( ".check1" ).click(function() {
  if($(this).prop('checked'))
  {
    // decocher autre case
    $('.check').prop('checked', false);
    

  }
});

$( ".check2" ).click(function() {
  if($(this).prop('checked'))
  {
    // decocher autre case
    $('.check3').prop('checked', false);
    

  }
});

$( ".check3" ).click(function() {
  if($(this).prop('checked'))
  {
    // decocher autre case
    $('.check2').prop('checked', false);
    

  }
});

$( ".check4" ).click(function() {
  if($(this).prop('checked'))
  {
    // decocher autre case
    $('.check5').prop('checked', false);
    

  }
});

$( ".check5" ).click(function() {
  if($(this).prop('checked'))
  {
    // decocher autre case
    $('.check4').prop('checked', false);
    

  }
});

$( ".check6" ).click(function() {
  if($(this).prop('checked'))
  {
    // decocher autre case
    $('.check7').prop('checked', false);
    

  }
});

$( ".check7" ).click(function() {
  if($(this).prop('checked'))
  {
    // decocher autre case
    $('.check6').prop('checked', false);
    

  }
});

$( ".check8" ).click(function() {
  if($(this).prop('checked'))
  {
    // decocher autre case
    $('.check9').prop('checked', false);
    

  }
});

$( ".check9" ).click(function() {
  if($(this).prop('checked'))
  {
    // decocher autre case
    $('.check8').prop('checked', false);
    

  }
});

$( ".check10" ).click(function() {
  if($(this).prop('checked'))
  {
    // decocher autre case
    $('.check11').prop('checked', false);
    

  }
});

$( ".check11" ).click(function() {
  if($(this).prop('checked'))
  {
    // decocher autre case
    $('.check10').prop('checked', false);
    

  }
});

$( ".check12" ).click(function() {
  if($(this).prop('checked'))
  {
    // decocher autre case
    $('.check13').prop('checked', false);
    

  }
});

$( ".check13" ).click(function() {
  if($(this).prop('checked'))
  {
    // decocher autre case
    $('.check12').prop('checked', false);
    

  }
});

$( ".check14" ).click(function() {
  if($(this).prop('checked'))
  {
    // decocher autre case
    $('.check15').prop('checked', false);
    

  }
});

$( ".check15" ).click(function() {
  if($(this).prop('checked'))
  {
    // decocher autre case
    $('.check14').prop('checked', false);
    

  }
});

$( ".check16" ).click(function() {
  if($(this).prop('checked'))
  {
    // decocher autre case
    $('.check17').prop('checked', false);
    

  }
});

$( ".check17" ).click(function() {
  if($(this).prop('checked'))
  {
    // decocher autre case
    $('.check16').prop('checked', false);
    

  }
});










