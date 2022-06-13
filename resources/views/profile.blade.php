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
  <link rel="stylesheet" href="{{asset('css/styleprofile.css')}}"/>

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

    <div class="page-content page-container" id="page-content">
        <div class="padding">
            <div class="card user-card-full">
                <div class="row m-l-0 m-r-0">
                    <div class="col-sm-4 bg-c-lite-green user-profile">
                        <div class="card-block text-center text-white">
                            <div class="m-b-25">
                                <img src="https://img.icons8.com/bubbles/100/000000/user.png" class="img-radius"
                                    alt="User-Profile-Image">
                            </div>
                            <h6 class="f-w-600">Hembo_Tingor(username)</h6>
                            <i class=" mdi mdi-square-edit-outline feather icon-edit m-t-10 f-16"></i>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="card-block">
                            <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Information</h6>
                            <div class="row">
                                <div class="col-sm-6">
                                    <p class="m-b-10 f-w-600">Password</p>
                                    <h6 class="text-muted f-w-400">**********</h6>
                                </div>
                                <div class="col-sm-6">
                                    <p class="m-b-10 f-w-600">Nama Lengkap</p>
                                    <h6 class="text-muted f-w-400">Hembo Tingor</h6>
                                </div>
                                <div class="col-sm-6">
                                    <p class="m-b-10 f-w-600">Nomor Telepon</p>
                                    <h6 class="text-muted f-w-400">08217312xxx</h6>
                                </div>
                                <div class="col-sm-6">
                                    <p class="m-b-10 f-w-600">Email</p>
                                    <h6 class="text-muted f-w-400">tigor99@gmail.com</h6>
                                </div>
                            </div>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type='text/javascript'
        src='https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js'></script>
    <script type='text/javascript' src='#'></script>
    <script type='text/javascript' src='#'></script>
    <script type='text/javascript'></script>
    <script type='text/javascript'>var myLink = document.querySelector('a[href="#"]');
        myLink.addEventListener('click', function (e) {
            e.preventDefault();
        });</script>

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
   