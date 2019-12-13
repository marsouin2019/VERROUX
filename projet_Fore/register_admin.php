<?php
  include("includes/header.php");
?>
<?php
include("includes/navigation.php");
?>

<div class="container" >
<h1>Register</h1>

<form  method ="POST" name="" id="" action="traitement.php">
   
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" id="frmEmailAdmin" name="frmEmailAdmin" class="form-control" placeholder="Email address" required>
    <small id="emailHelp" class="form-text text-muted">Ne partagez jamais vos identifiants avec quelqu'un d'autre.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Mot de passe</label>
    <input type="password" class="form-control"  id="frmPassAdmin" name="frmPassAdmin" placeholder="Password" required="required">
  </div>
  <div class="form-group form-check">
   
  <button id="frmRegisterAdmin" type="submit"  name="frmForm" value="frmRegisterAdmin" class="btn btn-primary">Register</button>
  </div>
  
</form>

    </div>

  <?php
include("includes/footer.php");
?>
