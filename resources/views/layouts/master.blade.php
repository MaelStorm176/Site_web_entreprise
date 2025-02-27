<!DOCTYPE html>
<html lang="fr">
  <head>
    <title>ACPM 08 - Lumes</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Oxygen:400,700" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery.fancybox.min.css')}}">

    <link rel="stylesheet" href="{{asset('fonts/ionicons/css/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('fonts/fontawesome/css/font-awesome.min.css')}}">

    <!-- Theme Style -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <style>
        a.product_header {
            cursor: pointer;
        }
    </style>
  </head>
  <body>

    <header role="banner">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand " href="/">ACPM</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarsExample05">
            <ul class="navbar-nav pl-md-5 ml-auto">
              <li class="nav-item">
                <a class="nav-link active product_header" href="/">Accueil</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle product_header" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Nos produits</a>
                <div class="dropdown-menu" aria-labelledby="dropdown04">
                  <a class="dropdown-item product_header" href="services.html">Levage</a>
                  <a class="dropdown-item product_header" href="services.html">Moteurs</a>
                  <a class="dropdown-item product_header" href="services.html">Pompes</a>
                  <a class="dropdown-item product_header" href="services.html">Traitement de l'eau</a>
                  <a class="dropdown-item product_header" href="product">Télésurveillance</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link product_header" href="about.html">A propos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link product_header" onclick="scroll_to('projets')">Projets</a>
              </li>
              <li class="nav-item">
                <a class="nav-link product_header" href="contact">Contact</a>
              </li>
            </ul>

            <div class="navbar-nav ml-auto">
              <form method="post" class="search-form">
                <span class="icon ion ion-search"></span>
                <input type="text" class="form-control" placeholder="Chercher...">
              </form>
            </div>

          </div>
        </div>
      </nav>
    </header>
    <!-- END header -->

@yield('content')


<!-- FOOTER -->
    <footer class="site-footer" role="contentinfo">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-4 mb-5">
            <h3>ACPM, qui sommes nous ?</h3>
            <p class="mb-5">La sarl ACPM (Associés Choquert Pluet Maintenance) intervient sur le secteur des Ardennes et les départements limitrophes.
            Nous proposons nos services sur la vente, la réparation et l’installation concernant...</p>
            <ul class="list-unstyled footer-link d-flex footer-social">
              <li><a href="#" class="p-2"><span class="fa fa-twitter"></span></a></li>
              <li><a href="https://www.facebook.com/acpm08" class="p-2"><span class="fa fa-facebook"></span></a></li>
              <li><a href="#" class="p-2"><span class="fa fa-linkedin"></span></a></li>
              <li><a href="#" class="p-2"><span class="fa fa-instagram"></span></a></li>
            </ul>

          </div>
          <div class="col-md-5 mb-5 pl-md-5">
            <h3>Nous contacter</h3>
            <ul class="list-unstyled footer-link">
              <li class="d-block">
                <span class="d-block">
                  <strong>Adresse:</strong>
                </span>
                <span >31 Grande rue, 08000, Lumes</span></li>
              <li class="d-block">
                <span class="d-block">
                  <strong>Telephone:</strong>
                </span>
                <span >09 81 40 24 99</span></li>
              <li class="d-block">
                <span class="d-block">
                  <strong>Emails:</strong>
                </span>
                <a><span>info@acpm08.fr</span></a> </br>
                <a><span>acpm.jv@sfr.fr</span></a>
              </li>
            </ul>
          </div>
          <div class="col-md-3 mb-5">
            <h3>Liens utiles</h3>
            <ul class="list-unstyled footer-link">
              <li><a href="#">About</a></li>
              <li><a href="#">Terms of Use</a></li>
              <li><a href="#">Disclaimers</a></li>
              <li><a href="#">Contact</a></li>
            </ul>
          </div>
          <div class="col-md-3">

          </div>
        </div>
        <div class="row">
          <div class="col-12 text-md-center text-left">
             <p class="copyright">
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>
        </div>
      </div>
    </footer>
    <!-- END footer -->

    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214"/></svg></div>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/main.js"></script>

    <script src="js/main.js"></script>

    @yield('scripts')

  </body>
</html>



