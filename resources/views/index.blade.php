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
    <script type="text/javascript" src="{{URL::asset('assets/js/jquery.min.js')}}"></script>

  </head>

  <body id="page-top">


<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
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
						</li>
			
				
            <li class="nav-item">
              @if (Auth::user()-> admin == 1)
				  <a class="nav-link js-scroll-trigger" href="/admin">Dashboard</a>
			  @else
				  <a class="nav-link js-scroll-trigger" href="/shoping-cart" id="cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
            </li>
			  @endif
            @endif
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
    

    <header class="masthead text-center text-white d-flex">
     <div class="container my-auto">
        <div class="row">
         <!-- <div class="col-lg-10 mx-auto">
            <h1 class="text-uppercase">
              <strong>The world is full of cactus, but we don't have to sit on it.</strong>
            </h1>
            <hr class="green">
          </div>
          <div class="col-lg-8 mx-auto">
           <p class="text-faded mb-5">Perfect Gift for The One You Love.</p>
            <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">What's Cactusmhi?</a>
          </div> -->
        </div>
      </div>
</header> 


  <!--  <section class="bg-primary" id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading text-white">Perfect Gift for The One You Love.</h2>
            <hr class="my-4">
            <p class="text-faded mb-4">Cactusmhi give you different kind of gift that no one ever imagine before! Cute, natural, and unique.</p>
            <a class="btn btn-light btn-xl js-scroll-trigger" href="#services">Show our products!</a>
          </div>
        </div>
      </div>
    </section> -->

    <section id="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">You can use it for many events!</h2>
            <hr class="my-4">
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fas fa-4x fa-graduation-cap text-primary mb-3 sr-icon-1"></i>
              <h3 class="mb-3">Gift for Graduation</h3>
              <p class="text-muted mb-0">There will be description here.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fas fa-4x fa-birthday-cake text-primary mb-3 sr-icon-2"></i>
              <h3 class="mb-3">Gift for Birthday</h3>
              <p class="text-muted mb-0">There will be description here.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fas fa-4x fa-home text-primary mb-3 sr-icon-3"></i>
              <h3 class="mb-3">Decor your room</h3>
              <p class="text-muted mb-0">There will be description here.</p>
            </div>
          </div>
          </div>
        </div>
      </div>
    </section>

    <section class="p-0" id="portfolio">
      <div class="container-fluid p-0">
         <div class="col-lg-12 text-center">
             <h2 class="section-heading">New Arrival!</h2>
            <hr class="green my-4">
          </div>
        <div class="row no-gutters popup-gallery">
            @forelse($produks->chunk(4) as $chunk)
             @foreach($chunk as $produk)
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="img/portfolio/fullsize/1.jpg">
              <img class="img-fluid" src="{{url('images',$produk->image)}}" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Category
                  </div>
                  <div class="project-name">
                    {{$produk->name}}
                  </div>
                </div>
              </div>
            </a>
          </div>
            @endforeach
              @empty
                <h3>No products</h3>
         @endforelse
        </div>
      </div>
    </section>

 <!--   <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading">Let's Get In Touch!</h2>
            <hr class="my-4">
            <p class="mb-5">Want to know more about us! Give us a call or send us an email and we will get back to you as soon as possible!</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 ml-auto text-center">
            <i class="fas fa-phone fa-3x mb-3 sr-contact-1"></i>
            <p>123-456-6789</p>
          </div>
          <div class="col-lg-4 mr-auto text-center">
            <i class="fas fa-envelope fa-3x mb-3 sr-contact-2"></i>
            <p>
              <a href="mailto:your-email@your-domain.com">feedback@startbootstrap.com</a>
            </p>
          </div>
        </div>
      </div>
    </section> -->
        <!-- Footer -->
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

</div>
<!-- Footer Links -->

<!-- Copyright -->
<div class="footer-copyright text-center py-3"><font color="white">© 2018 Copyright: Cactushmi</font>
</div>
<!-- Copyright -->

</footer>
<!-- Footer -->

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/creative.min.js"></script>


  </body>

</html>
