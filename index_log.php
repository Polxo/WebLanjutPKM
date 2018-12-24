<!DOCTYPE html>
<html lang="en">
<head>
	<title>Culture of Indonesia</title>
	<!--Bostrap-->
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  	<!--end bostrap-->
   	<!-- Start WOWSlider.com HEAD section -->
		<link rel="stylesheet" type="text/css" href="engine1/style.css" />
		<script type="text/javascript" src="engine1/jquery.js"></script>
	<!-- End WOWSlider.com HEAD section -->
	<!--css-->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<!--end css-->
	<!--angular-->
  	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
  	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-route.js"></script>
  	<!-- angular end--> 
  	<!--font awesom-->
  	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/solid.css">
  	<!--end font awesom-->

</head>
<body class="container-fluid" style="padding: 0px;">
	<div class="row">
		<div class="col-md-12">
			<header>
				<!-- menu -->
				<div class="menu">
					<nav class="navbar navbar-expand-lg navbar-light bg-light ">
					  <a class="navbar-brand" href="#!">Culture Of indonesia</a>
					  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" 	aria-expanded="false" aria-label="Toggle navigation">
					  	<span class="navbar-toggler-icon"></span>
					  </button>
					  	<div class="collapse navbar-collapse justify-content-between" id="navbarNavAltMarkup">
						    <div class="navbar-nav">
						   	   	<a class="nav-item nav-link active" href="#!">Home <span class="sr-only">(current)</span></a>
						      	<a class="nav-item nav-link" href="#">Kebudayaan</a>
						      	<a class="nav-item nav-link" href="#">Pariwisata</a>
					    	</div>
					    	<div class="navbar-nav">
					    	<p>HI selamat datang ...</p>
					    	</div>
					  	</div>
					</nav>
				</div>
				<!--end menu-->
			</header>
			<content ng-app="myApp">
				<div ng-view></div>

				  	<script>
						var app = angular.module("myApp", ["ngRoute"]);
						app.config(function($routeProvider) {
						    $routeProvider
						    .when("/", {
						        templateUrl : "main.htm"
						    })
						    .when("/login", {
						        templateUrl : "login.htm"
						    })
						    .when("/daftar", {
						        templateUrl : "daftar.htm"
						    })
						    .when("/blue", {
						        templateUrl : "blue.htm"
						    });
						});
					</script>
			</content>
			<footer class="page-footer font-small blue pt-4 ">

  <!-- Footer Links -->
  <div class="container-fluid text-center text-md-left">

    <!-- Grid row -->
    <!--div class="row"-->
      <!-- Grid column -->
      <div class="col-md-6 mt-md-0 mt-3">

        <!-- Content -->
        <h5 class="text-uppercase">Kontak </h5>
        <p>Alamat: Jln wijaya Kusuma No 21</p>
        <p>Provinsi: Yogyakarta</p>
        <p>Telepon: (0376) 23626</p>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none pb-3">

      <!-- Grid column -->
      <div class="col-md-6 mb-md-0 mb-3">

      <div style="text-align: right;"> <!-- Links -->
        <h5 class="text-uppercase">Links 	:</h5>
          <img style="width: 50px;height: 50px;" src="img/facebook.png">
          <img style="width: 50px;height: 50px;" src="img/instagram.png">
          <img style="width: 50px;height: 50px;" src="img/email.png">
          <img style="width: 50px;height: 50px;" src="img/twitter.png">
 
       </div> <!-- Grid column -->

    </div>
    <!-- Grid row -->

  <!--/div-->
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2018 Copyright:
    <a href="https://mdbootstrap.com/bootstrap-tutorial/">Cluture Of Indonesia</a>
  </div>
  <!-- Copyright -->

</footer>
		</div>
		
	</div>



</body>
</html>