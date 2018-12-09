<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Cactusmhi</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/creative.css" rel="stylesheet">
    <link href="css/login.css" rel="stylesheet">

  </head>

  <body id="page-top">
	<a href="/">
		<i class="fas fa-3x fa-times text-primary"></i>
	</a>
<div class="text-center" style="padding:50px 0">
    
	<div class="logo col-lg-10 mx-auto" >
      <h1 class="text-uppercase"><strong>login</strong><h1>
	</div>
				
	<!-- Main Form -->
	<div class="login-form-1">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif
		<form role="form" method="POST" action="/auth/login" id="login-form" class="text-left">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<div class="login-form-main-message"></div>
			<div class="main-login-form">
				<div class="login-group">
					<div class="form-group">
						<label for="lg_username" class="sr-only">E-mail</label>
						<input type="text" class="form-control" id="lg_email" name="lg_eemail" placeholder="E-mail">
					</div>
					<div class="form-group">
						<label for="lg_password" class="sr-only">Password</label>
						<input type="password" class="form-control" id="lg_password" name="lg_password" placeholder="Password">
					</div>
					<div class="form-group login-group-checkbox">
						<input type="checkbox" id="lg_remember" name="remember">
						<label for="lg_remember">remember</label>
					</div>
				</div>
				<button type="submit" class="login-button"><i class="fa fa-chevron-right"></i></button>
			</div>
			<div class="etc-login-form">
				<p>forgot your password? <a href="/password">click here</a></p>
				<p>new user? <a href="/register">create new account</a></p>
			</div>
		</form>
	</div>
	<!-- end:Main Form -->
 </div>




</div>

  </body>
</html>