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
								<img class="img-fluid" src="/appru/img/artikel-1.jpg" alt="">
							</div>
							<a class="posts-title" href="single">
								<h3>Training Workshop Hidrologi untuk Pengelola Lahan Basah Suaka Margasatwa Rawa Singkil BKSDA Aceh di TN Baluran</h3>
							</a>
							<p class="excert">
							Pemerintah Amerika Serikat melaui The Department of the Interior’s International Technical Assistance Program (DOI-ITAP) telah membangun kerjasama dengan...
							</p>
							<a href="single" class="white_bg_btn">View More</a>
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
								<img class="img-fluid" src="/appru/img/artikel-6.jpg" alt="">
							</div>
							<a class="posts-title" href="single">
								<h3>Pemeliharaan Jalur Wisata Pengamatan Satwa dan Tumbuhan di Sungai Koran</h3>
							</a>
							<p class="excert">
							Destinasi wisata Sungai Koran yang berada di Resort Baluran Hulu SPTN Wilayah I Palangka Raya Taman Nasional Baluran memiliki beberapa atraksi wisata antara lain..
							</p>
							<a href="single" class="white_bg_btn">View More</a>
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
								<img class="img-fluid" src="/appru/img/artikel-3.jpg" alt="">
							</div>
							<a class="posts-title" href="single">
								<h3>Aksi Sapta Pesona di Dermaga Kereng Bangkirai oleh Dinas Kebudayaan dan Pariwisata Provinsi Kalteng</h3>
							</a>
							<p class="excert">
							Pada tanggal 26 Juli 2018, di dermaga Kereng Bangkirai yang merupakan pintu utama memasuki kawasan TN Baluran telah dilaksanakan Aksi Sapta Pesona...
							</p>
							<a href="single" class="white_bg_btn">View More</a>
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
								<img class="img-fluid" src="/appru/img/artikel-4.jpg" alt="">
							</div>
							<a class="posts-title" href="single">
								<h3>Kunjungan Tim Sosialisasi Proyek ke Taman Nasional Baluran</h3>
							</a>
							<p class="excert">
							Pada tanggal 30 Juli 2018, Balai TN Baluran berkesempatan menerima kunjungan dari Tim Sosialisasi Proyek. “Improving Community Fire Management and Peatland Restoration in Indonesia”...
							</p>
							<a href="single" class="white_bg_btn">View More</a>
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
							<img class="gambar"src="{{asset('appru')}}/img/taman-nasional-situbundo-jatim.png" alt="">
							<a href="#">
								<h4>Taman Nasional Baluran Situbondo Jawa Timur</h4>
							</a>
							<p>
								Tempat Wisata
							</p>
							<ul class="social-links">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-github"></i></a></li>
								<li><a href="#"><i class="fa fa-youtube"></i></a></li>
							</ul>
							<p>
							Taman nasional adalah suatu kawasan pelestarian alam yang telah ditetapkan oleh pemerintah dan tentunya memiliki ekosistem asli. Dikelola dengan sistem zonasi yang dimanfaatkan untuk tujuan penelitian, ilmu pengetahuan, pendidikan, menunjang budidaya, pariwisata, dan rekreasi.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

@endsection