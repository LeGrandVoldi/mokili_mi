"use strict";

var touche_envoyer1 = document.getElementById('touche_envoyer1');
var touche_ajouter_etoile1 = document.getElementById('touche_ajouter_etoile1');
var touche_profil1 = document.getElementById('touche_profil1');
var touche_envoyer2 = document.getElementById('touche_envoyer2');
var touche_ajouter_etoile2 = document.getElementById('touche_ajouter_etoile2');
var touche_profil2 = document.getElementById('touche_profil2');
var voirEnvoyerMessage = document.getElementById('voirEnvoyerMessage');
var voirEnvoyerMessageRemplis = document.getElementById('voirEnvoyerMessageRemplis');
var voirMonProfil = document.getElementById('voirMonProfil');
var voirMesEtoiles = document.getElementById('voirMesEtoiles');
var titre_etoiles = document.getElementById('titre_etoiles');
var nav = document.getElementById('Nav');
var photo_profil = document.getElementById('photo_profil'); // Lorsque la page se recharge

touche_envoyer1.style.borderStyle = "solid";
touche_envoyer1.style.borderColor = "#A18EFF";
touche_envoyer1.style.borderWidth = "5px";
touche_envoyer2.style.borderStyle = "solid";
touche_envoyer2.style.borderColor = "#A18EFF";
touche_envoyer2.style.borderWidth = "5px";
touche_envoyer1.style.height = "60px";
touche_envoyer2.style.height = "60px";
var largeurEcran = window.innerWidth; // Pour bloc principale

touche_envoyer1.addEventListener('click', function () {
  envoisPour2();
});
touche_ajouter_etoile1.addEventListener('click', function () {
  ajouterEtoilesPour2();
});
touche_profil1.addEventListener('click', function () {
  profilPour2();
}); // Pour le Nav

touche_envoyer2.addEventListener('click', function () {
  envoisPour2();
});
touche_ajouter_etoile2.addEventListener('click', function () {
  ajouterEtoilesPour2();
});
touche_profil2.addEventListener('click', function () {
  profilPour2();
});

function envoisPour2() {
  // if(largeurEcran <= 1080 && largeurEcran > 925 ){
  // }else if(largeurEcran <= 925 && largeurEcran > 625){
  // }else if(largeurEcran <= 625 && largeurEcran > 480){
  // }else if(largeurEcran <= 480){
  // }
  // else{
  //     touche_profil1.style.width = "50px";
  //     touche_ajouter_etoile1.style.width = "50px";
  //     touche_envoyer1.style.width = "60px";
  // }
  var tailleMain_2 = document.getElementById('main_2').clientWidth;

  if (tailleMain_2 == 0) {
    touche_profil1.style.width = "50px";
    touche_ajouter_etoile1.style.width = "50px";
    touche_envoyer1.style.width = "60px";
  }

  touche_envoyer2.style.borderStyle = "solid";
  touche_envoyer2.style.borderColor = "#A18EFF";
  touche_envoyer2.style.borderWidth = "5px";
  touche_envoyer1.style.borderStyle = "solid";
  touche_envoyer1.style.borderColor = "#A18EFF";
  touche_envoyer1.style.borderWidth = "5px";
  touche_envoyer1.style.height = "60px";
  touche_envoyer2.style.height = "60px";
  touche_ajouter_etoile2.style.border = "solid #85929E90 1px";
  touche_profil2.style.border = "solid #85929E90 1px";
  touche_ajouter_etoile1.style.border = "solid #85929E90 1px";
  touche_profil1.style.border = "solid #85929E90 1px";
  touche_profil1.style.height = "50px";
  touche_profil2.style.height = "50px";
  touche_ajouter_etoile1.style.height = "50px";
  touche_ajouter_etoile2.style.height = "50px";
  voirEnvoyerMessage.style.width = "98%";
  voirEnvoyerMessage.style.height = "98%";
  voirEnvoyerMessage.style.opacity = "1";
  voirEnvoyerMessage.style.visibility = "visible";
  voirEnvoyerMessageRemplis.style.width = "98%";
  voirEnvoyerMessageRemplis.style.height = "98%";
  voirEnvoyerMessageRemplis.style.opacity = "1";
  voirEnvoyerMessageRemplis.style.visibility = "visible";
  voirMonProfil.style.width = "0%";
  voirMonProfil.style.height = "0%";
  voirMonProfil.style.opacity = "0";
  voirMesEtoiles.style.width = "0%";
  voirMesEtoiles.style.height = "0%";
  voirMesEtoiles.style.opacity = "0";
  photo_profil.style.width = "0vw";
  photo_profil.style.height = "0vw";
  deNav();
}

function ajouterEtoilesPour2() {
  // if(largeurEcran <= 1080 && largeurEcran > 925 ){
  // }else if(largeurEcran <= 925 && largeurEcran > 625){
  // }else if(largeurEcran <= 625 && largeurEcran > 480){
  // }else if(largeurEcran <= 480){
  // }
  // else{
  //     touche_profil1.style.width = "50px";
  //     touche_ajouter_etoile1.style.width = "60px";
  //     touche_envoyer1.style.width = "50px";
  // }
  var tailleMain_2 = document.getElementById('main_2').clientWidth;

  if (tailleMain_2 == 0) {
    touche_profil1.style.width = "50px";
    touche_ajouter_etoile1.style.width = "60px";
    touche_envoyer1.style.width = "50px";
  }

  touche_ajouter_etoile2.style.borderStyle = "solid";
  touche_ajouter_etoile2.style.borderColor = "#2EE55D";
  touche_ajouter_etoile2.style.borderWidth = "5px";
  touche_ajouter_etoile1.style.borderStyle = "solid";
  touche_ajouter_etoile1.style.borderColor = "#2EE55D";
  touche_ajouter_etoile1.style.borderWidth = "5px";
  touche_ajouter_etoile1.style.height = "60px";
  touche_ajouter_etoile2.style.height = "60px";
  touche_envoyer2.style.border = "solid #85929E90 1px";
  touche_profil2.style.border = "solid #85929E90 1px";
  touche_envoyer1.style.border = "solid #85929E90 1px";
  touche_profil1.style.border = "solid #85929E90 1px";
  touche_envoyer1.style.height = "50px";
  touche_envoyer2.style.height = "50px";
  touche_profil1.style.height = "50px";
  touche_profil2.style.height = "50px";
  voirMesEtoiles.style.width = "98%";
  voirMesEtoiles.style.height = "98%";
  voirMesEtoiles.style.opacity = "1";
  voirMesEtoiles.style.visibility = "visible";
  voirEnvoyerMessage.style.width = "0%";
  voirEnvoyerMessage.style.height = "0%";
  voirEnvoyerMessage.style.opacity = "0";
  voirEnvoyerMessageRemplis.style.width = "0%";
  voirEnvoyerMessageRemplis.style.height = "0%";
  voirEnvoyerMessageRemplis.style.opacity = "0";
  voirMonProfil.style.width = "0%";
  voirMonProfil.style.height = "0%";
  voirMonProfil.style.opacity = "0";
  photo_profil.style.width = "0vw";
  photo_profil.style.height = "0vw";
  deNav();
}

function profilPour2() {
  // if(largeurEcran <= 1080 && largeurEcran > 925 ){
  // }else if(largeurEcran <= 925 && largeurEcran > 625){
  // }else if(largeurEcran <= 625 && largeurEcran > 480){
  // }else if(largeurEcran <= 480){
  // }
  // else{
  //     touche_profil1.style.width = "60px";
  //     touche_ajouter_etoile1.style.width = "50px";
  //     touche_envoyer1.style.width = "50px";
  // }
  var tailleMain_2 = document.getElementById('main_2').clientWidth;

  if (tailleMain_2 == 0) {
    touche_profil1.style.width = "60px";
    touche_ajouter_etoile1.style.width = "50px";
    touche_envoyer1.style.width = "50px";
  }

  touche_profil1.style.borderStyle = "solid";
  touche_profil1.style.borderColor = "#F73A57";
  touche_profil1.style.borderWidth = "5px";
  touche_profil2.style.borderStyle = "solid";
  touche_profil2.style.borderColor = "#F73A57";
  touche_profil2.style.borderWidth = "5px";
  touche_profil1.style.height = "60px";
  touche_profil2.style.height = "60px";
  touche_envoyer1.style.border = "solid #85929E90 1px";
  touche_ajouter_etoile1.style.border = "solid #85929E90 1px";
  touche_envoyer2.style.border = "solid #85929E90 1px";
  touche_ajouter_etoile2.style.border = "solid #85929E90 1px";
  touche_envoyer1.style.height = "50px";
  touche_envoyer2.style.height = "50px";
  touche_ajouter_etoile1.style.height = "50px";
  touche_ajouter_etoile2.height = "50px";
  voirEnvoyerMessage.style.width = "0";
  voirEnvoyerMessage.style.height = "0";
  voirEnvoyerMessage.style.opacity = "0";
  voirEnvoyerMessageRemplis.style.width = "0";
  voirEnvoyerMessageRemplis.style.height = "0";
  voirEnvoyerMessageRemplis.style.opacity = "0";
  voirMesEtoiles.style.width = "0%";
  voirMesEtoiles.style.height = "0%";
  voirMesEtoiles.style.opacity = "0";
  voirMonProfil.style.width = "98%";
  voirMonProfil.style.height = "98%";
  voirMonProfil.style.opacity = "1";
  photo_profil.style.width = "35vw";
  photo_profil.style.height = "35vw";
  deNav();
}

function deNav() {
  nav.style.right = "-100vw";
  setTimeout(function () {
    nav.style.display = "none";
  }, 300);
}