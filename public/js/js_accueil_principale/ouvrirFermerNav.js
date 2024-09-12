let menu1 = document.getElementById('menu1') ;
let menu2 = document.getElementById('menu2') ;
let main_1 = document.getElementById('main_1') ;
let main_2 = document.getElementById('main_2') ;
let les_selections  =document.querySelectorAll(".les_selections");
let voir_2  =document.querySelectorAll(".voir_2");
let img_mokili = document.getElementById('img_mokili');

let Nav = document.getElementById('Nav');


let touche_envoyer = document.getElementById('touche_envoyer1');
menu1.addEventListener('click',function(){
    
    let largeurEcran = window.innerWidth
    if(largeurEcran <= 1080 && largeurEcran > 925 ){
        Nav.style.display = "block";  
        setTimeout(() => {
          Nav.style.right = "-70vw";
        }, 100);
    }else if(largeurEcran <= 925 && largeurEcran > 625){
        Nav.style.display = "block";
        setTimeout(() => {
          Nav.style.right = "-60vw";
        }, 10);
    }else if(largeurEcran <= 625 && largeurEcran > 480){
        Nav.style.display = "block";
        setTimeout(() => {
          Nav.style.right = "-50vw";
        }, 10);
    }else if(largeurEcran <= 480){
        Nav.style.display = "block";
        setTimeout(() => {
          Nav.style.right = "-30vw";
        }, 10);
    }
    else{
        menu1.style.width = "0em";
        menu1.style.height = "0em";
        menu2.style.width = "1.6em";
        menu2.style.height = "1.6em";
    
        main_1.style.width = "95vw";
        main_2.style.width = "0vw";
    
        img_mokili.style.width = "0px"
    
        
        les_selections.forEach(element => {
            element.style.width = "60px";
        });
        voir_2.forEach(element => {
            element.style.fontSize = "0px";
        });
        
    }
    
    
})
menu2.addEventListener('click',function(){
    Nav.style.display = "none";
    menu2.style.width = "0em"
    menu2.style.height = "0em"
    menu1.style.width = "1.6em"
    menu1.style.height = "1.6em"

    main_2.style.width = "20vw"
    main_1.style.width = "80vw"

    img_mokili.style.width = "110px"

    les_selections.forEach(element => {
        element.style.width = "17vw";
    });
    voir_2.forEach(element => {
        element.style.fontSize = "15px";
    });
})
function deNav1(){
    Nav.style.right = "-100vw";
   setTimeout(() => {
    Nav.style.display = "none";
   }, 300);
   
}