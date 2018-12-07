<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Product Detail</title>

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
    <link href="css/detail.css" rel="stylesheet">

  </head>

  <body id="page-top">


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
						</li>
			@endif
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="/shoping-cart" id="cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
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
              <a class="nav-link js-scroll-trigger" href="/produk">Products</a>
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

    <div class="container" style="padding:2% 0">
    <div class="row">
        <!-- Image -->
        <div class="col-10 col-lg-6" >
            <div class="card bg-light mb-3" >
                <div class="card-body">
                    <a href="" data-toggle="modal" data-target="#productModal">
                        <img class="img-fluid" src="https://dummyimage.com/600x600/55595c/fff" />
                        <p class="text-center">Zoom</p>
                    </a>
                </div>
            </div>
        </div>

        <!-- Add to cart -->
        <div class="col-10 col-lg-6 add_to_cart_block"">
            <div class="card bg-light mb-3" >
                <div class="card-body">
                    <p class="price">Rp 30.000</p>
                    <form method="get" action="cart.html">
                        <div class="form-group">
                            <label for="colors">Color</label>
                            <select class="custom-select" id="colors">
                                <option selected>Select</option>
                                <option value="1">Blue</option>
                                <option value="2">Red</option>
                                <option value="3">Green</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Quantity :</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <button type="button" class="quantity-left-minus btn btn-danger btn-number"  data-type="minus" data-field="">
                                        <i class="fa fa-minus"></i>
                                    </button>
                                </div>
                                <input type="text" class="form-control"  id="quantity" name="quantity" min="1" max="100" value="1">
                                <div class="input-group-append">
                                    <button type="button" class="quantity-right-plus btn btn-success btn-number" data-type="plus" data-field="">
                                        <i class="fa fa-plus"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <a href="cart.html" class="btn btn-success text-uppercase">
                            <i class="fa fa-shopping-cart"></i> Add To Cart
                        </a>
                    </form>
                    <div class="reviews_product p-3 mb-2 ">
                        3 reviews
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        (4/5)
                        <a class="pull-right" href="#reviews">View all reviews</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- Description -->
        <div class="col-12">
            <div class="card border-light mb-3">
                <div class="card-header bg-primary text-white text-uppercase"><i class="fa fa-align-justify"></i> Description</div>
                <div class="card-body">
                    <p class="card-text">
                        Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.
                    </p>
                    <p class="card-text">
                        Contrairement à une opinion répandue, le Lorem Ipsum n'est pas simplement du texte aléatoire. Il trouve ses racines dans une oeuvre de la littérature latine classique datant de 45 av. J.-C., le rendant vieux de 2000 ans. Un professeur du Hampden-Sydney College, en Virginie, s'est intéressé à un des mots latins les plus obscurs, consectetur, extrait d'un passage du Lorem Ipsum, et en étudiant tous les usages de ce mot dans la littérature classique, découvrit la source incontestable du Lorem Ipsum. Il provient en fait des sections 1.10.32 et 1.10.33 du "De Finibus Bonorum et Malorum" (Des Suprêmes Biens et des Suprêmes Maux) de Cicéron. Cet ouvrage, très populaire pendant la Renaissance, est un traité sur la théorie de l'éthique. Les premières lignes du Lorem Ipsum, "Lorem ipsum dolor sit amet...", proviennent de la section 1.10.32.
                    </p>
                </div>
            </div>
        </div>

        <!-- Reviews -->
        <div class="col-12" id="reviews">
            <div class="card border-light mb-3">
                <div class="card-header bg-primary text-white text-uppercase"><i class="fa fa-comment"></i> Reviews</div>
                <div class="card-body">
                    <div class="review">
                        <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
                        <meta itemprop="datePublished" content="01-01-2016">January 01, 2018

                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        by Paul Smith
                        <p class="blockquote">
                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                        </p>
                        <hr>
                    </div>
                    <div class="review">
                        <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
                        <meta itemprop="datePublished" content="01-01-2016">January 01, 2018

                        <span class="fa fa-star" aria-hidden="true"></span>
                        <span class="fa fa-star" aria-hidden="true"></span>
                        <span class="fa fa-star" aria-hidden="true"></span>
                        <span class="fa fa-star" aria-hidden="true"></span>
                        <span class="fa fa-star" aria-hidden="true"></span>
                        by Paul Smith
                        <p class="blockquote">
                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                        </p>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
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

 
  </body>

</html>
