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
				<div class="col-lg-12">
					<div class="single-post ">
						<div class="col-sm-12">
							<h1 style="margin-bottom:40px;">Biaya Tarif Masuk</h1>
							<p class="excert">Tarif Masuk Kawasan <b>Taman Nasional Baluran Situbondo Jawa Timur</b></p>
							<p>[mulai berlaku tanggal 14 Agustus 2014]</p>
							<h3 class="mb-10">1. PENGUNJUNG UMUM</h3>
							<p><i>Hari Kerja (Senin s/d Sabtu)</i></p>
							<p><i>a) Karcis Masuk Pengunjung Umum</i></p>
							
							<div class="unordered-list">
								<ul>
									<li><p>Wisatawan Mancanegara (WNA) Rp. 150.000,-/orang/hari</b></p></li>
									<li><p>Wisatawan Nusantara (WNI) Rp. 5.000,-/orang/hari	</b></p></li>
								</ul>
							</div>
							<p><i>b) Karcis masuk rombongan pelajar/mahasiswa (minimal 10 orang)</i></p>
							
							<div class="unordered-list">
								<ul>
									<li><p>Wisatawan Mancanegara (WNA) Rp. 100.000,-/orang/hari</b></p></li>
									<li><p>Wisatawan Nusantara (WNI) Rp. 3.000,-/orang/hari</b></p></li>
								</ul>
							</div>
							<p><i>Hari Libur (Minggu dan Hari Libur Nasional)</i></p>
							<p><i>a) Karcis Masuk Pengunjung Umum</i></p>
							
							<div class="unordered-list">
								<ul>
									<li><p>Wisatawan Mancanegara (WNA) Rp. 225.000,-/orang/hari</b></p></li>
									<li><p>Wisatawan Nusantara (WNI) Rp. 7.500,-/orang/hari	</b></p></li>
								</ul>
							</div>
							<p><i>b) Karcis masuk rombongan pelajar/mahasiswa (minimal 10 orang)</i></p>
							
								<ul class="unordered-list">
									<ul>
										<li><p>Wisatawan Mancanegara (WNA) Rp. 150.000,-/orang/hari</b></p></li>
										<li><p>Wisatawan Nusantara (WNI) Rp. 4.500,-/orang/hari	</b></p></li>
									</ul>
								</ul>

							<h3 class="mb-10">2. REKREASI ALAM BEBAS</h3>
							<p><i>a) Kegiatan wisata umum</i></p>
							<div class="ordered-list">
								<li><span>Berkemah Rp. 5.000,-/orang/hari/kemah</span></li>
								<li><span>Penelusuran hutan (tracking),Mendaki gunung (hiking-climbing) Rp. 5.000,-/orang/paket/kegiatan</span></li>
								<li><span>Penelusuran gua (caving) Rp. 10.000,-/orang/paket/kegiatan</span></li>
								<li><span>Pengamatan hidupan liar Rp. 10.000,-/orang/paket/kegiatan</span></li>
								<li><span>Kano/ bersampan Rp. 25.000,-/orang/hari</span></li>
								<li><span>Arung jeram Rp. 15.000,-/orang/hari</span></li>
								<li><span>Canopi trail Rp. 25.000,-/orang/sekali masuk</span></li>
								<li><span>Outbound training Rp. 150.000,-/orang/paket/kegiatan</span></li>
							</div>
							<p><i>b) Kegiatan wisata rombongan pelajar/mahasiswa (minimal 10 orang)</i></p>
							<div class="ordered-list">
								<li><span>Berkemah Rp. 2.500,-/orang/hari/kemah</span></li>
								<li><span>Penelusuran hutan (tracking),Mendaki gunung (hiking-climbing) Rp. 2.500,-/orang/paket/kegiatan</span></li>
								<li><span>Penelusuran gua (caving) Rp. 5.000,-/orang/paket/kegiatan</span></li>
								<li><span>Pengamatan hidupan liar Rp. 5.000,-/orang/paket/kegiatan</span></li>
								<li><span>Kano/ bersampan Rp. 15.000,-/orang/hari</span></li>
								<li><span>Arung jeram Rp. 10.000,-/orang/hari</span></li>
								<li><span>Canopi trail Rp. 15.000,-/orang/sekali masuk</span></li>
								<li><span>Outbound training Rp. 75.000,-/orang/paket/kegiatan</span></li>
							</div>

							<h3 class="excert mt-10">3. PENELITIAN</h3>
							<div class="ordered-list">
								<li><span>Peneliti Mancanegara/ Mahasiswa Perguruan Tinggi Mancanegara (Foreign Researcher)</span></li>
									<ol class="ordered-list-alpha">
											<li><span> 1 bulan Rp. 5.000.000,-/orang</span></li>
											<li><span>1 bulan – 6 bulan Rp. 10.000.000,-/orang</span></li>
											<li><span>7 bulan – 12 bulan Rp. 15.000.000,-/orang</span></li>
									</ol>
								<li><span>Peneliti Nusantara (Indonesian Researcher)</span></li>
									<ol class="ordered-list-alpha">
										<li><span> 1 bulan Rp. 100.000,-/orang</span></li>
										<li><span>1 bulan – 6 bulan Rp. 150.000,-/orang</span></li>
										<li><span>7 bulan – 12 bulan Rp. 250.000,-/orang 7 bulan – 12 bulan Rp. 250.000,-/orang</span></li>
									</ol>
								<li><span>Mahasiswa/ Pelajar Indonesia (Indonesian Student)</span></li>
									<ol class="ordered-list-alpha">
										<li><span><b>Berlaku tarif Rp. 0,- (NOL Rupiah)</b></span></li>
									</ol>
							</div>
							<h3 class="excert mt-10">4. KEGIATAN SOSIAL</h3>
							<ul class="unordered-list">
								<li> Berlaku tarif Rp.0,- (NOL Rupiah)</li>
								<li> Hanya untuk masyarakat lokal atau sekitar kawasan atau Pemegang Izin Usaha penyediaan Jasa Wisata Alam ang melakukan kegiatan sosial, meliputi :</li>
							</ul>
							<div class="ordered-list">
								<li><span>Penanaman pohon</span></li>
								<li><span>Pengamanan hutan bersama masyarakat</span></li>
								<li><span>Pengendalian kebakaran hutan bersama masyarakat</span></li>
								<li><span>Evakuasi korban</span></li>
								<li><span>Kegiatan masyarakat untuk memenuhi kegiatan sehari-hari</span></li>
							</div>
							<h3 class="excert mt-10">5. KEGIATAN RELIGI</h3>
							<ul class="unordered-list">
								<li><p>Berlaku tarif Rp.0- (NOL Rupiah)</p></li>
								<li><p>Hanya untuk masyarakat lokal yang melakukan kegiatan religi</p></li>
							</ul>
							<h3 class="excert mt-10">6. SNAPSHOT FILM & FOTO KOMERSIAL</h3>
							<div class="ordered-list">
								<li><span>Video Komersil Rp. 10.000.000,-/paket</span></li>
								<li><span>Handycam Rp. 1.000.000,-/paket</span></li>
								<li><span>Foto Rp. 250.000,-/paket</span></li>
							</div>
							<h3 class="excert mt-10">7. IURAN IZIN PENGAMBILAN SAMPEL PENELITIAN (MATI/ BAGIAN-BAGIAN)</h3>
							<div class="ordered-list">
								<li><span>Warga Negara Indonesia (WNI)/ Mahasiswa Indonesia Rp. 50.000,-/izin</span></li>
								<li><span>Warga Negara Asing (WNA)/ Mahasiswa Mancanegara Rp. 500.000,-/izin</span></li>
							</div>
							<p class="excert mt-10">Pengambilan dan pengangkutan sampel spesimen tumbuhan dan satwa liar untuk tujuan penelitian 50% x harga patokan sebagaimana dalam Peraturan MenLHK No. P.86/Menlhk/Setjen/Kum.I/11/2016.</p>
							<h3 class="mt-10 mb-10">8. PUNGUTAN ADMINISTRASI PEMANFAATAN TUMBUHAN DAN SATWA LIAR</h3>
							<ul class="unordered-list">
								<li><p>Surat Angkut Tumbuhan dan Satwa Dalam Negeri (SATS-DN) Rp. 35.000,-/SATS</p></li>
							</ul>
							<p>Dasar pelaksanaan peraturan tersebut adalah:</p>
							<div class="ordered-list">
								<li><span>Peraturan Pemerintah Nomor 12 Tahun 2014 tentang Jenis dan Tarif Atas Jenis Penerimaan Negara Bukan Pajak.</span></li>
								<li><span>Peraturan Menteri Kehutanan P.36/Menhut-II/2014 tentang Tata cara Penetapan Rayon di Taman Nasional, Taman Hutan Raya, Taman Wisata Alam dan Taman Buru Dalam Rangka Pengenaan Penerimaan Negara Bukan Pajak Bidang Pariwisata Alam.</span></li>
								<li><span>Peraturan Menteri Kehutanan P.37/Menhut-II/2014 tentang Tata Cara Pengenaan, Pemungutan dan Penyetoran Penerimaan Negara Bukan Pajak Bidang Perlindungan Hutan dan Konservasi Alam.</span></li>
								<li><span>Peraturan Menteri Kehutanan P.38/Menhut-II/2014 tentang Tata Cara Dan Persyaratan Kegiatan Tertentu Pengenaan Tarif Rp.0,00 (nol rupiah) di Kawasan Suaka Alam,Kawasan Pelestarian Alam, Taman Buru, dan Hutan Alam.</span></li>
								<li><span>Keputusan Direktur Jenderal PHKA SK.133/IV-SET/2014 tentang Penetapan Rayon di TN, Tahura, TWA dan Taman Buru dalam rangka Pengenaan PNBP.</span></li>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End post-content Area -->

@endsection