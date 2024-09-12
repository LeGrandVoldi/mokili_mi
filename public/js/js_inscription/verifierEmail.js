let verification = true ; 
function saisirEmail(){
      
    let email = document.getElementById('email').value;
    
    $.ajax({
        type: "GET",
        url: "/verifierEmail",
        data: {email:email},
        dataType: "json",
        success: function (datas) {
            $.each(datas, function (indexInArray, valueOfElement) {
                  if(valueOfElement.valeur == 1){
                     verification = true ;
                  }else{
                     verification = false ;
                  }
            });
           
        },
        error: function (jqXHR, textStatus, errorThrown) {
            console.table(jqXHR)
        }
    });
}

let btn_submit = document.getElementById('btn_submit');
btn_submit.addEventListener('click',function(e){
    e.preventDefault(); 
    let nom = document.getElementById('nom').value;
    let prenom = document.getElementById('prenom').value;
    let email = document.getElementById('email').value;
    let motacces = document.getElementById('motacces').value;  

    if(nom == "" || prenom == "" || email == "" || motacces == "" ){
        messageInfo();
    }else{
        if(verification == false){
            document.getElementById('myForm').submit();
        }else{
            
            messageEmailUtiliser();
            setTimeout(() => {
                document.getElementById('email').style.borderColor="#FC0D0D";
              }, 250);
              document.getElementById('email').style.borderColor="#ECF0F1";
        }
    }
    
    
})
function messageInfo(){
     // Message info
     const Toast = Swal.mixin({
        toast: true,
        position: "top-end",
        showConfirmButton: false,
        timer: 2000,
        timerProgressBar: false,
        didOpen: (toast) => {
            toast.onmouseenter = Swal.stopTimer;
            toast.onmouseleave = Swal.resumeTimer;
        }
        });
        Toast.fire({
        icon: "info",
        title: "Veuiller remplir tout les champs"
        });
}
function messageEmailUtiliser(){
      // Message error code
      const Toast = Swal.mixin({
        toast: true,
        position: "top-end",
        showConfirmButton: false,
        timer: 2000,
        timerProgressBar: false,
        didOpen: (toast) => {
            toast.onmouseenter = Swal.stopTimer;
            toast.onmouseleave = Swal.resumeTimer;
        }
        });
        Toast.fire({
        icon: "error",
        title: "E-mail déjà utilisé"
        });
}