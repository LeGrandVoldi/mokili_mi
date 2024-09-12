let couleur1  =document.querySelector('.couleur1');
let couleur2  =document.querySelector('.couleur2');
let couleur3  =document.querySelector('.couleur3');

let voirEnvoyerMessageRemplis_main1 = document.getElementById("voirEnvoyerMessageRemplis_main1");
let inputs = document.querySelectorAll(".input");
let emojioneareaInput = document.querySelector('.emojionearea');
let emojioneareaEditor = document.querySelector('.emojionearea-editor');
let bloc_envois = document.querySelector(".bloc_envois");
let footerMS = document.querySelectorAll(".footerMS");
let bodyMS = document.querySelectorAll(".bodyMS");
let bodyAllMS = document.querySelectorAll(".bodyAllMS");

let stock_message = document.querySelectorAll(".stock_message");

let mon_bloc_etoile = document.getElementById("mon_bloc_etoile");
let contenaire_profil_etoile = document.getElementById("contenaire_profil_etoile");

let mon_bloc_anniv = document.getElementById("mon_bloc_anniv");
let contenaire_modifier_anniversaire = document.getElementById("contenaire_modifier_anniversaire");
let mon_bloc_sa = document.getElementById("mon_bloc_sa");
let contenaire_modifier_sa = document.getElementById("contenaire_modifier_sa");
let mon_bloc_genre = document.getElementById("mon_bloc_genre");
let contenaire_modifier_genre = document.getElementById("contenaire_modifier_genre");
let fermer = document.querySelectorAll(".fermer");
let select = document.querySelectorAll(".select");

let fermerProfilEtoile= document.getElementById('fermerProfilEtoile');
let fermerModifAnniv = document.getElementById('fermerModifAnniv');
let fermerModifSA = document.getElementById('fermerModifSA');
let fermerModifGenre= document.getElementById('fermerModifGenre');

// les bloc qui vont recevoir le theme
let body = document.getElementById("body");


let voirMonProfil_2 = document.getElementById('voirMonProfil_2');
let mesInfo_2_bloc_3_bloc  = document.querySelectorAll(".mesInfo_2_bloc_3_bloc");
let mesInfo  = document.querySelectorAll(".mesInfo");


let rechercheEtoile = document.getElementById("rechercheEtoile");
let etoile_ajouter  = document.querySelectorAll(".etoile_ajouter");
let etoile_profil  = document.querySelectorAll(".etoile_profil");
let ligne_etoile  = document.querySelectorAll(".ligne_etoile");

let pe3_1_1= document.getElementById('pe3_1_1');
let pe3_1_2= document.getElementById('pe3_1_2');
let pe3_2= document.getElementById('pe3_2');
let pe2= document.getElementById('pe2');

couleur1.addEventListener('click',function(){
    themeBlanc()
     
})
couleur2.addEventListener('click',function(){ 
    themeNoir()
   
})
couleur3.addEventListener('click',function(){
    themeRose()
    
})

function themeBlanc(){
    

    couleur1.style.borderStyle = "dotted";
    couleur1.style.borderColor = "#D0D3D4";
    couleur1.style.borderWidth = "3px";

    couleur2.style.border = "dotted #85929E90 0px";
    couleur3.style.border = "dotted #85929E90 0px";

    body.style.backgroundColor = "#eeeeee";
    body.style.color = "black";
    let les_selections = document.querySelectorAll(".les_selections");
    les_selections.forEach(element => {
        element.style.backgroundColor = "white"
    });
    select.forEach(element => {
        element.style.backgroundColor = "white";
        element.style.color = "black";
        element.style.borderColor = "#212F3C30";
    });
    let les_selections_1 = document.querySelectorAll(".les_selections_1");// les touches pour Nav
    les_selections_1.forEach(element => {
        element.style.backgroundColor = "white"
    });
    let titres = document.querySelectorAll(".titre"); // les titres MOkili MI
    titres.forEach(element => {
        element.style.color = "#5D6D7E"
    });


    fermer.forEach(element => {
        element.setAttribute('fill', '#34495E');
    });
    
    let menu_1 = document.getElementById("menu_1");// les titres MOkili MI
    menu_1.setAttribute('fill', 'black'); 
    let menu_2 = document.getElementById("menu_2");// menu 1
    menu_2.setAttribute('stroke', 'black')// menu 2 
    let bloc_main_1 = document.querySelectorAll(".bloc_main_1");// bloc_main_1 

    contenaire_profil_etoile.style.backgroundColor = "white";
    contenaire_profil_etoile.style.border = "solid white 0px";

    contenaire_modifier_anniversaire.style.backgroundColor = "white";
    contenaire_modifier_anniversaire.style.border = "solid white 0px";

    contenaire_modifier_sa.style.backgroundColor = "white";
    contenaire_modifier_sa.style.border = "solid white 0px";

    contenaire_modifier_genre.style.backgroundColor = "white";
    contenaire_modifier_genre.style.border = "solid white 0px";

    bloc_main_1.forEach(element => {
        element.style.backgroundColor = "white";
        element.style.border = "solid white 0px";
    });
   
    let main_1 = document.getElementById("main_1");// main 1 
    mon_bloc_etoile.style.color = "";
    mon_bloc_etoile.style.backgroundColor = "#f7f7f7";
    mon_bloc_etoile.style.borderTop = "solid #424949 0px";
    mon_bloc_etoile.style.borderRight = "solid #424949 0px";
    mon_bloc_etoile.style.boxShadow = "rgba(136, 165, 191, 0.48) 6px 2px 16px 0px, rgba(255, 255, 255, 0.8) -6px -2px 16px 0px";

    mon_bloc_anniv.style.backgroundColor = "#f7f7f7";
    mon_bloc_anniv.style.borderTop = "solid #424949 0px";
    mon_bloc_anniv.style.borderRight = "solid #424949 0px";
    mon_bloc_anniv.style.boxShadow = "rgba(136, 165, 191, 0.48) 6px 2px 16px 0px, rgba(255, 255, 255, 0.8) -6px -2px 16px 0px";

    mon_bloc_sa.style.backgroundColor = "#f7f7f7";
    mon_bloc_sa.style.borderTop = "solid #424949 0px";
    mon_bloc_sa.style.borderRight = "solid #424949 0px";
    mon_bloc_sa.style.boxShadow = "rgba(136, 165, 191, 0.48) 6px 2px 16px 0px, rgba(255, 255, 255, 0.8) -6px -2px 16px 0px";

    mon_bloc_genre.style.backgroundColor = "#f7f7f7";
    mon_bloc_genre.style.borderTop = "solid #424949 0px";
    mon_bloc_genre.style.borderRight = "solid #424949 0px";
    mon_bloc_genre.style.boxShadow = "rgba(136, 165, 191, 0.48) 6px 2px 16px 0px, rgba(255, 255, 255, 0.8) -6px -2px 16px 0px";

    main_1.style.backgroundColor = "#f7f7f7";
    main_1.style.borderTop = "solid #424949 0px";
    main_1.style.borderRight = "solid #424949 0px";
    main_1.style.boxShadow = "rgba(136, 165, 191, 0.48) 6px 2px 16px 0px, rgba(255, 255, 255, 0.8) -6px -2px 16px 0px"
    
    let Nav = document.getElementById("Nav");// Nav
    Nav.style.backgroundColor = "white";
    voirMonProfil_2.style.backgroundColor = "#F7F9F9";
    mesInfo_2_bloc_3_bloc.forEach(element => {
        element.style.backgroundColor = "white";
    });
    mesInfo.forEach(element => {
        element.style.borderBottom = "solid #2C3E5020 1px";
    });

    voirEnvoyerMessageRemplis_main1.style.backgroundColor = "white";
    document.querySelectorAll(".mes_messages_1_2").forEach(element => {
        element.style.backgroundColor = "white"
    });
    document.querySelectorAll(".ses_messages_2_2").forEach(element => {
        element.style.backgroundColor = "white"
    });
    bloc_envois.style.backgroundColor = "#E5E7E9"
    inputs.forEach(element => {
        element.style.backgroundColor = "white";
        element.style.border = "solid #ECF0F150 1px";
        element.style.color = "black";
    });
    footerMS.forEach(element => {
        element.style.backgroundColor = "#5D6D7E20";

    });
    bodyMS.forEach(element => {
        element.style.backgroundColor = "#F7F9F9";

    });
    bodyAllMS.forEach(element => {
        element.style.backgroundColor = "#F7F9F9";

    });

    // aujourdhui

    rechercheEtoile.style.backgroundColor = "white";
    rechercheEtoile.style.border = "solid #D6DBDF 1px";
    rechercheEtoile.style.color = "black";

    etoile_ajouter.forEach(element => {
        element.style.background = "radial-gradient( circle farthest-corner at 10% 20%,  rgba(162,102,246,1) 0%, rgba(203,159,249,1) 90% )"
    });
    etoile_profil.forEach(element => {
        element.style.color = "#5D6D7E"
    });
    ligne_etoile.forEach(element => {
        element.style.borderBottom = "solid #AEB6BF30 1px"
    });
    
    pe3_1_1.style.boxShadow = "rgba(0, 0, 0, 0.15) 0px 5px 15px";
    pe3_1_2.style.boxShadow = "rgba(0, 0, 0, 0.15) 0px 5px 15px";
    pe3_2.style.boxShadow = "rgba(0, 0, 0, 0.15) 0px 5px 15px";

    pe3_1_1.style.color = "black";
    pe3_1_2.style.color = "black";
    pe3_2.style.color = "black";
    pe2.style.backgroundColor = "#F0F3F4";
    pe2.style.color = "#34495E";

    ajouterTheme("blanc");

    setTimeout(() => {
        let logo_mokili = document.querySelectorAll(".logo_mokili");// les titres MOkili MI
        logo_mokili.forEach(element => {
            element.style.backgroundImage = "url('../../logos_MOkili_MI/logo_verification.png')"
        });
    }, 1000);
    emojioneareaInput.style.backgroundColor = "white";
    emojioneareaInput.style.border = "solid #ECF0F15000 1px";
    emojioneareaEditor.style.color = "black";
    
    
    


}
function themeNoir(){
    document.getElementById('pe2').style.backgroundColor = "#1B2631";
    document.getElementById('pe2').style.color = "white";
    couleur2.style.borderStyle = "dotted";
    couleur2.style.borderColor = "#FDFEFE";
    couleur2.style.borderWidth = "3px";

    couleur1.style.border = "dotted #85929E90 0px";
    couleur3.style.border = "dotted #85929E90 0px";

    body.style.backgroundColor = "#2E4053";
    body.style.color = "#ECF0F1";
    let les_selections = document.querySelectorAll(".les_selections");
    les_selections.forEach(element => {
        element.style.backgroundColor = "#17202A"
    });
    let les_selections_1 = document.querySelectorAll(".les_selections_1");// les touches pour Nav
    les_selections_1.forEach(element => {
        element.style.backgroundColor = "#17202A"
    });
    select.forEach(element => {
        element.style.backgroundColor = "#17202A"
        element.style.color = "#F4F6F7";
        element.style.borderColor = "#F0F3F450";
    });
    let titres = document.querySelectorAll(".titre");// les titres MOkili MI
    titres.forEach(element => {
        element.style.color = "white"
    });

    fermer.forEach(element => {
        element.setAttribute('fill', '#ECF0F1');
    });
    
    let menu_1 = document.getElementById("menu_1");// les titres MOkili MI
    menu_1.setAttribute('fill', '#FBFCFC'); 
    let menu_2 = document.getElementById("menu_2");// menu 1
    menu_2.setAttribute('stroke', '#FBFCFC')// menu 2
    let bloc_main_1 = document.querySelectorAll(".bloc_main_1");// bloc_main_1  
    bloc_main_1.forEach(element => {
        element.style.backgroundColor = "#212F3C";
        element.style.border = "solid #424949 1px";
    });
    
    contenaire_profil_etoile.style.backgroundColor = "#212F3C";
    contenaire_profil_etoile.style.border = "solid #424949 1px";

    contenaire_modifier_anniversaire.style.backgroundColor = "#212F3C";
    contenaire_modifier_anniversaire.style.border = "solid #424949 1px";

    contenaire_modifier_sa.style.backgroundColor = "#212F3C";
    contenaire_modifier_sa.style.border = "solid #424949 1px";

    contenaire_modifier_genre.style.backgroundColor = "#212F3C";
    contenaire_modifier_genre.style.border = "solid #424949 1px";

    

    let main_1 = document.getElementById("main_1");// main 1
    mon_bloc_etoile.style.backgroundColor = "#17202A";
    mon_bloc_etoile.style.borderTop = "solid #424949 1px";
    mon_bloc_etoile.style.borderRight = "solid #424949 1px";
    mon_bloc_etoile.style.boxShadow = "black 0px 0px 20px";

    mon_bloc_anniv.style.backgroundColor = "#17202A";
    mon_bloc_anniv.style.borderTop = "solid #424949 1px";
    mon_bloc_anniv.style.borderRight = "solid #424949 1px";
    mon_bloc_anniv.style.boxShadow = "black 0px 0px 20px";

    mon_bloc_sa.style.backgroundColor = "#17202A";
    mon_bloc_sa.style.borderTop = "solid #424949 1px";
    mon_bloc_sa.style.borderRight = "solid #424949 1px";
    mon_bloc_sa.style.boxShadow = "black 0px 0px 20px";

    mon_bloc_genre.style.backgroundColor = "#17202A";
    mon_bloc_genre.style.borderTop = "solid #424949 1px";
    mon_bloc_genre.style.borderRight = "solid #424949 1px";
    mon_bloc_genre.style.boxShadow = "black 0px 0px 20px";

    main_1.style.backgroundColor = "#17202A";
    main_1.style.borderTop = "solid #424949 1px";
    main_1.style.borderRight = "solid #424949 1px";
    main_1.style.boxShadow = "black 0px 0px 20px";

    let Nav = document.getElementById("Nav");// Nav
    Nav.style.backgroundColor = "#2E4053";
    voirMonProfil_2.style.backgroundColor = "#2E4053";

    mesInfo_2_bloc_3_bloc.forEach(element => {
        element.style.backgroundColor = "#17202A70";
    });
    mesInfo.forEach(element => {
        element.style.borderBottom = "solid #FBFCFC40 1px";
    });
    
    voirEnvoyerMessageRemplis_main1.style.backgroundColor = "#2E4053";
    document.querySelectorAll(".mes_messages_1_2").forEach(element => {
        element.style.backgroundColor = "#2E4053"
    });
    document.querySelectorAll(".ses_messages_2_2").forEach(element => {
        element.style.backgroundColor = "#2E4053"
    });
    bloc_envois.style.backgroundColor = "#212F3C"
    inputs.forEach(element => {
        element.style.backgroundColor = "#2E4053";
        element.style.border = "solid #ECF0F150 1px";
        element.style.color = "white";
    });
    footerMS.forEach(element => {
        element.style.backgroundColor = "#1B2631";

    });
    bodyMS.forEach(element => {
        element.style.backgroundColor = "#2E4053";

    });
    bodyAllMS.forEach(element => {
        element.style.backgroundColor = "#566573";

    });

    // aujourdhui

    rechercheEtoile.style.backgroundColor = "#212F3C";
    rechercheEtoile.style.border = "solid #424949 1px";
    rechercheEtoile.style.color = "white";

    etoile_ajouter.forEach(element => {
        element.style.background = "radial-gradient( circle 976px at 51.2% 51%,  rgba(11,27,103,1) 0%, rgba(16,66,157,1) 0%, rgba(11,27,103,1) 17.3%, rgba(11,27,103,1) 58.8%, rgba(11,27,103,1) 71.4%, rgba(16,66,157,1) 100.2%, rgba(187,187,187,1) 100.2% )"
    });
    etoile_profil.forEach(element => {
        element.style.color = "#D0D3D4"
    });
    ligne_etoile.forEach(element => {
        element.style.borderBottom = "solid #34495E70 1px"
    });
    
    pe3_1_1.style.boxShadow = "rgba(255, 255, 255, 0.20) 0px 5px 15px";
    pe3_1_2.style.boxShadow = "rgba(255, 255, 255, 0.20) 0px 5px 15px";
    pe3_2.style.boxShadow = "rgba(255, 255, 255, 0.20) 0px 5px 15px";

    pe3_1_1.style.color = "white";
    pe3_1_2.style.color = "white";
    pe3_2.style.color = "white";
    

    ajouterTheme("noir");
    
    setTimeout(() => {
        let logo_mokili = document.querySelectorAll(".logo_mokili");// les titres MOkili MI
        logo_mokili.forEach(element => {
            element.style.backgroundImage = "url('../../logos_MOkili_MI/mokili.png')"
        });
    }, 1000);
    emojioneareaInput.style.backgroundColor = "#2E4053";
    emojioneareaInput.style.border = "solid #ECF0F150 1px";
    emojioneareaEditor.style.color = "white";
    
    
    
    // stock_message.forEach(element => {
    //     element.style.backgroundColor = "red"
    // });
}
function themeRose(){
    
    couleur3.style.borderStyle = "dotted";
    couleur3.style.borderColor = "#FDFEFE";
    couleur3.style.borderWidth = "3px";

    couleur1.style.border = "dotted #85929E90 0px";
    couleur2.style.border = "dotted #85929E90 0px";

    body.style.backgroundColor = "#F33A7890";
    body.style.color = "#ECF0F1";
    let les_selections = document.querySelectorAll(".les_selections");
    les_selections.forEach(element => {
        element.style.backgroundColor = "#F33A7880"
    });
    select.forEach(element => {
        element.style.backgroundColor = "#F33A7880";
        element.style.color = "#F4F6F7";
        element.style.borderColor = "#F0F3F450";
    });
    let les_selections_1 = document.querySelectorAll(".les_selections_1");// les touches pour Nav
    les_selections_1.forEach(element => {
        element.style.backgroundColor = "#F33A7880"
    });
    let titres = document.querySelectorAll(".titre");// les titres MOkili MI
    titres.forEach(element => {
        element.style.color = "white"
    });

    fermer.forEach(element => {
        element.setAttribute('fill', '#34495E');
    });
    
    let menu_1 = document.getElementById("menu_1");// les titres MOkili MI
    menu_1.setAttribute('fill', '#FBFCFC'); 
    let menu_2 = document.getElementById("menu_2");// menu 1
    menu_2.setAttribute('stroke', '#FBFCFC')// menu 2
    let bloc_main_1 = document.querySelectorAll(".bloc_main_1");// bloc_main_1 

    contenaire_profil_etoile.style.backgroundColor = "#F33A7880";
    contenaire_profil_etoile.style.border = "solid #ECF0F150 1px";

    contenaire_modifier_anniversaire.style.backgroundColor = "#F33A7880";
    contenaire_modifier_anniversaire.style.border = "solid #ECF0F150 1px";

    contenaire_modifier_sa.style.backgroundColor = "#F33A7880";
    contenaire_modifier_sa.style.border = "solid #ECF0F150 1px";

    contenaire_modifier_genre.style.backgroundColor = "#F33A7880";
    contenaire_modifier_genre.style.border = "solid #ECF0F150 1px";

    bloc_main_1.forEach(element => {
        element.style.backgroundColor = "#F33A7880";
        element.style.border = "solid #ECF0F150 1px";
    });

    let main_1 = document.getElementById("main_1");// main 1
    mon_bloc_etoile.style.backgroundColor = "#F33A7885";
    mon_bloc_etoile.style.borderTop = "solid #ECF0F150 1px";
    mon_bloc_etoile.style.borderRight = "solid #ECF0F150 1px";
    mon_bloc_etoile.style.boxShadow = "#6F2C5960 0px 0px 20px";

    mon_bloc_anniv.style.backgroundColor = "#F33A7885";
    mon_bloc_anniv.style.borderTop = "solid #ECF0F150 1px";
    mon_bloc_anniv.style.borderRight = "solid #ECF0F150 1px";
    mon_bloc_anniv.style.boxShadow = "#6F2C5960 0px 0px 20px";

    mon_bloc_sa.style.backgroundColor = "#F33A7885";
    mon_bloc_sa.style.borderTop = "solid #ECF0F150 1px";
    mon_bloc_sa.style.borderRight = "solid #ECF0F150 1px";
    mon_bloc_sa.style.boxShadow = "#6F2C5960 0px 0px 20px";

    mon_bloc_genre.style.backgroundColor = "#F33A7885";
    mon_bloc_genre.style.borderTop = "solid #ECF0F150 1px";
    mon_bloc_genre.style.borderRight = "solid #ECF0F150 1px";
    mon_bloc_genre.style.boxShadow = "#6F2C5960 0px 0px 20px";

    main_1.style.backgroundColor = "#F33A7885";
    main_1.style.borderTop = "solid #ECF0F150 1px";
    main_1.style.borderRight = "solid #ECF0F150 1px";
    main_1.style.boxShadow = "#6F2C5960 0px 0px 20px";

    let Nav = document.getElementById("Nav");// Nav
    Nav.style.backgroundColor = "#E92374";
    voirMonProfil_2.style.backgroundColor = "#F33A78";
    mesInfo_2_bloc_3_bloc.forEach(element => {
        element.style.backgroundColor = "#F33A7870";
    });
    mesInfo.forEach(element => {
        element.style.borderBottom = "solid #FBFCFC40 1px";
    });
    
    voirEnvoyerMessageRemplis_main1.style.backgroundColor = "#A31853";
    document.querySelectorAll(".mes_messages_1_2").forEach(element => {
        element.style.backgroundColor = "#A31853"
    });
    document.querySelectorAll(".ses_messages_2_2").forEach(element => {
        element.style.backgroundColor = "#A31853"
    });
    bloc_envois.style.backgroundColor = "#762F4D"
    inputs.forEach(element => {
        element.style.backgroundColor = "#762F4D";
        element.style.border = "solid #ECF0F150 1px";
        element.style.color = "white";
    });
    footerMS.forEach(element => {
        element.style.backgroundColor = "#762F4D";

    });
    bodyMS.forEach(element => {
        element.style.backgroundColor = "#B82A66";

    });
    bodyAllMS.forEach(element => {
        element.style.backgroundColor = "#566573";

    });

    // aujourdhui

    rechercheEtoile.style.backgroundColor = "#212F3C30";
    rechercheEtoile.style.border = "solid #F0F3F450 1px";
    rechercheEtoile.style.color = "white";

    etoile_ajouter.forEach(element => {
        element.style.background = "linear-gradient( 109.6deg,  rgba(209,0,116,1) 11.2%, rgba(110,44,107,1) 91.1% )"
    });
    etoile_profil.forEach(element => {
        element.style.color = "#D0D3D4"
    });
    ligne_etoile.forEach(element => {
        element.style.borderBottom = "solid #34495E20 1px"
    });
    
    pe3_1_1.style.boxShadow = "rgba(0, 0, 0, 0.35) 0px 5px 15px";
    pe3_1_2.style.boxShadow = "rgba(0, 0, 0, 0.35) 0px 5px 15px";
    pe3_2.style.boxShadow = "rgba(0, 0, 0, 0.35) 0px 5px 15px";

    pe3_1_1.style.color = "white";
    pe3_1_2.style.color = "white";
    pe3_2.style.color = "white";
    pe2.style.backgroundColor = "#F967A960";
    pe2.style.color = "white";
    
    ajouterTheme("rose");

    let logo_mokili = document.querySelectorAll(".logo_mokili");// les titres MOkili MI
    setTimeout(() => {
        logo_mokili.forEach(element => {
            element.style.backgroundImage = "url('../../logos_MOkili_MI/mokili.png')"
        });
    }, 1000);
    emojioneareaInput.style.backgroundColor = "#762F4D";
    emojioneareaInput.style.border = "solid #ECF0F150 1px";
    emojioneareaEditor.style.color = "white";

    

    
}

function ajouterTheme(theme){

    let id = document.getElementById('monID').value;

    $.ajaxSetup({
        headers :{
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        type: "GET",
        url: "/ajouterTheme",
        data:  {monTheme:theme,monID:id},
        dataType: "dataTpye",
        success: function (datas) {
              $.each(datas, function (indexInArray, valueOfElement) {
                
              });
        },
        error: function (jqXHR, textStatus, errorThrown) {
            console.table(jqXHR)
        }
    });
}