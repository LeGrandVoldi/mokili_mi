<div id="voirMesEtoiles" class="transition bloc_main_1" style="width:0 ; height:0 ; opacity:0">
    <div class="bloc_main_1_header HoriVerCenter">
       <input type="text" id="rechercheEtoile" class="transition" placeholder="recherche" autocomplete="off" onkeyup="rechercheEtoile1()">
    </div>
    <div class="bloc_main_1_main scroll-etoile">
      <?php for($i = 0 ; $i < count($utilisateurs) ; $i++ ) : ?>
         
         <?php if( Crypt::decrypt($utilisateurs[$i]['photo']) == "vide" ) : ?>
              <?php 
                 $sonID = $utilisateurs[$i]['id'] ;
                 $selectAnniv = json_decode(json_encode(DB::select("SELECT * FROM anniversaires WHERE id = $sonID ; ")),true);
                 $son_anniv = Crypt::decrypt($selectAnniv[0]['jour'])." ".Crypt::decrypt($selectAnniv[0]['mois'])." ".Crypt::decrypt($selectAnniv[0]['annee']) ;

                 $selectGenre = json_decode(json_encode(DB::select("SELECT * FROM genres WHERE id = $sonID ; ")),true);
                 $son_genre = Crypt::decrypt($selectGenre[0]['monGenre']);

                 $selectEtat = json_decode(json_encode(DB::select("SELECT * FROM etats WHERE id = $sonID ; ")),true);
                 $son_etat = Crypt::decrypt($selectEtat[0]['monEtat']);

                 $selectPhoto = json_decode(json_encode(DB::select("SELECT * FROM photos WHERE id = $sonID ; ")),true);
                 $sa_photo = Crypt::decrypt($selectPhoto[0]['urlPhoto']);
                 if($sa_photo == "vide"){
                    $sa_photo = "gif/Users-Gif.gif";
                 }
              ?>
              <div class="ligne_etoile transition">
                      <input type="text" hidden class="sa_photo" value="<?= $sa_photo ; ?>">
                      <input type="text" hidden class="sa_situation" value="<?= $son_etat ; ?>">
                      <input type="text" hidden class="son_genre" value="<?= $son_genre ; ?>">
                      <input type="text" hidden class="son_anniv" value="<?= $son_anniv ; ?>">
                      <input type="text" hidden class="sonID" value="<?= $sonID ; ?>">

                      <input type="text" hidden class="son_prenom" value="<?= Crypt::decrypt($utilisateurs[$i]['prenom']) ; ?>">
                      <input type="text" hidden class="son_nom" value="<?= Crypt::decrypt($utilisateurs[$i]['nom']) ; ?>">


                      <input type="text" hidden class="son_nom_complet" value="<?= Crypt::decrypt($utilisateurs[$i]['prenom'])." ".Crypt::decrypt($utilisateurs[$i]['nom']) ; ?>">
                      <div class="le_1">
                          <div class="leur_photo HoriVerCenter">
                              <img class="transition image" style="border-radius: 200px" id="chargement" src={{ asset('gif/Users-Gif.gif') }} alt="" width="65px" height="65px">   
                          </div>
                      </div>
                      <div class="le_2 HoriVerCenter">
                              <span class="etoile_profil transition"><?= Crypt::decrypt($utilisateurs[$i]['prenom'])." ".Crypt::decrypt($utilisateurs[$i]['nom']) ; ?></span>
                      </div>
                      <div class="le_3">
                              <span class="etoile_ajouter transition">ajouter <img style="position: relative;right:-20px;bottom:2px;visibility:hidden;width:0;height:0" src="{{ asset('gif/chargeEtoile.gif') }}" alt="" width="20px" height="20px" class="chargeEtoile transition"></span>
                      </div>
              </div>
         <?php else : ?> 
              <?php 
                  $sonID = $utilisateurs[$i]['id'] ;
                  $selectAnniv = json_decode(json_encode(DB::select("SELECT * FROM anniversaires WHERE id = $sonID ; ")),true);
                  $son_anniv = Crypt::decrypt($selectAnniv[0]['jour'])." ".Crypt::decrypt($selectAnniv[0]['mois'])." ".Crypt::decrypt($selectAnniv[0]['annee']) ;

                  $selectGenre = json_decode(json_encode(DB::select("SELECT * FROM genres WHERE id = $sonID ; ")),true);
                  $son_genre = Crypt::decrypt($selectGenre[0]['monGenre']);

                  $selectEtat = json_decode(json_encode(DB::select("SELECT * FROM etats WHERE id = $sonID ; ")),true);
                  $son_etat = Crypt::decrypt($selectEtat[0]['monEtat']);

                  $selectPhoto = json_decode(json_encode(DB::select("SELECT * FROM photos WHERE id = $sonID ; ")),true);
                  $sa_photo = Crypt::decrypt($selectPhoto[0]['urlPhoto']);
                  if($sa_photo == "vide"){
                     $sa_photo = "gif/Users-Gif.gif";
                  }
              ?> 
              <div class="ligne_etoile transition">
                  <input type="text" hidden class="sa_photo" value="<?= $sa_photo ; ?>">
                  <input type="text" hidden class="sa_situation" value="<?= $son_etat ; ?>">
                  <input type="text" hidden class="son_genre" value="<?= $son_genre ; ?>">
                  <input type="text" hidden class="son_anniv" value="<?= $son_anniv ; ?>">
                  <input type="text" hidden class="sonID" value="<?= $sonID ; ?>">

                  <input type="text" hidden class="son_prenom" value="<?= Crypt::decrypt($utilisateurs[$i]['prenom']) ; ?>">
                  <input type="text" hidden class="son_nom" value="<?= Crypt::decrypt($utilisateurs[$i]['nom']) ; ?>">

                  <input type="text" hidden class="son_nom_complet" value="<?= Crypt::decrypt($utilisateurs[$i]['prenom'])." ".Crypt::decrypt($utilisateurs[$i]['nom']) ; ?>">
                  <div class="le_1">
                      <div class="leur_photo image transition" style="background-image: url('<?=Crypt::decrypt($utilisateurs[$i]['photo'])?>')">

                      </div>
                  </div>
                  <div class="le_2 HoriVerCenter">
                          <span class="etoile_profil"><?= Crypt::decrypt($utilisateurs[$i]['prenom'])." ".Crypt::decrypt($utilisateurs[$i]['nom']) ; ?></span>
                  </div>
                  <div class="le_3">
                          <span class="etoile_ajouter transition">ajouter <img style="position: relative;right:-20px;bottom:2px;visibility:hidden;width:0;height:0" src="{{ asset('gif/chargeEtoile.gif') }}" alt="" width="20px" height="20px" class="chargeEtoile transition"></span>
                  </div>
             </div> 
         <?php endif ; ?>    
      <?php endfor ; ?>  
    </div>
</div>