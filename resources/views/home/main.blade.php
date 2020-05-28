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
				background: rgba(26, 23, 23, 0.9); 
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
					<a href="lokasi" class="title">
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
						<span class="lnr lnr-apartment"></span>
						<h3>Akomodasi</h3>
					</a>
					<p>
						Usage of the Internet is becoming more common due to rapid advancement of technology and power.
					</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-12">
				<div class="single-feature">
					<a href="kalender" class="title">
						<span class="lnr lnr-calendar-full"></span>
						<h3>Kalender Event</h3>
					</a>
					<p>
						Usage of the Internet is becoming more common due to rapid advancement of technology and power.
					</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-12">
				<div class="single-feature">
					<a href="galeri" class="title">
						<span class="lnr lnr-camera"></span>
						<h3>Galeri</h3>
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
							<a class="posts-title" href="blog-single.html">
								<div class="feature-img">
									<img class="img-fluid" src="/appru/img/alam-1.jpg" alt="">
								</div>
									<h3>Fenomena Alam Semasa Covid, dari Dentum Misterius ke Asteroid</h3>
								</a>
								<p class="tanggal">Tanggal</p> <p class="dmy">22 Oktober 2020</p>
								<p class="excert">
								Semasa pandemi Covid-19 masyarakat di penjuru bumi mengalami berbagai fenomena alam. Sebagian sudah diprediksi dan bisa dijelaskan secara ilmiah, namun ada di antaranya yang misterius sampai saat ini.
								</p>
								
						</div>
					</div>
					<div class="col-sm-4">
						<div class="single-post">
							<a class="posts-title" href="blog-single.html">
								<div class="feature-img">
									<img class="img-fluid" src="/appru/img/alam-2.jpg" alt="">
								</div>
									<h3>Perubahan Bumi dan Bencana Alam Akibat Matahari Lockdown</h3>
								</a>
								<p class="tanggal">Tanggal</p> <p class="dmy">22 Oktober 2020</p>
								<p class="excert">
								Matahari yang sedang dalam fase lockdown pada saat ini diprediksi bisa memicu fenomena alam di bumi. 
								</p>
								
						</div>
					</div>
					<div class="col-sm-4">
						<div class="single-post">
							<a class="posts-title" href="blog-single.html">
								<div class="feature-img">
									<img class="img-fluid" src="/appru/img/alam-3.jpg" alt="">
								</div>
									<h3>6 Fenomena Alam Menjelang dan Saat Ramadan 2020</h3>
								</a>
								<p class="tanggal">Tanggal</p> <p class="dmy">22 Oktober 2020</p>
								<p class="excert">
								Fenomena alam tahun ini bisa dibilang cukup beragam menjelang dan saat bulan Ramadan bagi umat Muslim di seluruh dunia.
								</p>
								
						</div>
					</div>
					<div class="col-sm-4">
						<div class="single-post">
							<a class="posts-title" href="blog-single.html">
								<div class="feature-img">
									<img class="img-fluid" src="/appru/img/alam-4.jpg" alt="">
								</div>
									<h3>Ratusan Rumah di Serdang Bedagai Rusak Diterjang Angin Puting Beliung</h3>
								</a>
								<p class="tanggal">Tanggal</p> <p class="dmy">22 Oktober 2020</p>
								<p class="excert">
								Tiga wilayah kecamatan di Kabupaten Serdang Bedagai (Sergai), Sumatera Utara, diterjang angin puting beliung.
								</p>
								
						</div>
					</div>
					<div class="col-sm-4">
						<div class="single-post">
							<a class="posts-title" href="blog-single.html">
								<div class="feature-img">
									<img class="img-fluid" src="/appru/img/alam-5.jpg" alt="">
								</div>
									<h3>Matahari yang sedang dalam fase lockdown pada saat ini diprediksi bisa memicu fenomena alam di bumi. </h3>
								</a>
								<p class="tanggal">Tanggal</p> <p class="dmy">22 Oktober 2020</p>
								<p class="excert">
								Matahari yang sedang dalam fase lockdown pada saat ini diprediksi bisa memicu fenomena alam di bumi.
								</p>
								
						</div>
					</div>
					<div class="col-sm-4">
						<div class="single-post">
							<a class="posts-title" href="blog-single.html">
								<div class="feature-img">
									<img class="img-fluid" src="/appru/img/alam-6.jpg" alt="">
								</div>
									<h3>Penyebab Tanah Longsor dan Cara Menghadapinya</h3>
								</a>
								<p class="tanggal">Tanggal</p> <p class="dmy">22 Oktober 2020</p>
								<p class="excert">
								Longsor biasanya terjadi begitu cepat sehingga evakuasi sulit dilakukan.
								</p>
								
						</div>
					</div>
				</div>
				<!-- Charlie -->
				<!-- <div class="col-lg-4 sidebar-widgets">
					<div class="widget-wrap">
						<div class="single-sidebar-widget search-widget">
							<form class="search-form" action="#">
								<input placeholder="Search Posts" name="search" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Posts'">
								<button type="submit"><i class="fa fa-search"></i></button>
							</form>
						</div>
						<div class="single-sidebar-widget user-info-widget">
							<img src="/appru/img/blog/user-info.png" alt="">
							<a href="#">
								<h4>Charlie Barber</h4>
							</a>
							<p>
								Senior blog writer
							</p>
							<ul class="social-links">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-github"></i></a></li>
								<li><a href="#"><i class="fa fa-behance"></i></a></li>
							</ul>
							<p>
								Boot camps have its supporters andit sdetractors. Some people do not understand why you should have to spend
								money on boot
								camp when you can get. Boot camps have itssuppor ters andits detractors.
							</p>
						</div>
						<div class="single-sidebar-widget popular-post-widget">
							<h4 class="popular-title">Popular Posts</h4>
							<div class="popular-post-list">
								<div class="single-post-list d-flex flex-row align-items-center">
									<div class="thumb">
										<img class="img-fluid" src="/appru/img/blog/pp1.jpg" alt="">
									</div>
									<div class="details">
										<a href="blog-single.html">
											<h6>Space The Final Frontier</h6>
										</a>
										<p>02 Hours ago</p>
									</div>
								</div>
								<div class="single-post-list d-flex flex-row align-items-center">
									<div class="thumb">
										<img class="img-fluid" src="/appru/img/blog/pp2.jpg" alt="">
									</div>
									<div class="details">
										<a href="blog-single.html">
											<h6>The Amazing Hubble</h6>
										</a>
										<p>02 Hours ago</p>
									</div>
								</div>
								<div class="single-post-list d-flex flex-row align-items-center">
									<div class="thumb">
										<img class="img-fluid" src="/appru/img/blog/pp3.jpg" alt="">
									</div>
									<div class="details">
										<a href="blog-single.html">
											<h6>Astronomy Or Astrology</h6>
										</a>
										<p>02 Hours ago</p>
									</div>
								</div>
								<div class="single-post-list d-flex flex-row align-items-center">
									<div class="thumb">
										<img class="img-fluid" src="/appru/img/blog/pp4.jpg" alt="">
									</div>
									<div class="details">
										<a href="blog-single.html">
											<h6>Asteroids telescope</h6>
										</a>
										<p>02 Hours ago</p>
									</div>
								</div>
							</div>
						</div>
						<div class="single-sidebar-widget ads-widget">
							<a href="#"><img class="img-fluid" src="/appru/img/blog/ads-banner.jpg" alt=""></a>
						</div>
						<div class="single-sidebar-widget post-category-widget">
							<h4 class="category-title">Post Catgories</h4>
							<ul class="cat-list">
								<li>
									<a href="#" class="d-flex justify-content-between">
										<p>Technology</p>
										<p>37</p>
									</a>
								</li>
								<li>
									<a href="#" class="d-flex justify-content-between">
										<p>Lifestyle</p>
										<p>24</p>
									</a>
								</li>
								<li>
									<a href="#" class="d-flex justify-content-between">
										<p>Fashion</p>
										<p>59</p>
									</a>
								</li>
								<li>
									<a href="#" class="d-flex justify-content-between">
										<p>Art</p>
										<p>29</p>
									</a>
								</li>
								<li>
									<a href="#" class="d-flex justify-content-between">
										<p>Food</p>
										<p>15</p>
									</a>
								</li>
								<li>
									<a href="#" class="d-flex justify-content-between">
										<p>Architecture</p>
										<p>09</p>
									</a>
								</li>
								<li>
									<a href="#" class="d-flex justify-content-between">
										<p>Adventure</p>
										<p>44</p>
									</a>
								</li>
							</ul>
						</div>
						<div class="single-sidebar-widget newsletter-widget">
							<h4 class="newsletter-title">Newsletter</h4>
							<p>
								Here, I focus on a range of items and features that we use in life without giving them a second thought.
							</p>
							<div class="form-group d-flex flex-row">
								<div class="col-autos">
									<div class="input-group">
										<div class="input-group-prepend">
											<div class="input-group-text"><i class="fa fa-envelope" aria-hidden="true"></i>
											</div>
										</div>
										<input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Enter email" onfocus="this.placeholder = ''"
										 onblur="this.placeholder = 'Enter email'">
									</div>
								</div>
								<a href="#" class="bbtns">Subcribe</a>
							</div>
							<p class="text-bottom">
								You can unsubscribe at any time
							</p>
						</div>
						<div class="single-sidebar-widget tag-cloud-widget">
							<h4 class="tagcloud-title">Tag Clouds</h4>
							<ul>
								<li><a href="#">Technology</a></li>
								<li><a href="#">Fashion</a></li>
								<li><a href="#">Architecture</a></li>
								<li><a href="#">Fashion</a></li>
								<li><a href="#">Food</a></li>
								<li><a href="#">Technology</a></li>
								<li><a href="#">Lifestyle</a></li>
								<li><a href="#">Art</a></li>
								<li><a href="#">Adventure</a></li>
								<li><a href="#">Food</a></li>
								<li><a href="#">Lifestyle</a></li>
								<li><a href="#">Adventure</a></li>
							</ul>
						</div>
					</div>
				</div> -->
			</div>
		</div>
</section>
<!-- End post Area -->

<!-- Start about-video Area -->

<section class="about-area">
	<div class="container">
		<div class="row">
			<div class="section-post">
				<div class="round"></div><a href="terkini"><h1 class="title-post"> Youtube </h1></a> <hr class="line">
			</div>
				<div class="posts-list row">
					<div class="col-sm-4">
						<div class="single-post">
							<iframe class="latestVideoEmbed" vnum='0' cid="UCBJycsmduvYEL83R_U4JriQ" width="300" height="340" frameborder="0" allowfullscreen></iframe>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="single-post">
							<iframe class="latestVideoEmbed" vnum='1' cid="UCBJycsmduvYEL83R_U4JriQ" width="300" height="340" frameborder="0" allowfullscreen></iframe>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="single-post">
							<iframe class="latestVideoEmbed" vnum='2' cid="UCBJycsmduvYEL83R_U4JriQ" width="300" height="340" frameborder="0" allowfullscreen></iframe>
						</div>
						</div>
					<div class="col-sm-4">
						<div class="single-post">
							<iframe class="latestVideoEmbed" vnum='3' cid="UCBJycsmduvYEL83R_U4JriQ" width="300" height="340" frameborder="0" allowfullscreen></iframe>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="single-post">
							<iframe class="latestVideoEmbed" vnum='4' cid="UCBJycsmduvYEL83R_U4JriQ" width="300" height="340" frameborder="0" allowfullscreen></iframe>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="single-post">
							<iframe class="latestVideoEmbed" vnum='5' cid="UCBJycsmduvYEL83R_U4JriQ" width="300" height="340" frameborder="0" allowfullscreen></iframe>
						</div>
					</div>
				</div>
			</div>
		</div>
</section>

<!-- End about-video Area -->

<!-- Start Testimonials Area -->
<!-- <section class="testimonials-area section-gap-top">
	<div class="container">
		<div class="testi-slider owl-carousel" data-slider-id="1">
			<div class="item">
				<div class="testi-item">
					<img src="/appru/img/quote.png" alt="">
					<h4>Fanny Spencer</h4>
					<ul class="list">
						<li><a href="#"><i class="fa fa-star"></i></a></li>
						<li><a href="#"><i class="fa fa-star"></i></a></li>
						<li><a href="#"><i class="fa fa-star"></i></a></li>
						<li><a href="#"><i class="fa fa-star"></i></a></li>
						<li><a href="#"><i class="fa fa-star"></i></a></li>
					</ul>
					<div class="wow fadeIn" data-wow-duration="1s">
						<p>
							As conscious traveling Paup ers we must always be oncerned about our dear Mother Earth. If you think about it,
							you travel
							across her face <br> and She is the host to your journey.
						</p>
					</div>
				</div>
			</div>
			<div class="item">
				<div class="testi-item">
					<img src="/appru/img/quote.png" alt="">
					<h4>Fanny Spencer</h4>
					<ul class="list">
						<li><a href="#"><i class="fa fa-star"></i></a></li>
						<li><a href="#"><i class="fa fa-star"></i></a></li>
						<li><a href="#"><i class="fa fa-star"></i></a></li>
						<li><a href="#"><i class="fa fa-star"></i></a></li>
						<li><a href="#"><i class="fa fa-star"></i></a></li>
					</ul>
					<div class="wow fadeIn" data-wow-duration="1s">
						<p>
							As conscious traveling Paup ers we must always be oncerned about our dear Mother Earth. If you think about it,
							you travel
							across her face <br> and She is the host to your journey.
						</p>
					</div>
				</div>
			</div>
			<div class="item">
				<div class="testi-item">
					<img src="/appru/img/quote.png" alt="">
					<h4>Fanny Spencer</h4>
					<ul class="list">
						<li><a href="#"><i class="fa fa-star"></i></a></li>
						<li><a href="#"><i class="fa fa-star"></i></a></li>
						<li><a href="#"><i class="fa fa-star"></i></a></li>
						<li><a href="#"><i class="fa fa-star"></i></a></li>
						<li><a href="#"><i class="fa fa-star"></i></a></li>
					</ul>
					<div class="wow fadeIn" data-wow-duration="1s">
						<p>
							As conscious traveling Paup ers we must always be oncerned about our dear Mother Earth. If you think about it,
							you travel
							across her face <br> and She is the host to your journey.
						</p>
					</div>
				</div>
			</div>
			<div class="item">
				<div class="testi-item">
					<img src="/appru/img/quote.png" alt="">
					<h4>Fanny Spencer</h4>
					<ul class="list">
						<li><a href="#"><i class="fa fa-star"></i></a></li>
						<li><a href="#"><i class="fa fa-star"></i></a></li>
						<li><a href="#"><i class="fa fa-star"></i></a></li>
						<li><a href="#"><i class="fa fa-star"></i></a></li>
						<li><a href="#"><i class="fa fa-star"></i></a></li>
					</ul>
					<div class="wow fadeIn" data-wow-duration="1s">
						<p>
							As conscious traveling Paup ers we must always be oncerned about our dear Mother Earth. If you think about it,
							you travel
							across her face <br> and She is the host to your journey.
						</p>
					</div>
				</div>
			</div>
		</div>
		<div class="owl-thumbs d-flex justify-content-center" data-slider-id="1">
			<div class="owl-thumb-item">
				<div>
					<img class="img-fluid" src="img/testimonial/t1.jpg" alt="">
				</div>
				<div class="overlay overlay-grad"></div>
			</div>
			<div class="owl-thumb-item">
				<div>
					<img class="img-fluid" src="img/testimonial/t2.jpg" alt="">
				</div>
				<div class="overlay overlay-grad"></div>
			</div>
			<div class="owl-thumb-item">
				<div>
					<img class="img-fluid" src="img/testimonial/t3.jpg" alt="">
				</div>
				<div class="overlay overlay-grad"></div>
			</div>
			<div class="owl-thumb-item">
				<div>
					<img class="img-fluid" src="img/testimonial/t4.jpg" alt="">
				</div>
				<div class="overlay overlay-grad"></div>
			</div>
		</div>
	</div>
</section> -->
<!-- End Testimonials Area -->

<!-- Start Screenshot Area -->
<!-- <section class="screenshot-area section-gap-top">
	<div class="container">
		<div class="row d-flex justify-content-center">
			<div class="col-lg-6">
				<div class="section-title text-center">
					<h2>Featured Screens</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
						magna aliqua.
					</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="owl-carousel owl-screenshot">
				<div class="single-screenshot">
					<img class="img-fluid" src="img/screenshots/s1.jpg" alt="">
				</div>
				<div class="single-screenshot">
					<img class="img-fluid" src="img/screenshots/s2.jpg" alt="">
				</div>
				<div class="single-screenshot">
					<img class="img-fluid" src="img/screenshots/s3.jpg" alt="">
				</div>
				<div class="single-screenshot">
					<img class="img-fluid" src="img/screenshots/s4.jpg" alt="">
				</div>
			</div>
		</div>
	</div>
</section> -->
<!-- End Screenshot Area -->

<!-- Start Pricing Area -->
<!-- <section class="pricing-area">
	<div class="container">
		<div class="row d-flex justify-content-center">
			<div class="col-lg-6">
				<div class="section-title text-center">
					<h2>Suitable Pricing Plans</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
						magna aliqua.
					</p>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-4 col-md-6">
				<div class="single-price">
					<div class="top-sec d-flex justify-content-between">
						<div class="top-left">
							<h4>Standard</h4>
							<p>For the <br>individuals</p>
						</div>
						<div class="top-right">
							<h1>£199</h1>
						</div>
					</div>
					<div class="end-sec">
						<ul>
							<li>2.5 GB Free Photos</li>
							<li>Secure Online Transfer Indeed</li>
							<li>Unlimited Styles for interface</li>
							<li>Reliable Customer Service</li>
							<li>Manual Backup Provided</li>
						</ul>
						<button class="primary-btn price-btn mt-20">Purchase Plan</button>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="single-price">
					<div class="top-sec d-flex justify-content-between">
						<div class="top-left">
							<h4>Business</h4>
							<p>For <br>small Company</p>
						</div>
						<div class="top-right">
							<h1>£399</h1>
						</div>
					</div>
					<div class="end-sec">
						<ul>
							<li>2.5 GB Free Photos</li>
							<li>Secure Online Transfer Indeed</li>
							<li>Unlimited Styles for interface</li>
							<li>Reliable Customer Service</li>
							<li>Manual Backup Provided</li>
						</ul>
						<button class="primary-btn price-btn mt-20">Purchase Plan</button>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="single-price">
					<div class="top-sec d-flex justify-content-between">
						<div class="top-left">
							<h4>Ultimate</h4>
							<p>For <br>large Company</p>
						</div>
						<div class="top-right">
							<h1>£499</h1>
						</div>
					</div>
					<div class="end-sec">
						<ul>
							<li>2.5 GB Free Photos</li>
							<li>Secure Online Transfer Indeed</li>
							<li>Unlimited Styles for interface</li>
							<li>Reliable Customer Service</li>
							<li>Manual Backup Provided</li>
						</ul>
						<button class="primary-btn price-btn mt-20">Purchase Plan</button>
					</div>
				</div>
			</div>

		</div>
	</div>
</section> -->
<!-- End Pricing Area -->
@endsection