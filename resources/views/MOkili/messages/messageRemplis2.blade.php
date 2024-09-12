<div id="voirEnvoyerMessageRemplis_main2" class="bodyAllMS transition">  
    <div id="voirEnvoyerMessageRemplis_main2_1" class="bodyMS">
     <?php for($i = 0 , $j = 0 ; $i < count($prenomNoms) ; $i++ , $j++ ) : ?>
        <div class="ligneMessage transition">
            <input type="text" hidden class="son_id" value="<?= $prenomNoms[$i]['id'] ; ?>" >
            <div class="ligneMessage_1">
                <div class="ligneMessage_1_date HoriVerCenter">
                    <span><svg xmlns="http://www.w3.org/2000/svg" width="1.3em" height="1.3em" viewBox="0 0 24 24"><path fill="#5D6D7E" d="M12 3.75a3.75 3.75 0 1 0 0 7.5a3.75 3.75 0 0 0 0-7.5m-4 9.5A3.75 3.75 0 0 0 4.25 17v1.188c0 .754.546 1.396 1.29 1.517c4.278.699 8.642.699 12.92 0a1.537 1.537 0 0 0 1.29-1.517V17A3.75 3.75 0 0 0 16 13.25h-.34c-.185 0-.369.03-.544.086l-.866.283a7.251 7.251 0 0 1-4.5 0l-.866-.283a1.752 1.752 0 0 0-.543-.086z"/></svg></span>
                </div>
                <div class="ligneMessage_1_enLigne HoriVerCenter">
                   <svg xmlns="http://www.w3.org/2000/svg" width="1.3em" height="1.3em" viewBox="0 0 32 32"><path fill="none" stroke="#5D6D7E" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 16a5 5 0 0 1-5 5m-5-5a5 5 0 0 1 5-5m-3 13.654A13.38 13.38 0 0 0 16 25c7.18 0 13-6 13-9c0-1.336-1.155-3.268-3.071-5M19.5 7.47A13.49 13.49 0 0 0 16 7C8.82 7 3 13 3 16c0 1.32 1.127 3.22 3 4.935M7 25L25 7"/></svg>
                </div>
            </div>
            <div class="ligneMessage_2" style="text-align: center;">
                <div class="ligneMessage_2_nomUser HoriVerCenter">
                   <?= Crypt::decrypt($prenomNoms[$i]["prenom"]) ?> <?= Crypt::decrypt($prenomNoms[$i]["nom"]) ?>
                </div>
                <div class="ligneMessage_2_messageUser">
                </div>
            </div>
            <div class="ligneMessage_3">
                <?php if( Crypt::decrypt($photos[$i]["urlPhoto"]) == "vide"): ?>
                  <div class="ligneMessage_3_photo HoriVerCenter" style="background-image:url('<?= Crypt::decrypt($photos[$i]["urlPhoto"])?>')">
                     <img class="transition image" style="border-radius: 200px" id="chargement" src={{ asset('gif/Users-Gif.gif') }} alt="" width="55px" height="55px"> 
                  </div>
                <?php else : ?>
                  <div class="ligneMessage_3_photo HoriVerCenter" style="background-image:url('<?= Crypt::decrypt($photos[$i]["urlPhoto"])?>')"> 
                  </div> 
                <?php endif ; ?>    
            </div>
        </div>
      <?php endfor ; ?>

    </div>
    <div id="voirEnvoyerMessageRemplis_main2_2" class="footerMS transition">
        <div id="bloc_recherche_saisie" class="HoriVerCenter">
            <input type="text" class="form-control input">
        </div>
        <div id="bloc_recherche" class="HoriVerCenter">
            <svg xmlns="http://www.w3.org/2000/svg" width="1.9em" height="1.9em" viewBox="0 0 1200 1200"><path fill="#5D6D7E" d="M600 0C268.629 0 0 268.629 0 600s268.629 600 600 600s600-268.629 600-600S931.371 0 600 0m41.162 260.01c160.533 0 290.625 130.166 290.625 290.698c0 160.533-130.092 290.625-290.625 290.625c-48.581 0-94.368-11.885-134.619-32.959c.041.186.106.401.146.586L375.586 939.99L268.213 832.544l126.416-126.489c.209-.094.45-.129.659-.22c-28.387-44.893-44.824-98.088-44.824-155.127c0-160.533 130.165-290.698 290.698-290.698m0 129.126c-89.213 0-161.572 72.359-161.572 161.572s72.359 161.499 161.572 161.499c89.214 0 161.499-72.286 161.499-161.499s-72.285-161.572-161.499-161.572"/></svg>
        </div>

    </div>
    
                         
</div>