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
                        </div>
							<div class="col-lg-12">
								<div class="unordered-list">
									<ul>
										<div class="quotes">
										<li><b>VISI</b></li>
										<p>"MENJADIKAN TAMAN NASIONAL MERU BETIRI DENGAN BIODIVERSITY YANG TINGGI SEBAGAI PUSAT WISATA EDUKASI, YANG DIKELOLA SECARA KOLABORATIF, TERPADU, NYATA, MANTAB DAN BERWIBAWA."</p>
										<li><b>MISI</b></li>
										<p>MENJAGA KEUTUHAN KAWASAN DAN MEMULIHKAN EKOSISTEM YANG RUSAK
											MELINDUNGI DAN MENGAMANKAN POPULASI DAN HABITAT TUMBUHAN DAN SATWA LIAR BESERTAPOTENSI SDHAE LAINNYA
											MELAKUKAN INVENTARISASI DAN MONITORING POPULASI DAN HABITAT TUMBUHAN/SATWA BESERTA POTENSI SDHAE LAINNYA
											MEMBERIKAN PENYADARTAHUAN TENTANG PELESTARIAN TAMAN NASIONAL MERU BETIRI
											MENINGKATKAN PEMANFAATAN TAMAN NASIONAL MERU BETIRI BAGI KESEJAHTERAAN MASYARAKAT
											MEMPERKUAT KELEMBAGAAN TAMAN NASIONAL MERU BETIRI</p>
											<div class="order-list"></div>
										</div>
									</ul>
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