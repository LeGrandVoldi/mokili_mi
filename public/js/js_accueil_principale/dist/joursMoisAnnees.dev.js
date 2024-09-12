"use strict";

// JOURS
var selection_jours = document.getElementById('selection_jours');
var tab = "";

for (var i = 1; i <= 31; i++) {
  if (i < 10) {
    tab += "<option value=" + i + ">" + i + "</option>";
  } else {
    tab += "<option value=" + i + ">" + i + "</option>";
  }
}

selection_jours.innerHTML = tab; // MOIS

var selection_mois = document.getElementById('selection_mois');
var tabMois = ['janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'août', 'septembre', 'octobre', 'novembre', 'décembre'];
var tab1 = "";

for (var _i = 0; _i <= 11; _i++) {
  if (_i < 10) {
    tab1 += "<option value=" + tabMois[_i] + ">" + tabMois[_i] + "</option>";
  } else {
    tab1 += "<option value=" + tabMois[_i] + ">" + tabMois[_i] + "</option>";
  }
}

selection_mois.innerHTML = tab1; // ANNEES

var selection_annees = document.getElementById('selection_annees');
var dateActuelle = new Date();
var anneeActuelle = dateActuelle.getFullYear();
var anneeVoulu = anneeActuelle - 10;
var anneeLimite = anneeActuelle - 120;
var tab2 = "";
tab2 += "<option value=''></option>";

for (var _i2 = anneeVoulu; _i2 >= anneeLimite; _i2--) {
  tab2 += "<option value=" + _i2 + ">" + _i2 + "</option>";
}

selection_annees.innerHTML = tab2;