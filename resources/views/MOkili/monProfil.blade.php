<div id="voirMonProfil" class="bloc_main_1 transition" style="width:0 ; height:0 ; opacity:0">
    <div id="voirMonProfil_1">
         <div id="header_photo_profil">
               <div id="header_photo_profil_1" class="titre">
                   <span>photo</span>
               </div>
               <div id="header_photo_profil_2" class="">
                  
                      <span id="file_name" hidden>voldi</span>
                      <div class="HoriVerCenter" id="bloc_modifier_photo">
                          <form action="/enregistrerImage" method="post" enctype="multipart/form-data" id="formulaire">
                             @csrf
                             <input type="text" id="monID" name="monID" hidden value="<?=$id?>">
                             <input type="file" id="maPhoto" name="image" accept="image/*" hidden>
                             <input type="submit" value="enregistrer" name="enregistrer" id="enregistrerPhoto" hidden>
                             <svg class="transition" id="btn_photo" xmlns="http://www.w3.org/2000/svg" width="1.3em" height="1.3em" viewBox="0 0 24 24"><path fill="white" d="m11.4 18.161l7.396-7.396a10.289 10.289 0 0 1-3.326-2.234a10.29 10.29 0 0 1-2.235-3.327L5.839 12.6c-.577.577-.866.866-1.114 1.184a6.556 6.556 0 0 0-.749 1.211c-.173.364-.302.752-.56 1.526l-1.362 4.083a1.06 1.06 0 0 0 1.342 1.342l4.083-1.362c.775-.258 1.162-.387 1.526-.56c.43-.205.836-.456 1.211-.749c.318-.248.607-.537 1.184-1.114m9.448-9.448a3.932 3.932 0 0 0-5.561-5.561l-.887.887l.038.111a8.754 8.754 0 0 0 2.092 3.32a8.754 8.754 0 0 0 3.431 2.13z"/></svg>
                             <img class="transition" id="chargement" style="display: none" src={{ asset('gif/chargement.gif') }} alt="" width="50px" height="50px">
                          </form> 
                      </div>
                    
               </div>
         </div>
         <div id="bloc_photo_profil" class="HoriVerCenter" >
              <?php if($maPhoto == "vide"): ?>
                  <div id="photo_profil" class="transition HoriVerCenter" style="width: 0 ; height:0">
                      <svg class="transition" id="photo_profil_logo" xmlns="http://www.w3.org/2000/svg" width="25vw" height="25vw" viewBox="0 0 256 256"><path fill="white" d="M227.46 214c-16.52-28.56-43-48.06-73.68-55.09a68 68 0 1 0-51.56 0c-30.64 7-57.16 26.53-73.68 55.09a4 4 0 0 0 6.92 4C55 184.19 89.62 164 128 164s73 20.19 92.54 54a4 4 0 0 0 3.46 2a3.93 3.93 0 0 0 2-.54a4 4 0 0 0 1.46-5.46M68 96a60 60 0 1 1 60 60a60.07 60.07 0 0 1-60-60"/></svg>
                  </div>
              <?php else: ?>
                  <div id="photo_profil_logo" hidden></div>
                  <div id="photo_profil" style="background-image: url('<?=$maPhoto ?>')">
                  </div>
              <?php endif; ?>    
             
         </div>
    </div>
    
    <div id="voirMonProfil_2" class="transition">
      <div class="mesInfo transition" style="height: 60px" >
            <div class="mesInfo_1">
               <div  class="mesInfo_1_1 titre_mesInfo mod HoriVerCenter"><?= Crypt::decrypt($nomComplet[0]['prenom'])." ".Crypt::decrypt($nomComplet[0]['nom']) ; ?></div>
               <div class="mesInfo_1_2">
                  <svg id="toucheModifNom"  xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em" viewBox="0 0 24 24"><path class="fermer transition" fill="#5D6D7E" d="m11.4 18.161l7.396-7.396a10.289 10.289 0 0 1-3.326-2.234a10.29 10.29 0 0 1-2.235-3.327L5.839 12.6c-.577.577-.866.866-1.114 1.184a6.556 6.556 0 0 0-.749 1.211c-.173.364-.302.752-.56 1.526l-1.362 4.083a1.06 1.06 0 0 0 1.342 1.342l4.083-1.362c.775-.258 1.162-.387 1.526-.56c.43-.205.836-.456 1.211-.749c.318-.248.607-.537 1.184-1.114m9.448-9.448a3.932 3.932 0 0 0-5.561-5.561l-.887.887l.038.111a8.754 8.754 0 0 0 2.092 3.32a8.754 8.754 0 0 0 3.431 2.13z"/></svg>
              </div>
            </div>
            
      </div>
      <div class="mesInfo transition">
            <div class="mesInfo_1">
               <div class="mesInfo_1_1 titre_mesInfo">@anniversaire</div>
               <div class="mesInfo_1_2">
                  <svg id="toucheModifAnniv"  xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em" viewBox="0 0 24 24"><path class="fermer transition" fill="#5D6D7E" d="m11.4 18.161l7.396-7.396a10.289 10.289 0 0 1-3.326-2.234a10.29 10.29 0 0 1-2.235-3.327L5.839 12.6c-.577.577-.866.866-1.114 1.184a6.556 6.556 0 0 0-.749 1.211c-.173.364-.302.752-.56 1.526l-1.362 4.083a1.06 1.06 0 0 0 1.342 1.342l4.083-1.362c.775-.258 1.162-.387 1.526-.56c.43-.205.836-.456 1.211-.749c.318-.248.607-.537 1.184-1.114m9.448-9.448a3.932 3.932 0 0 0-5.561-5.561l-.887.887l.038.111a8.754 8.754 0 0 0 2.092 3.32a8.754 8.754 0 0 0 3.431 2.13z"/></svg>
              </div>
            </div>
            <div class="mesInfo_2 HoriVerCenter">
              <div class="mesInfo_2_bloc">
                 <div class="mesInfo_2_bloc_1 HoriVerCenter" style="background-color: #2C6FFD">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1.7em" height="2em" viewBox="0 0 24 24"><g fill="none"><path d="M24 0v24H0V0zM12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035c-.01-.004-.019-.001-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427c-.002-.01-.009-.017-.017-.018m.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093c.012.004.023 0 .029-.008l.004-.014l-.034-.614c-.003-.012-.01-.02-.02-.022m-.715.002a.023.023 0 0 0-.027.006l-.006.014l-.034.614c0 .012.007.02.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01z"/><path fill="white" d="M17.707 15.707a.414.414 0 0 1 .586 0a2.415 2.415 0 0 0 2.707.491V20a1 1 0 1 1 0 2H3a1 1 0 1 1 0-2v-3.802c.89.405 1.975.241 2.707-.49a.414.414 0 0 1 .586 0a2.414 2.414 0 0 0 3.414 0a.414.414 0 0 1 .586 0a2.414 2.414 0 0 0 3.414 0a.414.414 0 0 1 .586 0a2.414 2.414 0 0 0 3.414 0ZM16 6a1 1 0 0 1 1 1v2h1a3 3 0 0 1 3 3v1.586l-.707.707a.414.414 0 0 1-.586 0a2.414 2.414 0 0 0-3.414 0a.414.414 0 0 1-.586 0a2.414 2.414 0 0 0-3.414 0a.414.414 0 0 1-.586 0a2.414 2.414 0 0 0-3.414 0a.414.414 0 0 1-.586 0a2.414 2.414 0 0 0-3.414 0a.414.414 0 0 1-.586 0L3 13.586V12a3 3 0 0 1 3-3h1V7a1 1 0 0 1 2 0v2h2V7a1 1 0 1 1 2 0v2h2V7a1 1 0 0 1 1-1m-3.5-4c-.319.638-.028 1.05.225 1.41c.144.203.275.39.275.59a1 1 0 1 1-2 0c0-.552.5-1.5 1.5-2m-4 0c-.319.638-.028 1.05.225 1.41c.144.203.275.39.275.59a1 1 0 0 1-2 0c0-.552.5-1.5 1.5-2m8 0c-.319.638-.028 1.05.225 1.41c.144.203.275.39.275.59a1 1 0 1 1-2 0c0-.552.5-1.5 1.5-2"/></g></svg>
                 </div>
                 <div class="mesInfo_2_bloc_2 HoriVerCenter">
                      <div class="mesInfo_2_bloc_2_bloc">

                      </div>
                 </div>
                 <div class="mesInfo_2_bloc_3">
                  <?php if($monAnniversaire == "legrand"): ?>
                      <div class="mesInfo_2_bloc_3_bloc transition HoriVerCenter affiche_anniv">  
                          vide                   
                      </div>
                  <?php else: ?>   
                      <div class="mesInfo_2_bloc_3_bloc transition HoriVerCenter affiche_anniv">  
                          <?= $monAnniversaire ?>                    
                      </div> 
                  <?php endif; ?>      
                 </div>
              </div>
            </div>
      </div>
      <div class="mesInfo transition">
          <div class="mesInfo_1">
              <div class="mesInfo_1_1 titre_mesInfo">@situation amoureux</div>
              <div class="mesInfo_1_2">
                 <svg id="toucheModifSA" class="fermer" xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em" viewBox="0 0 24 24"><path class="fermer transition" fill="#5D6D7E" d="m11.4 18.161l7.396-7.396a10.289 10.289 0 0 1-3.326-2.234a10.29 10.29 0 0 1-2.235-3.327L5.839 12.6c-.577.577-.866.866-1.114 1.184a6.556 6.556 0 0 0-.749 1.211c-.173.364-.302.752-.56 1.526l-1.362 4.083a1.06 1.06 0 0 0 1.342 1.342l4.083-1.362c.775-.258 1.162-.387 1.526-.56c.43-.205.836-.456 1.211-.749c.318-.248.607-.537 1.184-1.114m9.448-9.448a3.932 3.932 0 0 0-5.561-5.561l-.887.887l.038.111a8.754 8.754 0 0 0 2.092 3.32a8.754 8.754 0 0 0 3.431 2.13z"/></svg>
             </div>
           </div>
           <div class="mesInfo_2 HoriVerCenter">
             <div class="mesInfo_2_bloc">
                <div class="mesInfo_2_bloc_1 HoriVerCenter">
                   <svg xmlns="http://www.w3.org/2000/svg" width="1.7em" height="2em" viewBox="0 0 512 512"><path fill="white" d="M281.31 21.217L239.997 127.13l76.01 103.673l97.135-7.532l-3.1-79.284l-78.2-12.468l-1.61 41.535l29.11 7.568l-.766-14.1l18.662-1.012l2.15 39.635l-68.41-17.788l3.004-77.61l68.65 10.946l-2.456-86.044l-98.863-13.43zM243.63 66.39l-73.702 39.917L195.885 243.7l141.306 80.704l154.447-80.037l-11.252-142.205l-79.617-.988l.642 22.512l26.705 4.257l4.403 112.57l-125.436 9.727l-88.227-120.338l24.774-63.51zm-93.107 88.706q-4.488-.025-9.054.06c-9.456.174-19.425.853-29.44 1.594c9.427 13.32 18.694 26.165 30.157 35.938c7.894 6.73 16.835 12.308 28.075 16.056l-10.1-53.453q-4.775-.166-9.64-.194zm25.57 84.51c-14.278 5.27-27.16 13.25-39.437 23.55c-17.875 14.995-34.273 35.22-50.625 58.47c56.9 2.6 100.16-6.41 147.316-35.01l-54.223-30.966l-3.03-16.045zm270.854 48.968l-50.64 26.244c27.874 20.83 54.865 27.206 90.162 28.557c-8.76-21.213-22.617-39.484-39.523-54.8zm-189.853 4.895c-14.566 9.75-28.84 17.8-43.156 24.342c.37 10.843 2.813 19.703 6.968 26.47c-29.49 37.69-61.714 72.017-96.78 102.843c-17.584-1.215-24.577-19.137-17.845-37.344c-22.758 18.074-30.427 42.166-20 68.376a716 716 0 0 1-20.78 15.344h45.344c25.65-20.11 49.915-41.82 72.844-65.094c29.485 9.192 54.05-1.51 69.625-27.97c-14.975 8.052-31.217 5.627-37.438-6.686a803 803 0 0 0 28.156-34.125c7.25 1.21 15.586.57 24.72-2.03c-8.863-17.974-13.326-39.19-11.656-64.126zm18.133 17.065c1.205 25.213 10.463 44.01 24.648 60.12c17.914 20.346 44.73 35.942 73.625 50.814c7.79-33.575 9.555-62.664-2.05-93.77l-34.692 17.978z"/></svg>
                </div>
                <div class="mesInfo_2_bloc_2 HoriVerCenter">
                     <div class="mesInfo_2_bloc_2_bloc">

                     </div>
                </div>
                <div class="mesInfo_2_bloc_3">
                      <?php if($monEtat == "legrand"): ?>
                          <div class="mesInfo_2_bloc_3_bloc transition HoriVerCenter affiche_sa">  
                              vide                   
                          </div>
                      <?php else: ?>   
                          <div class="mesInfo_2_bloc_3_bloc transition HoriVerCenter affiche_sa">  
                              <?= $monEtat ?>                    
                          </div> 
                      <?php endif; ?> 
                </div>
             </div>
           </div>
      </div>
      <div class="mesInfo transition">
          <div class="mesInfo_1">
              <div class="mesInfo_1_1 titre_mesInfo">@genre</div>
              <div class="mesInfo_1_2">
                 <svg id="toucheModifGenre" class="fermer" xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em" viewBox="0 0 24 24"><path class="fermer transition" fill="#5D6D7E" d="m11.4 18.161l7.396-7.396a10.289 10.289 0 0 1-3.326-2.234a10.29 10.29 0 0 1-2.235-3.327L5.839 12.6c-.577.577-.866.866-1.114 1.184a6.556 6.556 0 0 0-.749 1.211c-.173.364-.302.752-.56 1.526l-1.362 4.083a1.06 1.06 0 0 0 1.342 1.342l4.083-1.362c.775-.258 1.162-.387 1.526-.56c.43-.205.836-.456 1.211-.749c.318-.248.607-.537 1.184-1.114m9.448-9.448a3.932 3.932 0 0 0-5.561-5.561l-.887.887l.038.111a8.754 8.754 0 0 0 2.092 3.32a8.754 8.754 0 0 0 3.431 2.13z"/></svg>
             </div>
           </div>
           <div class="mesInfo_2 HoriVerCenter">
             <div class="mesInfo_2_bloc">
                <div class="mesInfo_2_bloc_1 HoriVerCenter" style="background-color: #45FA29">
                   <svg xmlns="http://www.w3.org/2000/svg" width="1.6em" height="1.6em" viewBox="0 0 19 24"><path fill="white" d="M13.713.429V.413c0-.228.185-.413.413-.413h.016h-.001h3.864c.234 0 .445.098.595.254a.82.82 0 0 1 .254.595V4.73a.413.413 0 0 1-.413.413h-.017h.001h-.873a.413.413 0 0 1-.413-.413v-.017v.001V2.92l-3.404 3.415a7.459 7.459 0 0 1 1.688 4.741v.07v-.004l.001.1a7.414 7.414 0 0 1-1.98 5.054l.004-.005A7.476 7.476 0 0 1 8.6 18.8l-.032.003v1.768H9.87c.228 0 .413.185.413.413v.017V21v.873a.413.413 0 0 1-.413.413h-.017h.001h-1.286v1.302a.413.413 0 0 1-.413.413h-.017h.001h-.873a.413.413 0 0 1-.413-.413v-.017v.001v-1.286H5.551a.413.413 0 0 1-.413-.413v-.017v.001v-.873c0-.228.185-.413.413-.413h.017h-.001h1.288V18.8a7.481 7.481 0 0 1-3.644-1.394l.021.015a7.74 7.74 0 0 1-2.478-2.947l-.02-.046a7.461 7.461 0 0 1-.737-3.258c0-.227.01-.453.03-.675l-.002.029a7.474 7.474 0 0 1 2.144-4.735l-.001.001a7.671 7.671 0 0 1 5.548-2.363c.767 0 1.508.112 2.207.321l-.054-.014a7.856 7.856 0 0 1 2.666 1.399l-.015-.012l3.415-3.402h-1.81a.413.413 0 0 1-.413-.413v-.017v.001zm-6 16.714l.087.001a5.763 5.763 0 0 0 4.152-1.759l.001-.002a5.765 5.765 0 0 0 1.761-4.153l-.001-.092v.005l.001-.087a5.763 5.763 0 0 0-1.759-4.152l-.002-.001C10.87 5.814 9.37 5.141 7.713 5.141s-3.157.674-4.24 1.762a5.765 5.765 0 0 0-1.76 4.245v-.005l-.001.087c0 1.629.674 3.101 1.759 4.152l.002.001a5.765 5.765 0 0 0 4.153 1.761l.092-.001z"/></svg>
                </div>
                <div class="mesInfo_2_bloc_2 HoriVerCenter">
                     <div class="mesInfo_2_bloc_2_bloc">

                     </div>
                </div>
                <div class="mesInfo_2_bloc_3 transition">
                      <?php if($monGenre == "legrand"): ?>
                          <div class="mesInfo_2_bloc_3_bloc transition HoriVerCenter affiche_genre">  
                              vide                   
                          </div>
                      <?php else: ?>   
                          <div class="mesInfo_2_bloc_3_bloc transition HoriVerCenter affiche_genre">  
                              <?= $monGenre ?>                    
                          </div> 
                      <?php endif; ?> 
                </div>
             </div>
           </div>

      </div>
   
    </div>
</div>