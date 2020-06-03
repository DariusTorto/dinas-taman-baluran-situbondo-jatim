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

            .img-fluids{
                height: 350px;
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
								<img class="img-fluids" src="/appru/img/artikel-1.jpg" alt="">
							</div>
                        </div>
                        <div class="row mt-30 mb-30">
							<h3 class="mt-20 mb-20">Training Workshop Hidrologi untuk Pengelola Lahan Basah Suaka Margasatwa Rawa Singkil BKSDA Aceh di TN Sebangau</h3>
							<p class="excert">
                            Pemerintah Amerika Serikat melaui The Department of the Interior’s International Technical Assistance Program (DOI-ITAP) telah membangun kerjasama dengan Pemerintah Indonesia melalui Kementerian Lingkungan Hidup dan Kehutanan dalam proyek perlindungan satwa liar dan meningkatkan pengelolaan taman nasional di Indonesia sejak tahun 2013.
							</p>
							<p class="excert">
                            Di level unit pelaksana teknis kerjasama tersebut terimplementasi dalam sister’s protected area antara Balai Taman Nasional Sebangau dengan Great Dismal Swamp National Refuge, Virginia. Kegiatan sister’s protected area antara lain melalui training/workshop hidrologi kepada staf Balai TN Sebangau yang telah dilaksanakan 2 kali yakni tahun 2015 dan 2016 di Palangka Raya.
							</p>
							<p class="excert">
                            Dalam rangka pembelajaran tentang hidrologi serta untuk memperluas kemitraan antara DOI ITAP dan KLHK, pada tanggal 13 s..d. 18 Agustus 2018, dilakukan workshop hidrologi untuk pengelola Suaka Margasatwa Rawa Singkil BKSDA Aceh di TN Sebangau. Para staf TN Sebangau yang telah mengikuti workshop hidrologi pada tahun 2015 bertindak sebagai co-instructors dari para ahli dari DOI-ITAP.
							</p>
							<p class="excert">
                            Peserta training workshop ini terdiri dari Kepala SKW II Subulussalam, Hadi Sofyan dan 12 staf SM Rawa Singkil. Acara dibuka secara resmi oleh Plh. Kepala Balai yakni KSBTU BTN Sebangau, Doni Maja Perdana dan dihadiri oleh Mr. Jason Riley, U.S.DOI-ITAP Project Manager, Mr. Sean Lawlor, U.S.DOI-ITAP Assistant. Project Manager, instruktur dari DOI-ITAP yaitu Mr. Fred Wurster, Great Dismal Swamp National Wildlife Refuge U.S. Fish and Wildlife Service dan Mr. Peter Sharpe, U.S. National Park Service serta Kepala BKSDA Aceh Sapto Aji Prabowo.
							</p>
							<p class="excert">
							Training workshop ini terdiri dari materi kelas yang meliputi presentasi dan diskusi antara lain mengenai : Konsep dari Dasar-Dasar Hidrologi (Hidrologi dan Keseimbangan Air, Kualitas Air, Dampak Pemanfaatan Lahan pada Kualitas Air), Lahan Basah : Fungsi dan Restorasi, Isu-Isu Pengelolaan dan Kegiatan Restorasi di TN Sebangau dan SM Rawa Singkil, Perencanaan Restorasi Hidrologi, Pengumpulan Data, Teknik Pemantauan Air dan Analisa Data Ketinggian Air.
							</p>
							<!-- <div class="feature-img">
								<img class="img-fluids align-center" src="/appru/img/sub-1.jpg" alt="">
							</div> -->
							<p class="excert mt-10">
                            Pada hari ketiga, para peserta melakukan praktek lapangan di Sungai Koran yang merupakan bagian dari Resort Sebangau Hulu, SPTN Wilayah I. Para peserta melakukan pengamatan terhadap salah satu dam di Sungai Koran serta melakukan praktek pembuatan tabat/dam sederhana setelah sebelumya melakukan survey ke salah satu kanal yang ada di Sungai Koran untuk mencari lokasi yang tepat untuk dilakukan penabatan.
							</p>
							<p class="excert">
                            Pada hari keempat para peserta melakukan pembuatan sumur pantau untuk mengukur tinggi air tanah serta pengukuran kualitas air dengan menggunakan YSI. Setelah kegiatan dilapangan selesai, pada hari berikutnya para peserta melakukan banyak diskusi dengan Mr. Fred Wurster dan Mr. Peter Sharpe terkait permasalahan restorasi di SM Rawa Singkil serta kontruksi dam yang sesuai dengan SM Rawa Singkil maupun kualitas air air di SM Rawa Singkil. Pada acara penutupan, para peserta menyatakan bahwa training workshop ini sangat penting dan bermanfaat karena para peserta bisa belajar mengenai hidrologi maupun restorasi.
							</p>
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