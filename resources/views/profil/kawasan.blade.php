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
							<h3 class="mt-20 mb-20">Taman Nasional Baluran Situbondo</h3>
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
								<div class="col-lg-12 mt-10">
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
				</div>
				<div class="col-lg-4 sidebar-widgets">
					<div class="widget-wrap">
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
	<!-- End post-content Area -->

@endsection