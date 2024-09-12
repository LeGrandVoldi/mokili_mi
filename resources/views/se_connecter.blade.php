<!doctype html>
<html lang="en">
  <head>
  	<title>Se Connecter</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href={{ asset('css/style__2.css') }}>

	</head>
	<body class="img js-fullheight" style="background-image: url({{ asset('images/top-mountain-view.jpg')}});">
	@if (session('non-trouver'))
        <div class="alert alert-success">
            {{ session('non-trouver') }}
        </div>
    @endif
		<section class="ftco-section" >
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">MOkili MI</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	
		      	<form action="/seConnecter" class="signin-form" method="POST">
					@method('post')
					@csrf
		      		<div class="form-group">
		      			<input type="email" name="email" class="form-control" placeholder="email" required>
		      		</div>
	            <div class="form-group">
	              <input id="password-field" name="motacces" type="password" class="form-control" placeholder="mot accès" required>
	              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
	            </div>
	            <div class="form-group">
	            	<button style="border: solid #F0F3F4 1px" type="submit" class="form-control btn btn-dark submit px-3">Se connecter</button>
	            </div>
	            <div class="form-group d-md-flex">
	            	
					<div class="w-50 text-md-right">
						<a href="/mot-acces-oublier" style="color: #fff">Mot d'accès oublier</a>
					</div>
	            </div>
	          </form>
	          
		      </div>
				</div>
			</div>
		</div>
	</section>

    <script src={{ asset('js/js_seConnecter/jquery.min.js') }} ></script>
    <script src={{ asset('js/js_seConnecter/popper.js') }} ></script>
    <script src={{ asset('js/js_seConnecter/bootstrap.min.js') }}></script>
    <script src={{ asset('js/js_seConnecter/main.js') }}></script>

	</body>
</html>

