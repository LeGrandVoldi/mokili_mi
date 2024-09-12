<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href={{ asset('css/verification.css') }}>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>verifier-mail</title>
</head>
<body>
<script>
        // Message envois Email
        const Toast = Swal.mixin({
        toast: true,
        position: "top-end",
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.onmouseenter = Swal.stopTimer;
            toast.onmouseleave = Swal.resumeTimer;
        }
        });
        Toast.fire({
        icon: "success",
        title: "Code envoyer par mail"
        });
</script>
<div id="part1" class="centre">
    <div id="bloc_logo" >

    </div>
</div>
<div id="part2">
    <div id="bloc_contenue">
      <h3 class="btn btn-dark"><span id="minute">01</span>:<span id="seconde">30</span></h3>
 
        <form action="/veZEZzsdZZZmOXXXcliYYYderZZZliAAAaccumiCCC/{{ $MOkili_mi }}" method="POST" class="centre" >
            @method('post')
            @csrf
            <div class="col-md-4"><br>
                <label for="validationCustom01" class="form-label">Entrer le code à 5 chiffres</label>
                <input type="text" id="email" name="email" value="{{ $email }}" hidden>
                <input type="text" id="id" name="id" value="{{ $id }}" hidden>
                <input type="text" id="code" name="code" value="{{ $code }}" hidden>
                <input type="text" class="form-control" id="validationCustom01" required maxlength="5"><br>
                <div class="col-12">
                    <button class="btn btn-info" type="submit" id="btn_submit" >Valider</button>
                </div>
            </div>          
       </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script>
    let btn_submit = document.getElementById('btn_submit');
    btn_submit.addEventListener('click',function(e){
            let code_recu = parseInt(document.getElementById('code').value);
            let code_saisi = parseInt(document.getElementById('validationCustom01').value);
            if( code_recu != code_saisi ){
                e.preventDefault();
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
                title: "Code non valide"
                });
            }else{

            }
            
    })
</script>
<script>
    let seconde = 29 ;
    let minute = "01" ;
    let intervalId = setInterval(() => {
        if(seconde < 0 ){
            seconde = 59 ;
            minute = "00" ;
        }
        if(seconde < 10){
            document.getElementById('seconde').textContent = "0"+seconde ;
            document.getElementById('minute').textContent = minute ;
        }else{
            document.getElementById('seconde').textContent = seconde ;
            document.getElementById('minute').textContent = minute ;
        }
        if(minute == "00" && seconde == 00){
            clearInterval(intervalId);
            window.location.href = "/mot-acces-oublier"
        }
        seconde -= 1 ;
    }, 1000);
</script>
</body>
</html>