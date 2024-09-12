let bloc_profil_etoile = document.getElementById('bloc_profil_etoile');
let ligne_etoiles = document.querySelectorAll(".ligne_etoile");
ligne_etoiles.forEach(element => {
    element.addEventListener('click',function(){
        let son_nom_complet = element.querySelector('.son_nom_complet').value ;
        let sa_situation = element.querySelector('.sa_situation').value ;
        let son_genre = element.querySelector('.son_genre').value ;
        let son_anniv = element.querySelector('.son_anniv').value ;
        let sa_photo = element.querySelector('.sa_photo').value ;

        document.getElementById('pe2').textContent = son_nom_complet ;
        document.getElementById('ppp_2').textContent = sa_situation ;
        document.getElementById('ppp_6').textContent = son_genre ;
        document.getElementById('ppp_4').textContent = son_anniv ;
        document.getElementById('leurPhoto').style.backgroundImage = "url('"+sa_photo+"')" ;

        bloc_profil_etoile.style.visibility = "visible";
        bloc_profil_etoile.style.opacity = "1";

        // element.querySelector('.image').style.height = "0";
        // element.querySelector('.leur_photo').style.height = "0";
        // element.querySelector('.etoile_ajouter').style.height = "0";
        // element.querySelector('.etoile_ajouter').style.fontSize = "0";
        // element.querySelector('.etoile_profil').style.fontSize = "0";

        // element.style.opacity = "0";
        // element.style.paddingBottom = "0";
        // element.style.paddingTop = "0";
        // element.querySelector('.ligne_etoile').style.height = "0";
        
    })
       
});
let image1 = document.querySelectorAll(".image");
let leur_photo1 = document.querySelectorAll(".leur_photo");
let etoile_profil1 = document.querySelectorAll(".etoile_profil");
let etoile_ajouter1 = document.querySelectorAll(".etoile_ajouter");
let sonID = document.querySelectorAll(".sonID");
let chargeEtoile = document.querySelectorAll(".chargeEtoile");
let main_1T = document.getElementById('main_1');
let etoile_ajouters = document.querySelectorAll(".etoile_ajouter");


let son_prenom = document.querySelectorAll(".son_prenom");
let son_nom = document.querySelectorAll(".son_nom");
let son_id = document.querySelectorAll(".son_id");
let sa_photo = document.querySelectorAll(".sa_photo");

    etoile_ajouters.forEach((element,index) => {
        element.addEventListener('click',function(e){
            e.stopImmediatePropagation()

            let monID = document.getElementById('monID').value ;
            let SonID = sonID[index].value ;

            // voirEnvoyerMessageRemplis_main2_1

            let ajoues = document.getElementById('voirEnvoyerMessageRemplis_main2_1').innerHTML;
            ajoues += `<div class="ligneMessage transition">
                            <input type="text" hidden class="son_id" value="${SonID}">
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
                                  ${son_prenom[index].value} ${son_nom[index].value}
                                </div>
                                <div class="ligneMessage_2_messageUser">
                                </div>
                            </div>
                            <div class="ligneMessage_3">  
                                <div class="ligneMessage_3_photo HoriVerCenter" style="background-image:url('${sa_photo[index].value }')"> 
                                </div>    
                            </div>
                        </div>`;

            

            chargeEtoile[index].style.visibility = "visible"; 
            chargeEtoile[index].style.width = "20px";
            chargeEtoile[index].style.height = "20px";
            let confirm = -1 ;

            $.ajax({
                type: "GET",
                url: "ajouterMesEtoiles",
                data: {monID:monID,sonID:SonID},
                dataType: "json",
                success: function (datas) {
                    $.each(datas, function (index, value) {
                         confirm = value.valeur ;
                    });
                    if(confirm == 1){
                        chargeEtoile[index].style.visibility = "visible"; 
                        chargeEtoile[index].style.width = "0px";
                        chargeEtoile[index].style.height = "0px";
                        image1[index].style.height = "0";
                        leur_photo1[index].style.height = "0";
                        etoile_ajouter1[index].style.height = "0";
                        etoile_ajouter1[index].style.fontSize = "0";
                        etoile_profil1[index].style.fontSize = "0";
                        ligne_etoiles[index].style.height = "0";
                        ligne_etoiles[index].style.opacity = "0";
                        ligne_etoiles[index].style.paddingBottom = "0";
                        ligne_etoiles[index].style.paddingTop = "0";
                        document.getElementById('voirEnvoyerMessageRemplis_main2_1').innerHTML = ajoues ;



                    }
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    console.table(jqXHR)
                }
            });
   
            
    })
       
});

function rechercheEtoile1(){
    let phrase = document.getElementById('rechercheEtoile').value ;
    $.ajax({
        type: "GET",
        url: "rechercheEtoile",
        data: {phrase:phrase},
        dataType: "json",
        success: function (datas) {
            $.each(datas, function (index, value) {
                 
            });
        },
        error: function (jqXHR, textStatus, errorThrown) {
            console.table(jqXHR)
        }
    });
}