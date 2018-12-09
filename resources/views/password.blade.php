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

  <body id="page-top" background="url(../img/header.jpg)">
	<a href="/login">
		<i class="fas fa-3x fa-times text-primary"></i>
	</a>
<div class="text-center" style="padding:50px 0">
    
	<div class="logo col-lg-10 mx-auto" >
      <h1 class="text-uppercase"><strong>Reset Password</strong><h1>
	</div>

<div class="login-form-1">

					@if (session('status'))
						<div class="alert alert-success">
							{{ session('status') }}
						</div>
					@endif

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

					<form class="text-left" role="form" method="POST" action="/password/email">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<div class="login-form-main-message"></div>
			<div class="main-login-form">
				<div class="login-group">
						<div class="form-group">
							<label class="sr-only">E-Mail Address</label>
							
								<input type="email" class="form-control" name="email" placeholder="E-mail" value="{{ old('email') }}">
						</div>

					</div>	<br>
					<button type="submit" class="btn btn-primary"><i class="fa fa-chevron-right"></i>
									Send Password Reset Link
								</button>
				</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>


</div>

  </body>
</html>
