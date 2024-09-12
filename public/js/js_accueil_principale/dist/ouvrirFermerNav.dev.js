"use strict";

var menu1 = document.getElementById('menu1');
var menu2 = document.getElementById('menu2');
var main_1 = document.getElementById('main_1');
var main_2 = document.getElementById('main_2');
var les_selections = document.querySelectorAll(".les_selections");
var voir_2 = document.querySelectorAll(".voir_2");
var img_mokili = document.getElementById('img_mokili');
var Nav = document.getElementById('Nav');
var touche_envoyer = document.getElementById('touche_envoyer1');
menu1.addEventListener('click', function () {
  var largeurEcran = window.innerWidth;

  if (largeurEcran <= 1080 && largeurEcran > 925) {
    Nav.style.display = "block";
    setTimeout(function () {
      Nav.style.right = "-70vw";
    }, 100);
  } else if (largeurEcran <= 925 && largeurEcran > 625) {
    Nav.style.display = "block";
    setTimeout(function () {
      Nav.style.right = "-60vw";
    }, 10);
  } else if (largeurEcran <= 625 && largeurEcran > 480) {
    Nav.style.display = "block";
    setTimeout(function () {
      Nav.style.right = "-50vw";
    }, 10);
  } else if (largeurEcran <= 480) {
    Nav.style.display = "block";
    setTimeout(function () {
      Nav.style.right = "-30vw";
    }, 10);
  } else {
    menu1.style.width = "0em";
    menu1.style.height = "0em";
    menu2.style.width = "1.6em";
    menu2.style.height = "1.6em";
    main_1.style.width = "95vw";
    main_2.style.width = "0vw";
    img_mokili.style.width = "0px";
    les_selections.forEach(function (element) {
      element.style.width = "60px";
    });
    voir_2.forEach(function (element) {
      element.style.fontSize = "0px";
    });
  }
});
menu2.addEventListener('click', function () {
  Nav.style.display = "none";
  menu2.style.width = "0em";
  menu2.style.height = "0em";
  menu1.style.width = "1.6em";
  menu1.style.height = "1.6em";
  main_2.style.width = "20vw";
  main_1.style.width = "80vw";
  img_mokili.style.width = "110px";
  les_selections.forEach(function (element) {
    element.style.width = "17vw";
  });
  voir_2.forEach(function (element) {
    element.style.fontSize = "15px";
  });
});

function deNav1() {
  Nav.style.right = "-100vw";
  setTimeout(function () {
    Nav.style.display = "none";
  }, 300);
}