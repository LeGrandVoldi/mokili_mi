let yeux_ouvert = document.getElementById('yeux_ouvert');
let yeux_fermer = document.getElementById('yeux_fermer');
let motacces = document.getElementById('motacces');

motacces.addEventListener('click',function(){
    yeux_ouvert.style.color = "#34495E";
    yeux_fermer.style.color = "#34495E"
    
})
motacces.addEventListener('mouseout',function(){
    yeux_ouvert.style.color = "#FDFEFE97";
    yeux_fermer.style.color = "#FDFEFE97";
    
})

yeux_ouvert.addEventListener('click',function(){
    yeux_ouvert.style.opacity = "0";
    yeux_ouvert.style.visibility = "hidden";
    yeux_fermer.style.visibility = "visible";
    yeux_fermer.style.opacity = "1";

    motacces.type = "text" // voir le message
})
yeux_fermer.addEventListener('click',function(){
    yeux_fermer.style.opacity = "0";
    yeux_fermer.style.visibility = "hidden";
    yeux_ouvert.style.visibility = "visible";
    yeux_ouvert.style.opacity = "1";

    motacces.type = "password" // cacher le message
})