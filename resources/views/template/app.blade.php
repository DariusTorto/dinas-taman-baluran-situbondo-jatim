<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="codepixer">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>Appru</title>
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,600|Roboto:400,400i,500" rel="stylesheet">
	<!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet"> -->
	<!--
			CSS
			============================================= -->
	<link rel="stylesheet" href="{{asset('appru')}}/css/linearicons.css">
	<link rel="stylesheet" href="{{asset('appru')}}/css/font-awesome.min.css">
	<link rel="stylesheet" href="{{asset('appru')}}/css/bootstrap.css">
	<link rel="stylesheet" href="{{asset('appru')}}/css/magnific-popup.css">
	<link rel="stylesheet" href="{{asset('appru')}}/css/nice-select.css">
	<link rel="stylesheet" href="{{asset('appru')}}/css/hexagons.min.css">
	<link rel="stylesheet" href="{{asset('appru')}}/css/owl.carousel.css">
    <link rel="stylesheet" href="{{asset('appru')}}/css/main.css">
    @stack('css')
</head>



<body>
	<!-- start header Area -->
	<header id="header">
		<div class="container main-menu">
			<div class="row align-items-center justify-content-between d-flex">
				<div id="logo">
					<a href="/"><img src="/appru/img/taman-nasional-situbundo-jatim.png" alt="" title="" class="logo-web"/></a>
				</div>
				<nav id="nav-menu-container">
					<ul class="nav-menu">
						<li class="menu-active"><a href="/">Beranda</a></li>
						<li class="menu-has-children"><a href="">Profil</a>
							<ul>
								<li><a href="kawasan">Profil Kawasan</a></li>
								<li><a href="sejarah">Sejarah Kawasan</a></li>
								<li><a href="visi-dan-misi">Visi dan Misi</a></li>
								<li><a href="kelembagaan">Kelembagaan</a></li>
							</ul>
						</li>
						<li class="menu-has-children"><a href="">Reformasi Birokrasi</a>
							<ul>
								<li><a href="#">#Example</a></li>
							</ul>
						</li>
						<li class="menu-has-children"><a href="">Pengelolaan</a>
							<ul>
								<li><a href="#">Pemanfaatan</a></li>
								<li><a href="#">Pengawetan</a></li>
								<li><a href="#">Perlindungan</a></li>
							</ul>
						</li>
						<li><a href="contact.html">Kontak Kami</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</header>
	<!-- end header Area -->
    @yield('konten')
	<!-- Start Footer Area -->
	<footer class="footer-area section-gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-2 col-md-6 single-footer-widget">
					<h4>Telepon</h4>
					<ul>
						<li><a href="#"> (0331) 335535</a></li>
					</ul>
				</div>
				<div class="col-lg-2 col-md-6 single-footer-widget">
					<h4>Email</h4>
					<ul>
						<li><a href="#">merubetiri@gmail.com</a></li>
					</ul>
				</div>
				<div class="col-lg-4 col-md-6 single-footer-widget">
					<h4>Alamat</h4>
					<ul>
						<li><a href="#">Jl. Sriwijaya 53 Kotak Pos 269 Jember 68123, Jawa Timur</a></li>
					</ul>
				</div>
				<div class="col-lg-2 col-md-6 single-footer-widget">
					<h4>Partner</h4>
					<ul>
						<li><a href="#">Kementerian LHK</a></li>
						<li><a href="#">Ditjen KSDAE</a></li>
						<li><a href="#">Pengaduan LHK</a></li>
						<li><a href="#">PPID</a></li>
						<li><a href="#">LPSE</a></li>
						<li><a href="#">Biro Kepegawaian</a></li>
					</ul>
				</div>
			</div>
			<div class="footer-bottom row align-items-center">
				<p class="footer-text m-0 col-lg-6 col-md-12"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
			</div>
		</div>
	</footer>
	<!-- End Footer Area -->

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="/appru/js/vendor/jquery-2.2.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
	 crossorigin="anonymous"></script>
	<script src="/appru/js/tilt.jquery.min.js"></script>
	<script src="/appru/js/vendor/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
	<script src="/appru/js/easing.min.js"></script>
	<script src="/appru/js/hoverIntent.js"></script>
	<script src="/appru/js/superfish.min.js"></script>
	<script src="/appru/js/jquery.ajaxchimp.min.js"></script>
	<script src="/appru/js/jquery.magnific-popup.min.js"></script>
	<script src="/appru/js/owl.carousel.min.js"></script>
	<script src="/appru/js/owl-carousel-thumb.min.js"></script>
	<script src="/appru/js/hexagons.min.js"></script>
	<script src="/appru/js/jquery.nice-select.min.js"></script>
	<script src="/appru/js/waypoints.min.js"></script>
	<script src="/appru/js/mail-script.js"></script>
	<script src="/appru/js/main.js"></script>
    @stack('script')
</body>

</html>