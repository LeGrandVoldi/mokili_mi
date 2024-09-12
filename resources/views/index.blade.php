<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>MOkili MI</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- STYLE BOOSTRAP -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
		<!-- STYLE CSS -->
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
		<link rel="stylesheet" href={{ asset("css/style__1.css") }}>
		<link rel="stylesheet" href={{ asset("css/margin.css") }}>
		<link rel="stylesheet" href={{ asset("css/border_radius.css") }}>
		<link rel="stylesheet" href={{ asset("css/transition.css") }}>
		<link rel="stylesheet" href={{ asset("css/position_center.css") }}>
		
	</head>

	<body id="body">	

        <div >
			<div class="wrapper">
				<div class="image-holder">
					<div id="scroll_bas" class="br_2 HoriVerCenter transition">
						<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="m6 13l6 6l6-6M6 5l6 6l6-6"/></svg>
					</div>
					<img src="images/top-mountain-view.jpg" alt="">
					
				</div>
				<div class="form-inner">
					<form id="myForm" action="/aXXXcceYYYderZZZpageAAAaccuBBBeilCCC/{{ $acceder_accueil }}" method="POST">
						@method('post')
						@csrf
						<div class="form-header">
							<h4 class="mt-2">MOKILI MI</h4>
							<img src="images/sign-up.png" alt="" class="sign-up-icon">
						</div>
						<div class="row">
							<div class="col-6">
							  <!-- text input -->
							  <div class="form-group">
								<label>Votre prénom : </label>
								<input type="text" class="form-control input1 transition" id="prenom" name="prenom" data-validation="length alphanumeric" data-validation-length="3-12" autocomplete="off" >
							  </div>
							</div>
							<div class="col-6">
							  <div class="form-group">
								<label>Votre nom :</label>
								<input type="text" class="form-control input1 transition" id="nom" name="nom" data-validation="length alphanumeric" data-validation-length="3-12" autocomplete="off" >	
							  </div>
							</div>
						  </div>
						<div class="form-group">
							<label for="">E-mail :</label>
							<input type="text" class="form-control input1 transition" id="email" name="email" data-validation="email"  autocomplete="off" onkeyup="saisirEmail()">
						</div>
						<div class="form-group" style="position: relative">
							<label for="">Mot d'accès :</label>
							<input type="password" style="padding-left: 50px" class="form-control input1 transition" id="motacces" name="motacces" data-validation="length" data-validation-length="min8">
						    <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
						    <svg class="transition" id="yeux_fermer"  style="font-size: 25px;position:absolute;top:42px;left:10px;color:#FDFEFE97" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 256 256"><g fill="currentColor"><path d="M224 104c-16.81 20.81-47.63 48-96 48s-79.19-27.19-96-48c16.81-20.81 47.63-48 96-48s79.19 27.19 96 48" opacity="0.2"/><path d="M228 175a8 8 0 0 1-10.92-3l-19-33.2A123.2 123.2 0 0 1 162 155.46l5.87 35.22a8 8 0 0 1-6.58 9.21a8.4 8.4 0 0 1-1.29.11a8 8 0 0 1-7.88-6.69l-5.77-34.58a133 133 0 0 1-36.68 0l-5.77 34.58A8 8 0 0 1 96 200a8.4 8.4 0 0 1-1.32-.11a8 8 0 0 1-6.58-9.21l5.9-35.22a123.2 123.2 0 0 1-36.06-16.69L39 172a8 8 0 1 1-13.94-8l20-35a153.5 153.5 0 0 1-19.3-20a8 8 0 1 1 12.46-10c16.6 20.54 45.64 45 89.78 45s73.18-24.49 89.78-45a8 8 0 1 1 12.44 10a153.5 153.5 0 0 1-19.3 20l20 35a8 8 0 0 1-2.92 11"/></g></svg>
						    <svg class="transition" id="yeux_ouvert" style="font-size: 25px;position:absolute;top:42px;left:10px;color:#FDFEFE97" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 14 14"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><path d="M7 3.625c-4.187 0-5.945 3.766-5.945 3.844c0 .078 1.758 3.843 5.945 3.843s5.945-3.765 5.945-3.843c0-.078-1.758-3.844-5.945-3.844M2.169 5.813L.61 4.252m4.525-.354L4.5 1.843m7.331 3.97l1.559-1.56m-4.525-.355L9.5 1.843"/><path d="M5.306 7.081a1.738 1.738 0 1 0 3.388.776a1.738 1.738 0 1 0-3.388-.776"/></g></svg>
						</div>
						<button class="button" id="btn_submit">créer un compte</button>
						<a href="/seXXXCoYYYnnecZZZterAAA/{{ $se_Connecter }}"><p class="btn btn-info form-control HoriVerCenter mt-2 br_1">Se connecter</p></a>
						<div id="footer" class="centre">
							<div class="socials">
							
							
							</div>
						</div>
						
					</form>
				</div>
				
			</div>
		</div>
	
		<!-- STYLE BOOSTRAP JS -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
		<script src={{ asset("js/js_inscription/jquery-3.3.1.min.js") }}></script>
		<script src={{ asset("js/js_inscription/jquery.form-validator.min.js") }}></script>
		<script src={{ asset("js/js_inscription/main.js") }}></script>
		<script src={{ asset("js/js_inscription/yeux_ouvert_fermer.js") }}></script>
		<script src={{ asset("js/js_inscription/recuperer_champs.js") }}></script>
		<script src={{ asset("js/js_inscription/verifierEmail.js") }}></script>
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>