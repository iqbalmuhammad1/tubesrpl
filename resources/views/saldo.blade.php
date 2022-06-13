<!DOCTYPE html>
<html lang="zxx">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="description" content="Orbitor,business,company,agency,modern,bootstrap4,tech,software">
  <meta name="author" content="width=device-width, initial-scale=1">

  <title>TUBES RPL website DompetDigital</title>

  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="asset/favicon.ico" />

  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="{{asset('plugins/bootstrap/css/bootstrap.min.css')}}"/>
  <!-- Icon Font Css -->
  <link rel="stylesheet" href="{{asset('plugins/icofont/icofont.min.css')}}"/>
  <!-- Slick Slider  CSS -->
  <link rel="stylesheet" href="{{asset('plugins/slick-carousel/slick/slick.css')}}"/>
  <link rel="stylesheet" href="{{asset('plugins/slick-carousel/slick/slick-theme.css')}}"/>

  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="{{asset('css/style.css')}}"/>
  <link rel="stylesheet" href="{{asset('css/stylesaldo.css')}}"/>

</head>

<body id="top">

<header>
	<nav class="navbar navbar-expand-lg navigation" id="navbar">
		<div class="container">
		 	 <a class="navbar-brand" href="#index">
			  	<img src="asset/logo-dd.png" alt="" class="img-fluid">
			  </a>

		  	<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarmain" aria-controls="navbarmain" aria-expanded="false" aria-label="Toggle navigation">
			<span class="icofont-navigation-menu"></span>
		  </button>
	  
		  <div class="collapse navbar-collapse" id="navbarmain">
			<ul class="navbar-nav ml-auto">
			  <li class="nav-item active">
				<a class="nav-link" href="{{('/uangku/index')}}">Home</a>
			  </li>
			   <li class="nav-item"><a class="nav-link" href="/uangku/about">About</a></li>
			    <!--<li class="nav-item"><a class="nav-link" href="service.html">Services</a></li>-->

			    <li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="department.html" id="dropdown02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Payment<i class="icofont-thin-down"></i></a>
					<ul class="dropdown-menu" aria-labelledby="dropdown02">
                        <li><a class="dropdown-item" href="/uangku/transaction">Transfer</a></li>
						<li><a class="dropdown-item" href="/uangku/multipayment">MultiPayment</a></li>
						
					</ul>
			  	</li>

			  	<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="doctor.html" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Profile<i class="icofont-thin-down"></i></a>
					<ul class="dropdown-menu" aria-labelledby="dropdown03">
						<li><a class="dropdown-item" href="profile">User Profile</a></li>
						<li><a class="dropdown-item" href="/uangku/saldo">Dompet Saya</a></li>
						<li><a class="dropdown-item" href="appoinment.html">Top-Up Saldo</a></li>
						<li><a class="dropdown-item" href="appoinment.html">Riwayat Transaksi</a></li>
					</ul>
			  	</li>
			    <li class="nav-item"><a class="nav-link" href="/uangku">Sign Out</a></li>
			</ul>
		  </div>
		</div>
	</nav>
</header>
	
<!-- Slider Start -->
<section class="banner">
	<div class="container">
		<div class="row">
		<section classname="snippet-body">
    	<div class="container d-flex justify-content-center mt-5">

        <div class="card">

            <div class="top-container">

				<img src="https://www.google.com/imgres?imgurl=https%3A%2F%2Fwww.static-src.com%2Fwcsstore%2FIndraprastha%2Fimages%2Fcatalog%2Fmedium%2F%2F100%2FMTA-23512789%2Fbrd-67586_-letoy-minions-bob-takara-tomy-_full01.jpg&imgrefurl=https%3A%2F%2Fwww.blibli.com%2Fjual%2Fminions-bob&tbnid=cTe4Bm6FA1Ol5M&vet=12ahUKEwj79bXar6n4AhUy_jgGHZEvD8gQMygZegUIARDuAQ..i&docid=5E0VB-KI6ZT7VM&w=380&h=380&q=minion&client=opera&ved=2ahUKEwj79bXar6n4AhUy_jgGHZEvD8gQMygZegUIARDuAQ" class="img-fluid profile-image" width="70">

                <div class="ml-3">
                    <h5 class="name">Rembrandt</h5>
                    <p class="User ID">rembrandtnueve</p>
            </div>
        </div>

        <div class="middle-container d-flex justify-content-between align-items-center mt-3 p-2">
            <div class="dollar-div px-3">

                <div class="round-div"><i class="fa fa-dollar dollar"></i></div>

            </div>
            <div class="d-flex flex-column text-right mr-2">
                <span class="current-balance">Current Balance</span>
                <span class="amount"><span class="dollar-sign">Rp</span>8.765.990</span>
            </div>
        </div>

        <div class="recent-border mt-4">
            <span class="recent-orders">Recent orders</span>
        </div>
        <div class="wishlist-border pt-2">
            <span class="wishlist">Wishlist</span>
        </div>
        <div class="fashion-studio-border pt-2">
            <span class="fashion-studio">Fashion studio</span>
        </div>
		</div>
		<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
		<script type="text/javascript">
			var myLink = document.querySelectorAll('a[href="#"]');
			myLink.forEach(function(link){
			link.addEventListener('click', function(e) {
				e.preventDefault();
			});
			});
		</script>
		</div>
	</div>
	</section>
</section>

    <!-- 
    Essential Scripts
    =====================================-->

    
    <!-- Main jQuery -->
    <script src="{{asset('plugins/jquery/jquery.js')}}"></script>
    <!-- Bootstrap 4.3.2 -->
    <script src="{{asset('plugins/bootstrap/js/popper.js')}}"></script>
    <script src="{{asset('plugins/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('plugins/counterup/jquery.easing.js')}}"></script>
    <!-- Slick Slider -->
    <script src="{{asset('plugins/slick-carousel/slick/slick.min.js')}}"></script>
    <!-- Counterup -->
    <script src="{{asset('plugins/counterup/jquery.waypoints.min.js')}}"></script>
    
    <script src="{{asset('plugins/shuffle/shuffle.min.js')}}"></script>
    <script src="{{asset('plugins/counterup/jquery.counterup.min.js')}}"></script>
    <!-- Google Map -->
    <script src="{{asset('plugins/google-map/map.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA&callback=initMap"></script>    
    
    <script src="{{asset('js/script.js')}}"></script>
    <script src="{{asset('js/contact.js')}}"></script>

  </body>
  </html>
   