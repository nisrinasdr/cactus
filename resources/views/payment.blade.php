<!DOCTYPE html>
<html lang="en">
<head>
	<title>Shipping Info</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/linearicons-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/products.css" rel="stylesheet">
</head>
<body class="animsition">
<nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
  <div class="navbar-toggler-right">
    <a class="navbar-brand js-scroll-trigger" href="/">Cactusmhi</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
  </div>

  <div class="collapse navbar-collapse flex-column" id="navbarResponsive">
    <ul class="navbar-nav ml-auto">
    	@if (Auth::guest())
						<li class="nav-item">
							<a class="nav-link js-scroll-trigger" href="/login">Login</a>
						</li>
			     @else
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="/auth/logout">Logout</a></li>
							</ul>
						</li>@endif
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="{{route('cart.index')}}" id="cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i><span class="alert badge"> {{Cart::count()}} </span>
              </a>
            </li>
            <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#" id="search"><i class="fa fa-search" aria-hidden="true"></i></a>
            </li>
            <li class="nav-item">
            <form class="form-inline ">
              <input class="form-control transparent-input form-control-sm mr-3" type="text" placeholder="Search" aria-label="Search">
            </form>
            </li>
    </ul>

    <ul class="navbar-nav ml-auto">
    <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="/produks">Products</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#">Story</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#">Plant Care</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#">Connect</a>
            </li>
    </ul>

  </div>

</nav>


  <div class="row">
    <div class="small-6 small-centered columns">
        <form action="/" method="POST" id="payment-form">
            {{csrf_field()}}
            <span class="payment-errors"></span>

            <div class="form-row">
                <label>
                    <span>Card Number</span>
                    <input type="text" size="20" data-stripe="number">
                </label>
            </div>

            <div class="form-row">
                <label>
                    <span>Expiration (MM/YY)</span>
                    <input type="text" size="2" data-stripe="exp_month">
                    <span> / </span>
                    <input type="text" size="2" data-stripe="exp_year">
                </label>
            </div>

            <div class="form-row">
                <label>
                    <span>CVC</span>
                    <input type="text" size="4" data-stripe="cvc">
                </label>
            </div>


            <input type="submit" class="submit button success" value="Submit Payment">
        </form>
        </div>
    </div>


	<footer class="page-footer font-small indigo" id="footer" style="padding:2% 0">

<!-- Footer Links -->
<div class="container">

 

  <!-- Grid row-->
  <div class="row d-flex text-center justify-content-center mb-md-0 mb-4" >

    <!-- Grid column
    <div class="col-md-8 col-12 mt-5">
      <p style="line-height: 1.7rem">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem
        aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
        Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur.</p>
    </div>
    Grid column -->

  </div>
  <!-- Grid row-->
  <hr class="clearfix d-md-none rgba-white-light" style="margin: 10% 15% 5%;">

  <!-- Grid row-->
  <div class="row pb-3">

    <!-- Grid column -->
    <div class="col-md-12">

      <div class="flex-center">

        <!-- Facebook -->
        <a class="fb-ic">
        <i class="fab fa-facebook-f mr-4"> </i>
        </a>
        <!-- Twitter -->
        <a class="tw-ic">
          <i class="fab fa-twitter  mr-4"> </i>
        </a>
        <!-- Google +-->
        <a class="gplus-ic">
          <i class="fab fa-google-plus mr-4"> </i>
        </a>
        <!--Linkedin -->
        <a class="li-ic">
          <i class="fab fa-linkedin mr-4"> </i>
        </a>
        <!--Instagram-->
        <a class="ins-ic">
          <i class="fab fa-instagram mr-4"> </i>
        </a>
        <!--Pinterest-->
        <a class="pin-ic">
          <i class="fab fa-pinterest"> </i>
        </a>

      </div>

    </div>
    <!-- Grid column -->

  </div>
  <!-- Grid row-->
  <div class="flex-c-m flex-w p-b-18">
					<a href="#" class="m-all-1">
						<img src="images/icons/icon-pay-01.png" alt="ICON-PAY">
					</a>

					<a href="#" class="m-all-1">
						<img src="images/icons/icon-pay-02.png" alt="ICON-PAY">
					</a>

					<a href="#" class="m-all-1">
						<img src="images/icons/icon-pay-03.png" alt="ICON-PAY">
					</a>

					<a href="#" class="m-all-1">
						<img src="images/icons/icon-pay-04.png" alt="ICON-PAY">
					</a>

					<a href="#" class="m-all-1">
						<img src="images/icons/icon-pay-05.png" alt="ICON-PAY">
					</a>
				</div>
</div>

<!-- Footer Links -->

<!-- Copyright -->
<div class="footer-copyright text-center py-3"><font color="white">© 2018 Copyright: Cactushmi</font>
</div>
<!-- Copyright -->

</footer>
<!-- Footer -->

  
			</div>
		</div>
	</footer>


	<!-- Back to top -->
	<div class="btn-back-to-top" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="zmdi zmdi-chevron-up"></i>
		</span>
	</div>

<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});
		})
	</script>
<!--===============================================================================================-->
	<script src="vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script>
		$('.js-pscroll').each(function(){
			$(this).css('position','relative');
			$(this).css('overflow','hidden');
			var ps = new PerfectScrollbar(this, {
				wheelSpeed: 1,
				scrollingThreshold: 1000,
				wheelPropagation: false,
			});

			$(window).on('resize', function(){
				ps.update();
			})
		});
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
  <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
  <script type="text/javascript">
    Stripe.setPublishableKey('pk_test_lhJ48YOs7n0iUOrdNtUWUq1g');
</script>
<script src="{{asset('dist/js/app.js')}}"></script>
</body>
</html>