// JOURS
let selection_jours = document.getElementById('selection_jours');
let tab = "";
for(let i = 1 ; i <= 31 ; i++ ){
    if(i < 10){
        tab += "<option value="+i+">"+i+"</option>";
    }else{
        tab += "<option value="+i+">"+i+"</option>";
    }
    
}
selection_jours.innerHTML = tab ;
// MOIS
let selection_mois = document.getElementById('selection_mois');
let tabMois = ['janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'août', 'septembre', 'octobre', 'novembre','décembre'];
let tab1 = "";
for(let i = 0 ; i <= 11 ; i++ ){
    if(i < 10){
        tab1 += "<option value="+tabMois[i]+">"+tabMois[i]+"</option>";
    }else{
        tab1 += "<option value="+tabMois[i]+">"+tabMois[i]+"</option>";
    }
    
}
selection_mois.innerHTML = tab1 ;
// ANNEES
let selection_annees = document.getElementById('selection_annees');
const dateActuelle = new Date();
const anneeActuelle = dateActuelle.getFullYear();
let anneeVoulu = anneeActuelle - 10 ;
let anneeLimite = anneeActuelle - 120 ;
let tab2 = "";
tab2 += "<option value=''></option>";
for(let i = anneeVoulu ; i >=  anneeLimite ; i-- ){

    tab2 += "<option value="+i+">"+i+"</option>";
    
}
selection_annees.innerHTML = tab2 ;