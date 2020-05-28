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
							<h3 class="mt-20 mb-20">Taman Nasional Meru Betiri</h3>
							<p class="excert">
                            Taman Nasional Meru Betiri merupakan kawasan pelestarian alam yang mempunyai ekosistem asli dikelola dengan sistem zonasi yang dimanfaatkan untuk tujuan penelitian, ilmu pengetahuan, pendidikan, menunjang budidaya, pariwisata dan rekreasi

                            
							</p>
							<p>
                            Pengelolan TNMB dilaksanakan berdasarkan  prinsip konservasi sumberdaya alam hayati dan ekosistemnya yang tertuang dalam UU Nomor 5 th 1990 tentang KSDAHE dan UU No 41 th 1999 tentang Kehutanan melalui  tiga P yaitu :

                            </p>
                            
							<div class="ordered-list">
								<li><span>Perlindungan sistem penyangga kehidupan</span></li>
								<li><span>Pengawetan  keanekaragaman jenis tumbuhan dan satwa beserta ekosistemnya</span></li>
								<li><span>Pemanfaatan secara lestari sumberdaya alam hayati dan ekosistemnnya.</span>
								</li>
                            </div>
						</div>
						<div class="col-lg-12">
							<div class="row mt-30 mb-30">
								<div class="col-lg-12 mt-30">
									<p><b>Letak Geografis :  113037’23” - 113058’11” BT & 8020’31” - 8035’09” LS</b></p>
									</p>
									<div class="unordered-list">
										<ul>
										<li><b>Sebelah Utara</b></li>
										<p>Berbatasan dengan kawasan PT. Perkebunan Treblasala dan Perum Perhutani RPH Curahtakir</p>
										<li><b>Sebelah Timur</b></li>
										<p>Berbatasan dengan Desa Sarongan dan kawasan PTPN XII Sumberjambe</p>
										<li><b>Sebelah Selatan</b></li>
										<p>Berbatasan dengan Samudera Indonesia</p>
										<li><b>Sebelah Barat</b></li>
										<p>Berbatasan dengan Desa Curahnongko, Desa Andongrejo,  Desa Sanenrejo, kawasan PTPN XII Kalisanen, PTPN XII Kotta Blater, dan Perum Perhutani RPH Sabrang</p>
										</ul>
									</div>
								</div>
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
	</section>
	<!-- End post-content Area -->

@endsection