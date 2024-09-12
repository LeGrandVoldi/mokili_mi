"use strict";

$.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});
var id = document.getElementById('monID').value;
document.getElementById("btn_anniversaire").addEventListener('click', function () {
  var jours = document.getElementById('selection_jours').value;
  var mois = document.getElementById('selection_mois').value;
  var annee = document.getElementById('selection_annees').value;
  var bloc_modifier_anniversaire = document.getElementById("bloc_modifier_anniversaire");
  var affiche_anniv = document.querySelectorAll('.affiche_anniv');
  var date = "";
  var verifier = 0;
  $.ajax({
    type: "GET",
    url: "/anniversaire",
    data: {
      monID: id,
      jours: jours,
      mois: mois,
      annee: annee
    },
    dataType: "json",
    success: function success(datas) {
      $.each(datas, function (indexInArray, valueOfElement) {
        verifier = valueOfElement.valeur;
      });

      if (verifier == 1) {
        date = jours + " " + mois + " " + annee;
        affiche_anniv.forEach(function (element) {
          element.textContent = date;
        });
        bloc_modifier_anniversaire.style.visibility = "hidden";
        bloc_modifier_anniversaire.style.opacity = "0";
      }
    },
    error: function error(jqXHR, textStatus, errorThrown) {
      console.table(jqXHR);
    }
  });
});
document.getElementById("btn_sa").addEventListener('click', function () {
  var etat = document.getElementById('selection_etat').value;
  var bloc_modifier_sa = document.getElementById("bloc_modifier_sa");
  var affiche_sa = document.querySelectorAll('.affiche_sa');
  var verifier = 0;
  $.ajax({
    type: "GET",
    url: "/etat",
    data: {
      monID: id,
      etat: etat
    },
    dataType: "json",
    success: function success(datas) {
      $.each(datas, function (indexInArray, valueOfElement) {
        verifier = valueOfElement.valeur;
      });

      if (verifier == 1) {
        aff = etat;
        affiche_sa.forEach(function (element) {
          element.textContent = aff;
        });
        bloc_modifier_sa.style.visibility = "hidden";
        bloc_modifier_sa.style.opacity = "0";
      }
    },
    error: function error(jqXHR, textStatus, errorThrown) {
      console.table(jqXHR);
    }
  });
});
document.getElementById("btn_genre").addEventListener('click', function () {
  var genre = document.getElementById('selection_genre').value;
  var bloc_modifier_genre = document.getElementById("bloc_modifier_genre");
  var affiche_genre = document.querySelectorAll('.affiche_genre');
  var verifier = 0;
  $.ajax({
    type: "GET",
    url: "/genre",
    data: {
      monID: id,
      genre: genre
    },
    dataType: "json",
    success: function success(datas) {
      $.each(datas, function (indexInArray, valueOfElement) {
        verifier = valueOfElement.valeur;
      });

      if (verifier == 1) {
        aff = genre;
        affiche_genre.forEach(function (element) {
          element.textContent = aff;
        });
        bloc_modifier_genre.style.visibility = "hidden";
        bloc_modifier_genre.style.opacity = "0";
      }
    },
    error: function error(jqXHR, textStatus, errorThrown) {
      console.table(jqXHR);
    }
  });
});