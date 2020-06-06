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
								<img class="img-fluids" src="appru/img/alam-11.jpg" alt="">
							</div>
                        </div>
                        <div class="row mt-30 mb-30">
							<h3 class="mt-20 mb-20">Pemanfaatan</h3>
							<p class="excert">
                            Pemanfaatan lestari SDAH&E TN Meru Betiri, yaitu pemanfaatan SDAH&E yang diarahkan pada upaya memelihara kelestarian eksistensi dan kelestarian fungsi SDAH&E TN Baluran Situbondo. Secara umum kegiatan pemanfaatan SDAH&E  dapat dilakukan melalui :                            
							</p>
							<div class="ordered-list mb-20">
								<li><span>Penelitian dan Pengembangan</span></li>
								<li><span>Ilmu Pengetahuan dan Pendidikan</span></li>
								<li><span>Pembuatan film /video klip</span></li>
								<li><span>Pembuatan foto komersial</span></li>
								<li><span>Ekspedisi</span></li>
								<li><span>Pengembangan dan Pemanfaatan Jasa Lingkungan</span></li>
								<li><span>Pariwisata alam, dll</span></li>
                            </div>
                            <p class="excert">Dalam kegiatan pemanfaatan tersebut harus dilakukan berdasarkan peraturan yang berlaku di Kawasan Konservasi dan umumnya yang berlaku di negara Indonesia. Berikut ini beberapa peraturan yang perlu di pedomani dalam  Konservasi SDAH &E :</p>
									</p>
									<div class="unordered-list">
										<ul>
										<li><p>Undang-undang nomor 5 tahun 1990 tentang Konservasi Sumber Daya Alam Hayati dan Ekosistemnya.</p></li>
										<li><p>Undang-undang nomor 24 tahun 1992 tentang Penataan Ruang.</p></li>
										<li><p>Undang-undang nomor 5 tahun 1994 tentang Pengesahan Konvensi Perserikatan Bangsa-bangsa mengenai Keanekaragaman Hayati.</p></li>
										<li><p>Undang-undang nomor 23 tahun 1997 tentang Pengelolaan Lingkungan Hidup.</p></li>
										<li><p>Undang-undang nomor 41 tahun 1999 tentang Kehutanan.</p></li>
										<li><p>Undang-undang nomor 7 tahun 2004 tentang Sumber Daya Air.</p></li>
										<li><p>Undang-undang nomor 25 tahun 2004 tentang Sistem Perencanaan Pembangunan Nasional.</p></li>
										<li><p>Undang-undang Republik Indonesia nomor 32 tahun 2004 tentang Pemerintahan Daerah</p></li>
										<li><p>PP No 7 tahun 1999 tentang  Pengawetan Jenis Tumbuhan dan Satwa</p></li>
										<li><p>PP No 8 tahun 1999 tentang Pemanfaatan Jenis Tumbuhan dan Satwa Liar</p></li>
										<li><p>PP NO 68 Tahun 1998 tentang Kawasan Suaka Alam dan Kawasan Pelestarian Alam</p></li>
										<li><p>PP 18 Tahun 1994 tentang Pengusahaan Pariwisata Alam di Zona Pemanfaatan Taman Nasional, Taman Hutan Raya dan Taman Wisata Alam</p></li>
										<li><p>PP NO 13 Tahun 1994 tentang Perburuan Satwa Buru</p></li>
										<li><p>PP No 41 tahun 2006 tentang Perizinan Melakukan Kegiatan Penelitian dan Pengembangan Perguruan Tinggi Asing, Lembaga Penelitian dan Pengembangan Asing, Badan Usaha Asing, dan Orang Asing</p></li>
										<li><p>Peraturan Dirjen PHKA No. SK 190/IV-Set/HO/2006 tentang Izin Masuk Kawasan Suaka Alam, Kawasan Pelestarian Alam dan Taman Buru</p></li>
										</ul>
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