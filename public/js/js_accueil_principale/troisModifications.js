let toucheModifAnniv = document.getElementById("toucheModifAnniv");
let toucheModifSA = document.getElementById("toucheModifSA");
let toucheModifGenre = document.getElementById("toucheModifGenre");
let fermerModifAnniv1 = document.getElementById("fermerModifAnniv");
let fermerModifSA1 = document.getElementById("fermerModifSA");
let fermerModifGenre1 = document.getElementById("fermerModifGenre"); 
let fermerProfilEtoile1 = document.getElementById("fermerProfilEtoile"); 


let bloc_modifier_anniversaire = document.getElementById("bloc_modifier_anniversaire");
let bloc_modifier_sa = document.getElementById("bloc_modifier_sa");
let bloc_modifier_genre = document.getElementById("bloc_modifier_genre");

toucheModifAnniv.addEventListener('click',function(){// Ouvrir
    bloc_modifier_anniversaire.style.visibility = "visible"
    bloc_modifier_anniversaire.style.opacity = "1"
})
fermerModifAnniv1.addEventListener('click',function(){// Fermer
    bloc_modifier_anniversaire.style.visibility = "hidden"
    bloc_modifier_anniversaire.style.opacity = "0"
})

toucheModifSA.addEventListener('click',function(){// Ouvrir
    bloc_modifier_sa.style.visibility = "visible"
    bloc_modifier_sa.style.opacity = "1"
})
fermerModifSA1.addEventListener('click',function(){// Fermer
    bloc_modifier_sa.style.visibility = "hidden"
    bloc_modifier_sa.style.opacity = "0"
})

toucheModifGenre.addEventListener('click',function(){// Ouvrir
    bloc_modifier_genre.style.visibility = "visible"
    bloc_modifier_genre.style.opacity = "1"
})
fermerModifGenre1.addEventListener('click',function(){// Fermer
    bloc_modifier_genre.style.visibility = "hidden"
    bloc_modifier_genre.style.opacity = "0"
})
fermerProfilEtoile1.addEventListener('click',function(){// Fermer
    document.getElementById("bloc_profil_etoile").style.visibility = "hidden"
    document.getElementById("bloc_profil_etoile").style.opacity = "0"
})