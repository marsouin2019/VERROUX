<?php
include("includes/header.php");
?>

<?php
include("includes/navigation.php");



$typeInscription = ($_GET["insc"] == "inscriptionT") ? "test" : "formation";

?>

  
        <main>          
                <div class="container-fluid">
                        <div class="row">
                          <div class="col-sm">
                            
                          </div>
                          <div class="col-sm" id="formulaire">
                            <div class="container bordF">
                                <h4 class="title">Pré-inscription formation</h4>
                                <form action="traitement.php" method="POST" name="frmIns" id="frmIns">
                                       <h4><?php echo $typeInscription; ?></h4>
                                        
                                        <div class="form-group">
                                            <label for="">Civilite</label>
                                            <select class="custom-select mr-sm-2" id="frmCivilite" name="frmCivilite">
                                                <!-- <option selected> Civilité </  option> -->
                                                <option value="M">Monsieur</option>
                                                <option value="Mme">Madame</option>
                                            </select>
                                            
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-7">
                                                <label for="">Prenom</label>
                                                <input id="frmPrenom" class="form-control" type="text" aria-describedby="" placeholder="Indiquer prenom (*)" name="frmPrenom" >
                                                <small id="prenomHelp" class="form-text text-muted"></small>
                                              </div>
                                            
                                            <div class="msgP Off col-sm-5">
                                              <p id="msgError" class="alert alert-error">Vous avez oublier de remplir ce champ !</p>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                          <div class="col-sm-7">
                                              <label for="">Nom</label>
                                              <input type="text"  id="frmNom" class="form-control" aria-describedby="" placeholder="Indiquer nom (*)" name="frmNom" >
                                              <small id="nomHelp" class="form-text text-muted"></small>
                                            </div>
                                            <div class="msgN Off col-sm-5">
                                            <p id="msgError" class="alert alert-error">Vous avez oublier de remplir ce champ !</p>
                                            </div>
                                        </div> 
                                                                                 
                                        <div class="form-group">
                                          <label for="">Veuillez saisir votre date de naissance</label>
                                        <input type="date" id="frmBday" name="frmBday" required pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}">
                                        </div>
                                        
                                        <div class="form-group row">
                                         <div class="col-sm-7">
                                                <label for="">Pays</label>
                                                <input id="frmPays"  class="form-control"  type="text" placeholder="Indiquer le Pays(*)" name="frmPays">
                                            </div>
                                            <div class="msgPays Off col-sm-5">
                                                <p class="alert alert-error">Vous avez oublier de remplir ce champ !</p>
                                            </div>
                                         </div> 

                                        <div class="form-group row">
                                         <div class="col-sm-7">
                                                <label for="">Pays de naissance</label>
                                                <input id="frmPaysnaissanceT"  class="form-control"  type="text" placeholder="Indiquer le Pays de naissance (*)" name="frmPaysnaissanceT">
                                            </div>
                                            <div class="msgLs Off col-sm-5">
                                                <p class="alert alert-error">Vous avez oublier de remplir ce champ !</p>
                                            </div>
                                         </div>
                                           
                                        <div class="form-group row">
                                                <div class="col-sm-7">
                                                   <label for="">Ville de naissance</label>
                                                    <input id="frmVilledenaissance"  class="form-control"  type="text" placeholder="Indiquer la Ville de naissance (*)" name="frmVilledenaissance">
                                                </div>
                                                  <div class="msgVdn Off col-sm-5">
                                                    <p class="alert alert-error">Vous avez oublier de remplir ce champ !</p>
                                                  </div>
                                             
                                        </div>
                                        <div class="testI">
                                        <div class="form-group row">
                                            <div class="col-sm-7">
                                              <label for="">Nationalité</label>
                                              <input id="frmNationalite" class="form-control" type="text" placeholder="Indiquer votre Nationalité(*)" name="frmNationalite" >
                                            </div>
                                            <div class="msgNa Off col-sm-5">
                                              <p class="alert alert-error">Vous avez oublier de remplir ce champ !</p>
                                            </div>
                                          
                                        </div>
                                        </div>
                                        <?php
                                            if($typeInscription != "test")
                                            {
                                        ?>
                                        <div class="formI">

                                        <div class="form-group">
                                            <select class="custom-select mr-sm-2" name="frmSituation" id="frmSituation">
                                                <!-- <option selected> Civilité </  option> -->
                                                <option value="">Situation familiale</option>
                                                <option value="Celibataire">Célibataire</option>
                                                <option value="Divorce">Divorcé(e)</option>
                                                <option value="Marie">Marié(e) ou vivant maritalement</option>
                                                <option value="Veuf">Veuf(veuve)</option>
                                                
                                            </select>
                                        </div>
                                        </div>
                                        <?php    
                                        
                                      }
                                        ?>
                                           <?php
                                            if($typeInscription != "formation")
                                            {
                                        ?>
                                        <div class="testI">
                                        <div class="form-group row">
                                            <div class="col-sm-7">
                                                <label for="">Langue première</label>
                                                <input id="frmLanguepremièreT" class="form-control" type="text" placeholder="Indiquer votre Langue première(*)" name="frmLpremiereT" >
                                            </div>
                                            <div class="msgLpt Off col-sm-5">
                                                <p class="alert alert-error">Vous avez oublier de remplir ce champ !</p>
                                            </div>
                                          
                                        </div>
                                        </div>
                                        <?php    
                                        
                                      }
                                        ?>       

                                        <div class="form-group row">
                                          <div class="col-sm-7">
                                            <label for="">Adresse</label>
                                            <input id="frmAdresse" class="form-control " type="text" placeholder="Indiquer votre Adresse(*)" name="frmAdresse" >
                                          </div>
                                            <div class="msgA Off col-sm-5">
                                              <p class="alert alert-error">Vous avez oublier de remplir ce champ !</p>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <div class="col-sm-7">
                                              <label for="">Code postale</label>
                                              <input id="frmPostale" class="form-control " type="text" placeholder="Indiquer votre code postale(*)" name="frmPostale" >
                                            </div>
                                              <div class="msgPo Off col-sm-5">
                                                <p class="alert alert-error">Vous avez oublier de remplir ce champ !</p>
                                              </div>               
                                          </div>
                                        
                                       
                                        <div class="form-group row">
                                          <div class="col-sm-7">
                                            <label for="">Ville</label>
                                            <input id="frmVille" class="form-control " type="text" placeholder="Indiquer votre ville(*)" name="frmVille" >
                                          </div>
                                            <div class="msgV Off col-sm-5">
                                              <p class="alert alert-error">Vous avez oublier de remplir ce champ !</p>
                                            </div>                                         
                                        </div>
                                        <?php
                                            if($typeInscription != "test")
                                            {
 
                                        ?>
                                        <div class="formI">
                                        <div class="form-group row">
                                          <div class="col-sm-7">
                                            <label for="">N°C.I.R</label>
                                            <input id="frmCir" class="form-control " type="text"  placeholder="Indiquer votre numéro N°C.I.R(*)" name="frmCir" >
                                          </div>
                                             <div class="msgCir Off col-sm-5">
                                              <p class="alert alert-error">Vous avez oublier de remplir ce champ !</p>
                                            </div>     
                                            
                                        </div>
                                        </div>
                                        <?php
                                            }
                                        ?>

                                          <div class="form-group row">
                                            <div class="col-sm-7">
                                              <label for="">Télephone</label>
                                              <input type="text" class="form-control " id="frmTelephone" aria-describedby="" placeholder="Indiquer telephone (*)" name="frmTelephone" >
                                            </div>
                                              <div class="msgT Off col-sm-5">
                                                <p class="alert alert-error">Vous avez oublier de remplir ce champ !</p>
                                              </div>                  
                                          </div>
                                          <div class="form-group row">
                                            <div class="col-sm-7">
                                              <label for="">Télephone fixe</label>
                                              <input type="text" class="form-control " id="frmTelephonefixe" aria-describedby="" placeholder="Indiquer telephone fixe (*)" name="frmTelephonefixe" >
                                            </div>
                                              <div class="msgTfixe Off col-sm-5">
                                                <p class="alert alert-error">Vous avez oublier de remplir ce champ !</p>
                                              </div>                  
                                          </div>
                                            <div class="form-group row">
                                                <div class="col-sm-7">
                                                    <label for="">Email</label>
                                                    <input type="email" class="form-control " id="frmEmail" aria-describedby="" placeholder="Indiquer email(*)" name="frmEmail" >
                                                    <small id="emailHelp" class="form-text text-muted"></small>
                                                </div>
                                                <div class="msgE Off col-sm-5">
                                                 <p class="alert alert-error">Vous avez oublier de remplir ce champ !</p>
                                                </div>      
                                              
                                            </div>

                                            <!--Questionnaire-->
                                            <?php
                                            if($typeInscription != "test")
                                            {
                                            ?>
                                            <div class="formI" >      
                                              <h5>Votre situation vis-à-vis de l'emploi (cochez la bonne réponse):</h5>
                                              <p>Avez-vous déjà travailleé en France? </p>

                                              <div class="form-check form-check-inline">
                                              <input class="form-check-input check" type="checkbox" id="" value="1" name="travailler">
                                                   <label class="form-check-label" for="inlineCheckbox1">Oui</label>
                                              </div>

                                              <div class="form-check form-check-inline">
                                              <input class="form-check-input check1" type="checkbox" id="" value="0" name="travailler">
                                                   <label class="form-check-label" for="inlineCheckbox2">Non</label>
                                                  
                                              </div>

                                            

                                            <div  >      
                                              
                                              <p>Vous travaillé actuellement? </p>

                                              <div class="form-check form-check-inline">
                                                   <input class="form-check-input check2" type="checkbox" id="" value="1" name="travActu">
                                                   <label class="form-check-label" for="inlineCheckbox1">Oui</label>
                                              </div>

                                              <div class="form-check form-check-inline">
                                                   <input class="form-check-input check3" type="checkbox" id="" value="0" name="travActu">
                                                   <label class="form-check-label" for="inlineCheckbox2">Non</label>
                                                  
                                              </div>
                                              <p>Si oui, quel métier exercez-vous?</p>
                                              <textarea rows="1" cols="30" name="metieractu">

                                              </textarea>

                                            </div>
                                            <div  >      
                                              
                                              <p>Êtes-vous inscrit au Pôle Emploi? </p>

                                              <div class="form-check form-check-inline">
                                              <input class="form-check-input check4" type="checkbox" id="" value="1" name="poleEmploi">
                                                   <label class="form-check-label" for="inlineCheckbox1">Oui</label>
                                              </div>

                                              <div class="form-check form-check-inline">
                                              <input class="form-check-input check5" type="checkbox" id="" value="0" name="poleEmploi">
                                                   <label class="form-check-label" for="inlineCheckbox2">Non</label>
                                                  
                                              </div>
                                              <p>Si oui, depuis quand?</p>
                                              <textarea rows="1" cols="30" name="poleEmploiO">

                                              </textarea>

                                              <p>Percevez-vous des allocations chômages? </p>

                                              <div class="form-check form-check-inline">
                                              <input class="form-check-input check6" type="checkbox" id="" value="1" name="chomage">
                                                   <label class="form-check-label" for="inlineCheckbox1">Oui</label>
                                              </div>
                                              <div class="form-check form-check-inline">
                                              <input class="form-check-input check7" type="checkbox" id="" value="0" name="chomage">
                                                   <label class="form-check-label" for="inlineCheckbox2">Non</label>
                                                  
                                              </div>

                                            </div>

                                            <div  >      
                                              <h5>Vos formation linguistiques</h5>
                                              <p>Avez-vous déjà fait la formation A1 OFII/ANAEM? </p>

                                              <div class="form-check form-check-inline">
                                              <input class="form-check-input check8" type="checkbox" id="" value="1" name="formA1">
                                                   <label class="form-check-label" for="inlineCheckbox1">Oui</label>
                                              </div>

                                              <div class="form-check form-check-inline">
                                              <input class="form-check-input check9" type="checkbox" id="" value="0" name="formA1">
                                                   <label class="form-check-label" for="inlineCheckbox2">Non</label>
                                                  
                                              </div>
                                              <p>Si oui, en quel année?</p>
                                              <textarea rows="1" cols="30" name="formA1Oui">

                                              </textarea>

                                            </div>

                                            <div  >      
                                              
                                              <p>Avez-vous déjà fait la formation A2 OFII? </p>

                                              <div class="form-check form-check-inline">
                                              <input class="form-check-input check10" type="checkbox" id="" value="1" name="formA2">
                                                   <label class="form-check-label" for="inlineCheckbox1">Oui</label>
                                              </div>

                                              <div class="form-check form-check-inline">
                                              <input class="form-check-input check11" type="checkbox" id="" value="0" name="formA2">
                                                   <label class="form-check-label" for="inlineCheckbox2">Non</label>
                                                  
                                              </div>
                                              <p>Si oui, en quel année?</p>
                                              <textarea rows="1" cols="30" name="formA2Oui">

                                              </textarea>
                                              <p>Ou autres formations linguistiques?</p>
                                              <textarea rows="1" cols="30" name="formAutre">

                                              </textarea>

                                            </div>

                                            <div  >      
                                              <h5>Votre scolarité</h5>
                                              <p>Avez-vous été scolarisé dans votre pays? </p>

                                              <div class="form-check form-check-inline">
                                              <input class="form-check-input check12" type="checkbox" id="" value="1" name="scolarisation">
                                                   <label class="form-check-label" for="inlineCheckbox1">Oui</label>
                                              </div>

                                              <div class="form-check form-check-inline">
                                              <input class="form-check-input check13" type="checkbox" id="" value="0" name="scolarisation">
                                                   <label class="form-check-label" for="inlineCheckbox2">Non</label>
                                                  
                                              </div>
                                              <p>Jusqu'en quel classe?</p>
                                              <textarea rows="1" cols="30" name="scoClasse">

                                              </textarea>
                                              <p>Jusqu'à quel âge?</p>
                                              <textarea rows="1" cols="30" name="scoAge">

                                              </textarea>
                                             </div>

                                             <div  >      
                                              
                                              <p>Avez-vous des diplôme? </p>

                                              <div class="form-check form-check-inline">
                                              <input class="form-check-input check14" type="checkbox" id="" value="1" name="diplome">
                                                   <label class="form-check-label" for="inlineCheckbox1">Oui</label>
                                              </div>

                                              <div class="form-check form-check-inline">
                                              <input class="form-check-input check15" type="checkbox" id="" value="0" name="diplome">
                                                   <label class="form-check-label" for="inlineCheckbox2">Non</label>
                                                  
                                              </div>
                                              <p>Si oui, lesquelles?</p>
                                              <textarea rows="1" cols="30" name="diploName">

                                              </textarea>
                                              

                                            </div>

                                            <div  >      
                                              
                                              <p>Savez-vous utiliser un ordinateur? </p>

                                              <div class="form-check form-check-inline">
                                              <input class="form-check-input check16" type="checkbox" id="" value="1" name="ordinateur">
                                                   <label class="form-check-label" for="inlineCheckbox1">Oui</label>
                                              </div>

                                              <div class="form-check form-check-inline">
                                              <input class="form-check-input check17" type="checkbox" id="" value="0" name="ordinateur">
                                                   <label class="form-check-label" for="inlineCheckbox2">Non</label>
                                                  
                                              </div>
                                              <p>Pourquoi voulez-vous faire la formation B1 OFII?(40 mots maxi)</p>
                                              <textarea rows="1" cols="30" name="objetForm">

                                              </textarea>
                                              <p>Ou autres formations linguistiques?</p>
                                              <textarea id="frmling" name="frmling" rows="1" cols="30">

                                              </textarea>

                                            </div>

                                             
                                            </div>
                                            
                                            <?php
                                            }
                                            ?>


                                          <div class="form-group">
                                            <button id="frmRegister" type="submit" class="btn btn-primary" name="frmForm" value="frmRegister">Valider</button>
                                            </div>
                                                 
                                </form>

                            </div>
                          </div>
                            <div class="col-sm">
                                
                            </div>
                        </div>
                      </div>
        </main>

        <?php
include("includes/footer.php");
?>