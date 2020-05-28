@extends('template.app')
@push('css')
	<style>
			header {
				background: #000; 
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
			
			.cover{
				position: relative;
				overflow: hidden;
				background: rgba(0,0,0,0.05);
            }
            
            .section-header{
                margin: 150px 650px 50px 550px;
            }

            .section-header h2{
                text-decoration: underline;
                text-decoration-color: #1a8200;
            }

            .gambar{
                width: 200px;
                height:200px;
                border-radius: 100%;
			}
			
	</style>
@endpush
@push('script')
@endpush
@section('konten')

<section class="post-content-area">
<div class="section-header">
		<a href="terkini">
			<h2>BERITA TERKINI</h2>
		</a>
		</div>
	</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-8 posts-list">
					<div class="single-post row">
						<div class="col-lg-3  col-md-3 meta-details">
							<div class="user-details row">
								<p class="user-name col-lg-12 col-md-12 col-6"><a href="#">Admin</a> <span class="lnr lnr-user"></span></p>
								<p class="date col-lg-12 col-md-12 col-6"><a href="#">12 Dec, 2017</a> <span class="lnr lnr-calendar-full"></span></p>
								<p class="view col-lg-12 col-md-12 col-6"><a href="#">1.2M Views</a> <span class="lnr lnr-eye"></span></p>
							</div>
						</div>
						<div class="col-lg-9 col-md-9 ">
							<div class="feature-img">
								<img class="img-fluid" src="/appru/img/blog/feature-img1.jpg" alt="">
							</div>
							<a class="posts-title" href="blog-single.html">
								<h3>Astronomy Binoculars A Great Alternative</h3>
							</a>
							<p class="excert">
								MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to
								spend money
								on boot camp when you can get the MCSE study materials yourself at a fraction.
							</p>
							<a href="blog-single.html" class="white_bg_btn">View More</a>
						</div>
					</div>
					<div class="single-post row">
                    <div class="col-lg-3  col-md-3 meta-details">
							<div class="user-details row">
								<p class="user-name col-lg-12 col-md-12 col-6"><a href="#">Admin</a> <span class="lnr lnr-user"></span></p>
								<p class="date col-lg-12 col-md-12 col-6"><a href="#">12 Dec, 2017</a> <span class="lnr lnr-calendar-full"></span></p>
								<p class="view col-lg-12 col-md-12 col-6"><a href="#">1.2M Views</a> <span class="lnr lnr-eye"></span></p>
							</div>
						</div>
						<div class="col-lg-9 col-md-9 ">
							<div class="feature-img">
								<img class="img-fluid" src="/appru/img/blog/feature-img2.jpg" alt="">
							</div>
							<a class="posts-title" href="blog-single.html">
								<h3>The Basics Of Buying A Telescope</h3>
							</a>
							<p class="excert">
								MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to
								spend money
								on boot camp when you can get the MCSE study materials yourself at a fraction.
							</p>
							<a href="blog-single.html" class="white_bg_btn">View More</a>
						</div>
					</div>
					<div class="single-post row">
                    <div class="col-lg-3  col-md-3 meta-details">
							<div class="user-details row">
								<p class="user-name col-lg-12 col-md-12 col-6"><a href="#">Admin</a> <span class="lnr lnr-user"></span></p>
								<p class="date col-lg-12 col-md-12 col-6"><a href="#">12 Dec, 2017</a> <span class="lnr lnr-calendar-full"></span></p>
								<p class="view col-lg-12 col-md-12 col-6"><a href="#">1.2M Views</a> <span class="lnr lnr-eye"></span></p>
							</div>
						</div>
						<div class="col-lg-9 col-md-9">
							<div class="feature-img">
								<img class="img-fluid" src="/appru/img/blog/feature-img3.jpg" alt="">
							</div>
							<a class="posts-title" href="blog-single.html">
								<h3>The Glossary Of Telescopes</h3>
							</a>
							<p class="excert">
								MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to
								spend money
								on boot camp when you can get the MCSE study materials yourself at a fraction.
							</p>
							<a href="blog-single.html" class="white_bg_btn">View More</a>
						</div>
					</div>
					<div class="single-post row">
                    <div class="col-lg-3  col-md-3 meta-details">
							<div class="user-details row">
								<p class="user-name col-lg-12 col-md-12 col-6"><a href="#">Admin</a> <span class="lnr lnr-user"></span></p>
								<p class="date col-lg-12 col-md-12 col-6"><a href="#">12 Dec, 2017</a> <span class="lnr lnr-calendar-full"></span></p>
								<p class="view col-lg-12 col-md-12 col-6"><a href="#">1.2M Views</a> <span class="lnr lnr-eye"></span></p>
							</div>
						</div>
						<div class="col-lg-9 col-md-9">
							<div class="feature-img">
								<img class="img-fluid" src="/appru/img/blog/feature-img4.jpg" alt="">
							</div>
							<a class="posts-title" href="blog-single.html">
								<h3>The Night Sky</h3>
							</a>
							<p class="excert">
								MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to
								spend money
								on boot camp when you can get the MCSE study materials yourself at a fraction.
							</p>
							<a href="blog-single.html" class="white_bg_btn">View More</a>
						</div>
					</div>
					<nav class="blog-pagination justify-content-center d-flex">
						<ul class="pagination">
							<li class="page-item">
								<a href="#" class="page-link" aria-label="Previous">
									<span aria-hidden="true">
										<span class="lnr lnr-chevron-left"></span>
									</span>
								</a>
							</li>
							<li class="page-item active"><a href="#" class="page-link">01</a></li>
							<li class="page-item"><a href="#" class="page-link">02</a></li>
							<li class="page-item"><a href="#" class="page-link">03</a></li>
							<li class="page-item"><a href="#" class="page-link">...</a></li>
							<li class="page-item"><a href="#" class="page-link">09</a></li>
							<li class="page-item">
								<a href="#" class="page-link" aria-label="Next">
									<span aria-hidden="true">
										<span class="lnr lnr-chevron-right"></span>
									</span>
								</a>
							</li>
						</ul>
					</nav>
				</div>
				<div class="col-lg-4 sidebar-widgets">
					<div class="widget-wrap">
						<div class="single-sidebar-widget search-widget">
							<form class="search-form" action="#">
								<input placeholder="Search Posts" name="search" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Posts'">
								<button type="submit"><i class="fa fa-search"></i></button>
							</form>
						</div>
						<div class="single-sidebar-widget user-info-widget">
							<img class="gambar"src="/appru/img/blog/user-info.jpg" alt="">
							<a href="#">
								<h4>Taman Nasional</h4>
							</a>
							<p>
								Tempat Wisata
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
							<h4 class="popular-title">Pengumuman</h4>
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
					</div>
				</div>
			</div>
		</div>
	</section>

@endsection