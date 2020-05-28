@extends('template.app')
@push('css')
	<style>
			header {
				background: rgba(26, 23, 23, 0.9); 
			}

			.header-scrolled .nav-menu a {
				color: #100303;
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

	<!-- start banner Area -->
	<section class="banner-area">
		<div class="mt-35">
		</div>
		</div>
	</section>
	<!-- End banner Area -->

	<!-- Start post-content Area -->
	<section class="post-content-area single-post-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 posts-list">
					<div class="single-post row">
						<div class="col-lg-12">
							<div class="feature-img">
								<img class="img-fluid" src="appru/img/blog/feature-img1.jpg" alt="">
							</div>
                        </div>
                        <div class="row mt-30 mb-30">
							<h3 class="mt-20 mb-20">Sejarah Taman Nasional</h3>
						</div>
						<div class="col-lg-12">
							<div class="unordered-list">
								<ul>
								<li><b>Tahun 1931 dan 1938 :</b></li>
								<p>Berstatus sebagai hutan lindung yang penetapannya berdasarkan Besluit van den Directur van Landbouw Neverheiden Handel yaitu pada tanggal 29 Juli 1931 Nomor: 7347/B serta Besluit Directur van Economiche Zaken tanggal 28 April 1938 Nomor : 5751.</p>
								<li><b>Tahun 1972 :</b></li>
								<p>Ditetapkan sebagai Suaka Margasatwa seluas 50.000 Ha berdasarkan Surat Keputusan Menteri Pertanian Nomor : 276/Kpts/Um/ 6/1972 tanggal 6 Juni 1972 dengan tujuan utama perlindungan terhadap jenis Harimau Jawa (Panthera tigris sondaica).</p>
								<li><b>Tahun 1982 :</b></li>
								<p>Berdasarkan Surat Keputusan Menteri Pertanian Nomor : 529/Kpts/Um/6/1982 tanggal 21 Juni 1982 kawasan Suaka Margasatwa Meru Betiri diperluas menjadi 58.000 Ha. (Perkebunan Bandealit dan Sukamade Baru seluas 2.155 Ha, serta kawasan hutan lindung sebelah Utara dan kawasan perairan laut sepanjang Pantai Selatan seluas 845 Ha). Surat pernyataan Menteri Pertanian Nomor : 736/Mentan/X/1982 tanggal 14 Oktober 1982 Suaka Margasatwa Meru Betiri dinyatakan sebagai Calon Taman Nasional.</p>
								<li><b>Tahun 1997 :</b></li>
								<p>Penunjukan Taman Nasional Meru Betiri (TNMB) berdasarkan Surat Keputusan Menteri Kehutanan Nomor : 277/Kpts-VI/1997 tanggal 23 Mei 1997 seluas 58.000 Ha (Kabupaten Jember seluas 37.585 Ha dan Kabupaten Banyuwangi seluas 20.415 Ha).</p>
								<li><b>Tahun 1999 :</b></li>
								<p>Zonasi TNMB seluas 58.000 Ha berdasarkan SK Dirjen PKA No. 185/Kpts/DJ-V/1999 tanggal 13 Desember 1999.</p>
								<li><b>Tahun 2014 :</b></li>
								<p>Penetapan kawasan hutan TNMB seluas 52.626,04 Ha di Kab. Jember dan Kab. Banyuwangi, Propinsi Jawa Timur berdasarkan SK Menteri Kehutanan Nomor : SK.3629/Menhut-VII/KUH/2014 Tanggal 6 Mei 2014.</p>
								<li><b>Tahun 2016 :</b></li>
								<p>Pengesahan zona pengelolaan TNMB seluas 52.626,04 Ha berdasarkan SK Dirjen KSDAE Nomor : SK.382/KSDAE/SET/KSA.0/9/2016 tanggal 30 September 2016.</p>
								</ul>
							</div>
						</div>
					</div>
					<div class="navigation-area">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
								<div class="thumb">
									<a href="#"><img class="img-fluid" src="appru/img/blog/prev.jpg" alt=""></a>
								</div>
								<div class="arrow">
									<a href="#"><span class="lnr text-white lnr-arrow-left"></span></a>
								</div>
								<div class="detials">
									<p>Prev Post</p>
									<a href="#">
										<h4>Space The Final Frontier</h4>
									</a>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
								<div class="detials">
									<p>Next Post</p>
									<a href="#">
										<h4>Telescopes 101</h4>
									</a>
								</div>
								<div class="arrow">
									<a href="#"><span class="lnr text-white lnr-arrow-right"></span></a>
								</div>
								<div class="thumb">
									<a href="#"><img class="img-fluid" src="appru/img/blog/next.jpg" alt=""></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 sidebar-widgets">
					<div class="widget-wrap">
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
	</section>x
	<!-- End post-content Area -->

@endsection