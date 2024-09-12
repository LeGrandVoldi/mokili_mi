$.ajaxSetup({
    headers :{
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
let id = document.getElementById('monID').value ;
document.getElementById("btn_anniversaire").addEventListener('click',function(){
    let jours = document.getElementById('selection_jours').value ;
    let mois = document.getElementById('selection_mois').value ;
    let annee = document.getElementById('selection_annees').value ;
    let bloc_modifier_anniversaire = document.getElementById("bloc_modifier_anniversaire");
    let affiche_anniv = document.querySelectorAll('.affiche_anniv');
    let date = "";
    let verifier = 0 ;

    $.ajax({
        type: "GET",
        url: "/anniversaire",
        data: {monID:id,jours:jours,mois:mois,annee:annee},
        dataType: "json",
        success: function (datas) {
            $.each(datas, function (indexInArray, valueOfElement) {
                 verifier = valueOfElement.valeur ;
            });
            if(verifier == 1 ){
                date = jours+" "+mois+" "+annee;
                affiche_anniv.forEach(function(element){
                    element.textContent = date ;
                })
                bloc_modifier_anniversaire.style.visibility = "hidden";
                bloc_modifier_anniversaire.style.opacity = "0";
            }
        },
        error: function (jqXHR, textStatus, errorThrown) {
            console.table(jqXHR)
        }
    });
})

document.getElementById("btn_sa").addEventListener('click',function(){
    let etat = document.getElementById('selection_etat').value ;
    let bloc_modifier_sa = document.getElementById("bloc_modifier_sa");
    let affiche_sa = document.querySelectorAll('.affiche_sa');
    let verifier = 0 ;

    $.ajax({
        type: "GET",
        url: "/etat",
        data: {monID:id,etat:etat},
        dataType: "json",
        success: function (datas) {
            $.each(datas, function (indexInArray, valueOfElement) {
                 verifier = valueOfElement.valeur ;
            });
            if(verifier == 1 ){
                aff = etat;
                affiche_sa.forEach(function(element){
                    element.textContent = aff ;
                })
                bloc_modifier_sa.style.visibility = "hidden";
                bloc_modifier_sa.style.opacity = "0";
            }
        },
        error: function (jqXHR, textStatus, errorThrown) {
            console.table(jqXHR)
        }
    });
})

document.getElementById("btn_genre").addEventListener('click',function(){
    let genre = document.getElementById('selection_genre').value ;
    let bloc_modifier_genre = document.getElementById("bloc_modifier_genre");
    let affiche_genre = document.querySelectorAll('.affiche_genre');
    let verifier = 0 ;

    $.ajax({
        type: "GET",
        url: "/genre",
        data: {monID:id,genre:genre},
        dataType: "json",
        success: function (datas) {
            $.each(datas, function (indexInArray, valueOfElement) {
                 verifier = valueOfElement.valeur ;
            });
            if(verifier == 1 ){
                aff = genre;
                affiche_genre.forEach(function(element){
                    element.textContent = aff ;
                })
                bloc_modifier_genre.style.visibility = "hidden";
                bloc_modifier_genre.style.opacity = "0";
            }
        },
        error: function (jqXHR, textStatus, errorThrown) {
            console.table(jqXHR)
        }
    });
})