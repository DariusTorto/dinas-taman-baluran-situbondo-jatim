@extends('template.app')
@push('css')
	<style>
		.carousel-item {
			height: 60vh;
			min-height: 500px;
			background: no-repeat center center scroll;
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-size: cover;
			}

			header {
				background: transparent; 
			}

			.header-scrolled .nav-menu a {
				color: #100303;
			}

			 .single-post .feature-img img {
				width: 100%; }
			 .single-post .posts-title h3 {
				margin: 20px 0px; }
				 .single-post .excert {
				margin-bottom: 20px; }

			.posts-title h3 {
			-webkit-transition: all 0.3s ease 0s;
			-moz-transition: all 0.3s ease 0s;
			-o-transition: all 0.3s ease 0s;
			transition: all 0.3s ease 0s; }
			.posts-title h3:hover {
				color: #1a8200; }

			.section-header h2 {
			-webkit-transition: all 0.3s ease 0s;
			-moz-transition: all 0.3s ease 0s;
			-o-transition: all 0.3s ease 0s;
			transition: all 0.3s ease 0s; }
			.section-header h2:hover {
				color: #1a8200; }

			.title-post {
			-webkit-transition: all 0.3s ease 0s;
			-moz-transition: all 0.3s ease 0s;
			-o-transition: all 0.3s ease 0s;
			transition: all 0.3s ease 0s; }
			.title-post:hover {
				color: #1a8200; }

			.section-post{
				margin-bottom: 40px;
			}

			.img-fluid{
				width: 250px;
				height:300px;
			}
			.tanggal{
				color:white;
				display: inline-block;
				padding: 1px 20px 1px 20px;
				background-color: #1a8200;
			}
			 .dmy{
				position: absolute;
				display: inline-block;
				right: 140px;
			 }

			 .title-post{
				display:inline-block;
				margin-left: 20px;
				margin-top: 20px;
			 }

			 .line{
				position: absolute;
				display:inline-block;
				width: 860px;
				margin-left: 20px;
				margin-top: 40px;
			 }
			 .round{
				position: absolute;
				display: inline-block;
				border: 25px;
				background: #1a8200;
				padding: 5px;
				width: 1px;
				height: 80px;
				margin-right:80px;
			 }
	</style>
@endpush
@push('script')
<script>
	    // Video Youtube

		var reqURL = "https://api.rss2json.com/v1/api.json?rss_url=" + encodeURIComponent("https://www.youtube.com/feeds/videos.xml?channel_id=");

		function loadVideo(iframe) {
		$.getJSON(reqURL + iframe.getAttribute('cid'),
			function(data) {
			var videoNumber = (iframe.getAttribute('vnum') ? Number(iframe.getAttribute('vnum')) : 0);
			console.log(videoNumber);
			var link = data.items[videoNumber].link;
			id = link.substr(link.indexOf("=") + 1);
			iframe.setAttribute("src", "https://youtube.com/embed/" + id + "?controls=0");
			}
		);
		}

		var iframes = document.getElementsByClassName('latestVideoEmbed');
		for (var i = 0, len = iframes.length; i < len; i++) {
		loadVideo(iframes[i]);
		}
</script>
@endpush
@section('konten')

<!-- start banner Area -->
<section class="home-banner-area">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <!-- Slide One - Set the background image for this slide in the line below -->
      <!-- <div class="carousel-item active">
		  <img src="/appru/img/alam-7.jpg">
        <div class="carousel-caption d-none d-md-block">
          <h2 class="display-4">First Slide</h2>
          <p class="lead">This is a description for the first slide.</p>
        </div>
      </div> -->
      <div class="carousel-item active" style="background-image: url('https://images.unsplash.com/photo-1590184697825-e8b1d05e18ca?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1001&q=80')">
        <div class="carousel-caption d-none d-md-block">
          <h2 class="display-4">First Slide</h2>
          <p class="lead">This is a description for the first slide.</p>
        </div>
      </div>
      <!-- Slide Two - Set the background image for this slide in the line below -->
      <!-- <div class="carousel-item">
	  	<img src="/appru/img/alam-8.jpg">
        <div class="carousel-caption d-none d-md-block">
          <h2 class="display-4">Second Slide</h2>
          <p class="lead">This is a description for the second slide.</p>
        </div>
      </div> -->
      <div class="carousel-item" style="background-image: url('https://images.unsplash.com/photo-1590520694457-4a5308a424d9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80')">
        <div class="carousel-caption d-none d-md-block">
          <h2 class="display-4">Second Slide</h2>
          <p class="lead">This is a description for the second slide.</p>
        </div>
      </div>
      <!-- Slide Three - Set the background image for this slide in the line below -->
      <!-- <div class="carousel-item">
	  	<img src="/appru/img/alam-9.jpg">
        <div class="carousel-caption d-none d-md-block">
          <h2 class="display-4">Third Slide</h2>
          <p class="lead">This is a description for the third slide.</p>
        </div>
      </div> -->
      <div class="carousel-item" style="background-image: url('https://images.unsplash.com/photo-1587455046156-c3b92dae4586?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80')">
        <div class="carousel-caption d-none d-md-block">
          <h2 class="display-4">Third Slide</h2>
          <p class="lead">This is a description for the third slide.</p>
        </div>
	  </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
  </div>
</section>
<!-- End banner Area -->

<!-- Start feature Area -->
<section class="feature-area section-gap-top">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-12">
				<div class="single-feature">
					<a href="peta" class="title">
						<div class="radius">
							<span class="lnr lnr-map-marker"></span>
							</div>
						<h3>Peta & Akses Wisata</h3>
					</a>
					<p>
						Usage of the Internet is becoming more common due to rapid advancement of technology and power.
					</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-12">
				<div class="single-feature">
					<a href="akomodasi" class="title">
					<div class="radius">
						<span class="lnr lnr-apartment"></span>
						<h3>Akomodasi</h3>
					</div>
					</a>
					<p>
						Usage of the Internet is becoming more common due to rapid advancement of technology and power.
					</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-12">
				<div class="single-feature">
					<a href="galeri" class="title">
						<div class="radius">
							<span class="lnr lnr-camera"></span>
							<h3>Galeri</h3>
						</div>
					</a>
					<p>
						Usage of the Internet is becoming more common due to rapid advancement of technology and power.
					</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-12">
				<div class="single-feature">
					<a href="biaya" class="title">
					<div class="radius">
						<span class="lnr lnr-database"></span>
						<h3>Biaya</h3>
					</div>
					</a>
					<p>
						Usage of the Internet is becoming more common due to rapid advancement of technology and power.
					</p>
				</div>
			</div>
			
		</div>
	</div>
</section>
<!-- End feature Area -->

<!-- Start post Area -->
<section class="about-area">
	<div class="container">
		<div class="row">
			<div class="section-post">
				<div class="round"></div><a href="terkini"><h1 class="title-post"> Berita Terkini </h1></a> <hr class="line">
			</div>
				<div class="posts-list row">
					<div class="col-sm-4">
						<div class="single-post">
							<a class="posts-title" href="single">
								<div class="feature-img">
									<img class="img-fluid" src="/appru/img/artikel-1.jpg" alt="">
								</div>
									<h3>Training Workshop Hidrologi untuk Pengelola Lahan Basah Suaka Margasatwa Rawa Singkil BKSDA Aceh di TN Baluran</h3>
								</a>
								<p class="tanggal">Tanggal</p> <p class="dmy">22 Oktober 2020</p>
								<p class="excert">
									Pemerintah Amerika Serikat melaui The Department of the Interior’s International Technical Assistance Program (DOI-ITAP) telah membangun kerjasama dengan...
								</p>
								
						</div>
					</div>
					<div class="col-sm-4">
						<div class="single-post">
							<a class="posts-title" href="single">
								<div class="feature-img">
									<img class="img-fluid" src="/appru/img/artikel-3.jpg" alt="">
								</div>
									<h3>Pemeliharaan Jalur Wisata Pengamatan Satwa dan Tumbuhan di Sungai Koran</h3>
								</a>
								<p class="tanggal">Tanggal</p> <p class="dmy">22 Oktober 2020</p>
								<p class="excert">
								Destinasi wisata Sungai Koran yang berada di Resort Baluran Hulu SPTN Wilayah I Palangka Raya Taman Nasional Baluran memiliki beberapa atraksi wisata antara lain..
								</p>
								
						</div>
					</div>
					<div class="col-sm-4">
						<div class="single-post">
							<a class="posts-title" href="single">
								<div class="feature-img">
									<img class="img-fluid" src="/appru/img/artikel-4.jpg" alt="">
								</div>
									<h3>Aksi Sapta Pesona di Dermaga Kereng Bangkirai oleh Dinas Kebudayaan dan Pariwisata Provinsi Kalteng</h3>
								</a>
								<p class="tanggal">Tanggal</p> <p class="dmy">22 Oktober 2020</p>
								<p class="excert">
								Pada tanggal 26 Juli 2018, di dermaga Kereng Bangkirai yang merupakan pintu utama memasuki kawasan TN Baluran telah dilaksanakan Aksi Sapta Pesona...
								</p>
								
						</div>
					</div>
					<div class="col-sm-4">
						<div class="single-post">
							<a class="posts-title" href="single">
								<div class="feature-img">
									<img class="img-fluid" src="/appru/img/artikel-5.jpg" alt="">
								</div>
									<h3>Kunjungan Tim Sosialisasi Proyek ke Taman Nasional Baluran</h3>
								</a>
								<p class="tanggal">Tanggal</p> <p class="dmy">22 Oktober 2020</p>
								<p class="excert">
								Pada tanggal 30 Juli 2018, Balai TN Baluran berkesempatan menerima kunjungan dari Tim Sosialisasi Proyek. “Improving Community Fire Management and Peatland Restoration in Indonesia”...
								</p>
								
						</div>
					</div>
					<div class="col-sm-4">
						<div class="single-post">
							<a class="posts-title" href="single">
								<div class="feature-img">
									<img class="img-fluid" src="/appru/img/artikel-6.jpg" alt="">
								</div>
									<h3>Pemberdayaan Masyarakat, Upaya Pengelolaan TN Baluran Secara Kolaboratif</h3>
								</a>
								<p class="tanggal">Tanggal</p> <p class="dmy">22 Oktober 2020</p>
								<p class="excert">
								Sebagai upaya bersinergi dengan usaha pengembangan ekonomi masyarakat di sekitar Kawasan Konservasi, Pihak Balai Taman Nasional Baluran pada tanggal 21 Maret 2018 mengadakan kegiatan...
								</p>
								
						</div>
					</div>
					
					<div class="col-sm-4">
						<div class="single-post">
							<a class="posts-title" href="single">
								<div class="feature-img">
									<img class="img-fluid" src="/appru/img/artikel-2.jpg" alt="">
								</div>
									<h3>Pemeliharaan Jalur Pariwisata di Sungai KORAN bersama Masyarakat</h3>
								</a>
								<p class="tanggal">Tanggal</p> <p class="dmy">22 Oktober 2020</p>
								<p class="excert">
								Sungai Baluran bagian hulu dan Sungai Koran merupakan jalur transportasi wisata alam yang masuk ke wilayah kerja Resort Baluran Hulu, SPTN Wilayah I..
								</p>
								
						</div>
					</div>
				</div>
			</div>
		</div>
</section>
<!-- End post Area -->

<!-- Start about-video Area -->

<section class="about-area">
	<div class="container">
		<div class="row">
			<div class="section-post">
				<div class="round"></div><h1 class="title-post"> Youtube </h1><hr class="line">
			</div>
				<div class="posts-list row">
					<div class="col-sm-6">
						<div class="single-post">
							<iframe class="latestVideoEmbed" vnum='0' cid="UCnZ_B_Pi___coxOm6SLhnmg" width="500" height="340" frameborder="0" allowfullscreen></iframe>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="single-post">
							<iframe class="latestVideoEmbed" vnum='1' cid="UCnZ_B_Pi___coxOm6SLhnmg" width="500" height="340" frameborder="0" allowfullscreen></iframe>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="single-post">
							<iframe class="latestVideoEmbed" vnum='2' cid="UCnZ_B_Pi___coxOm6SLhnmg" width="500" height="340" frameborder="0" allowfullscreen></iframe>
						</div>
						</div>
					<div class="col-sm-6">
						<div class="single-post">
							<iframe class="latestVideoEmbed" vnum='3' cid="UCnZ_B_Pi___coxOm6SLhnmg" width="500" height="340" frameborder="0" allowfullscreen></iframe>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="single-post">
							<iframe class="latestVideoEmbed" vnum='4' cid="UCnZ_B_Pi___coxOm6SLhnmg" width="500" height="340" frameborder="0" allowfullscreen></iframe>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="single-post">
							<iframe class="latestVideoEmbed" vnum='5' cid="UCnZ_B_Pi___coxOm6SLhnmg" width="500" height="340" frameborder="0" allowfullscreen></iframe>
						</div>
					</div>
				</div>
			</div>
		</div>
</section>
@endsection