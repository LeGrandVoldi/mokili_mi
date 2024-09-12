document.getElementById('btn_photo').addEventListener('click', function() {
    document.getElementById('maPhoto').click();
});

document.getElementById('maPhoto').addEventListener('change', function(e) {
    var file = this.files[0];
    if (file) {
        
        var files = e.target.files;
        var filesArr = Array.prototype.slice.call(files);
        let verifier = 1 ;
        filesArr.forEach(function (f){
            if (!f.type.match("image.*")) {
                  verifier = 0 ;
                  return;
              }
        });
        if(verifier == 1){
            var fileName = file.name;
            document.getElementById('file_name').textContent = fileName;
            var reader = new FileReader();

            reader.onload = function(e) {
                var imageUrl = e.target.result;
                document.getElementById('photo_profil_logo').style.opacity = "0";
                var imagePreview = document.getElementById('photo_profil');
                imagePreview.style.backgroundImage="url('"+imageUrl+"')";
            };
    
            reader.readAsDataURL(file);
            document.getElementById('enregistrerPhoto').click();
        }else{
            messageInfo();
        }
        
        
    } else {
        document.getElementById('file-name').textContent = 'No file chosen';
        document.getElementById('image-preview').innerHTML = '';
    }
    
});
$.ajaxSetup({
    headers :{
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });
$(document).ready(function(){
    $("#formulaire").on("submit",function(e) {
        e.preventDefault();
        let verifier = 0 ;
        document.getElementById('btn_photo').style.display = 'none' ;
        document.getElementById('chargement').style.display  = 'block' ;
       
            $.ajax({
                type: "POST",
                url: "/enregistrerImage",
                data: new FormData(this),
                contentType : false ,
                processData : false,
                dataType: "json",
                success: function (datas) {
                    $.each(datas, function (indexInArray, valueOfElement) {
                        verifier = valueOfElement.valeur
                    });
                    if(verifier == 1){
                      document.getElementById('btn_photo').style.display = 'block' ;
                      document.getElementById('chargement').style.display  = 'none' ;
                    }
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    console.table(jqXHR)
                }
              });
      
        
      
  });
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
       title: "format du fichier invalide"
       });
}