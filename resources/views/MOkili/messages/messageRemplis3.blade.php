<div id="voirEnvoyerMessageRemplis_main3" class="bodyMS">
    <div id="voirEnvoyerMessageRemplis_main3_1" >
    <?php for($i = 0 , $j = 0 ; $i < count($prenomNoms) ; $i++ , $j++ ) : ?>
          <div class="lignesMessages_ footerMS">
            <div class="lignesMessages_1">
                <div class="lignesMessages_1_1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1.3em" height="1.3em" viewBox="0 0 24 24"><path fill="#5D6D7E" d="M12 3.75a3.75 3.75 0 1 0 0 7.5a3.75 3.75 0 0 0 0-7.5m-4 9.5A3.75 3.75 0 0 0 4.25 17v1.188c0 .754.546 1.396 1.29 1.517c4.278.699 8.642.699 12.92 0a1.537 1.537 0 0 0 1.29-1.517V17A3.75 3.75 0 0 0 16 13.25h-.34c-.185 0-.369.03-.544.086l-.866.283a7.251 7.251 0 0 1-4.5 0l-.866-.283a1.752 1.752 0 0 0-.543-.086z"/></svg>
                </div>
                <div class="lignesMessages_1_2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1.3em" height="1.3em" viewBox="0 0 32 32"><path fill="none" stroke="#5D6D7E" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 16a5 5 0 0 1-5 5m-5-5a5 5 0 0 1 5-5m-3 13.654A13.38 13.38 0 0 0 16 25c7.18 0 13-6 13-9c0-1.336-1.155-3.268-3.071-5M19.5 7.47A13.49 13.49 0 0 0 16 7C8.82 7 3 13 3 16c0 1.32 1.127 3.22 3 4.935M7 25L25 7"/></svg>
                </div>
              
                </div>
                <div class="lignesMessages_2 HoriVerCenter">
                    <?php if( Crypt::decrypt($photos[$i]["urlPhoto"]) == "vide"): ?>
                    <div class="ligneProfil HoriVerCenter" style="background-image:url('<?= Crypt::decrypt($photos[$i]["urlPhoto"])?>')">
                        <img class="transition image" style="border-radius: 200px" id="chargement" src={{ asset('gif/Users-Gif.gif') }} alt="" width="55px" height="55px"> 
                    </div>
                    <?php else : ?>
                    <div class="ligneProfil HoriVerCenter" style="background-image:url('<?= Crypt::decrypt($photos[$i]["urlPhoto"])?>')"> 
                    </div> 
                    <?php endif ; ?>
                </div>
                <div class="lignesMessages_3 ">
                   <?= Crypt::decrypt($prenomNoms[$i]["prenom"]) ?> <?= Crypt::decrypt($prenomNoms[$i]["nom"]) ?>
                </div>
            </div>
            <?php endfor ; ?>       
          
          
    </div>
    <div id="voirEnvoyerMessageRemplis_main3_2" class="footerMS"></div>
</div>