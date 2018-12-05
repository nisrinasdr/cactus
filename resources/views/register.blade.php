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
	<body>
	<a href="/">
  <i class="fas fa-3x fa-times text-primary"></i></a>
  <div class="text-center" style="padding:5px 0">
    
  <div class="logo col-lg-10 mx-auto" >
      <h1 class="text-uppercase"><strong>Register</strong><h1>
	</div>
			
<!-- REGISTRATION FORM -->

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
		<form role="form" method="POST" action="/auth/register" id="register-form" class="text-left">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<div class="login-form-main-message"></div>
			<div class="main-login-form">
				<div class="login-group">
					<div class="form-group">
						<label for="name" class="sr-only">Full Name</label>
						<input type="text" class="form-control" id="name" name="name" placeholder="Name" value="{{ old('name') }}">
					</div>
					<div class="form-group">
						<label for="email" class="sr-only">Email address</label>
						<input type="text" class="form-control" id="email" name="email" placeholder="E-mail" value="{{ old('email') }}">
					</div>
					<div class="form-group">
						<label for="password" class="sr-only">Password</label>
						<input type="password" class="form-control" id="password" name="password" placeholder="Password">
					</div>
					<div class="form-group">
						<label for="confirmation" class="sr-only">Password Confirm</label>
						<input type="password" class="form-control" id="confirmation" name="confirmation" placeholder="Confirm password">
					</div>
					<div class="form-group">
						<label class="sr-only">Privileges</label>
						<select class="form-control" name="admin">
							<option>-- Pilih Hak Akses --</option>
							<option value="0">User</option>
						</select>
					</div>

					
					<div class="form-group login-group-checkbox">
						<input type="checkbox" class="" id="reg_agree" name="reg_agree">
						<label for="reg_agree">i agree with <a href="#">terms</a></label>
					</div>
				</div>
				<button type="submit" class="login-button"><i class="fa fa-chevron-right"></i></button>
			</div>
			<div class="etc-login-form">
				<p>already have an account? <a href="/login">login here</a></p>
			</div>
		</form>
	</div>
	<!-- end:Main Form -->
</div>





</div>

  </body>
</html>