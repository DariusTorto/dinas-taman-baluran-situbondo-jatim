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
<script>
  $(function () {
    $('#didalam').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": false,
      "info": false,
      "autoWidth": false,
      "responsive": true,
    });
  });
  $(function () {
    $('#diluar').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": false,
      "info": false,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
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
				<div class="col-lg-12 posts-list">
					<div class="single-post row">
                    <div class="col-sm-12 section-top-border">
						<p class="excert"><b>Taman Nasional Baluran Situbondo Jawa Timur</b> dikenal sebagai salah satu tujuan wisata di Banyuputih. Terdapat banyak lokasi obyek dan daya tarik wisata (ODTWA) di dalamnya seperti pura, bangunan bersejarah, atraksi satwa liar, beberapa pantai yang unik serta mempunyai ombak yang cocok untuk olah raga surfing, pantai tempat peneluran penyu, terumbu karang serta laguna yang dipenuhi burung migran pada musim-musim tertentu. Dengan banyaknya objek wisata yang ada, tentunya didukung dengan sarana dan prasarana agar kegiatan wisata dapat berjalan dengan baik. Sarana dan prasarana yang terdapat di <b>Taman Nasional Baluran Situbondo Jawa Timur</b> yaitu sebagai berikut:</p>
		<h3 class="mb-30">Sarana & Prasarana <b>Didalam</b> Kawasan Taman Nasional Baluran Situbondo Jawa Timur</h3>
			<div class="card-body">
              <table id="didalam" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Nama Tempat</th>
                  <th>Alamat</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>Loket Karcis</td>
                  <td>Rowobendo, Plengkung dan Bedul</td>
                </tr>
                <tr>
                  <td>Visitor Center
                  </td>
                  <td>Rowobendo</td>
                </tr>
                <tr>
                  <td>Wisma Wisata
                  </td>
                  <td>Plengkung (G-Land Jack Surf Camp, G-Land Bobby Surf Camp dan G-Land Joyo Surf Camp)</td>
                </tr>
                <tr>
                  <td>Mess
                  </td>
                  <td>Pasaranyar</td>
                </tr>
                <tr>
                  <td>Cafetaria</td>
                  <td>Rowobendo,  Pancur, Bedul, Plengkung (G-Land Jack Surf Camp, G-Land Bobby Surf Camp dan G-Land Joyo Surf Camp)</td>
                </tr>
                <tr>
                  <td>Musholla</td>
                  <td>Pancur, Rowobendo dan Bedul</td>
                </tr>
                <tr>
                  <td>Area Parkir</td>
                  <td>Pasar Anyar, Triangulasi, Pancur  dan Bedul</td>
                </tr>
                <tr>
                  <td>MCK</td>
                  <td>Pasaranyar, Rowobendo, Sadengan, Trianggulasi, Pancur, Bedul, Plengkung (G-Land Jack Surf Camp, G-Land Bobby Surf Camp dan G-Land Joyo Surf Camp)</td>
                </tr>
                <tr>
                  <td>Camping ground</td>
                  <td>Pancur</td>
                </tr>
                <tr>
                  <td>Menara Pandang</td>
                  <td>Sadengan</td>
                </tr>
                <tr>
                  <td>Mobil</td>
                  <td>Pancur</td>
                </tr>
                <tr>
                  <td>Speed Boat</td>
                  <td>Tanjung Pasir, Sembulungan dan Plengkung (G-Land Jack Surf Camp, G-Land Bobby Surf Camp dan G-Land Joyo Surf Camp)</td>
                </tr>
                </tbody>
                <tfoot>
                <tr>
                  <th>Nama Tempat</th>
                  <th>Alamat</th>
                </tr>
                </tfoot>
              </table>
            </div>
				<!-- <div class="progress-table-wrap">
					<div class="progress-table">
						<div class="table-head">
							<div class="serial">#</div>
							<div class="country">Nama</div>
							<div class="visit">Alamat</div>
						</div>
						<div class="table-row">
							<div class="serial">01</div>
							<div class="country"> Loket Karcis</div>
							<div class="visit">Rowobendo, Plengkung dan Bedul</div>
							
						</div>
						<div class="table-row">
							<div class="serial">02</div>
							<div class="country"> Visitor Center</div>
							<div class="visit">Rowobendo</div>
							
						</div>
						<div class="table-row">
							<div class="serial">03</div>
							<div class="country"> Wisma Wisata</div>
							<div class="visit">Plengkung (G-Land Jack Surf Camp, G-Land Bobby Surf Camp dan G-Land Joyo Surf Camp)</div>
							
						</div>
						<div class="table-row">
							<div class="serial">04</div>
							<div class="country"> Mess</div>
							<div class="visit">Pasaranyar</div>
							
						</div>
						<div class="table-row">
							<div class="serial">05</div>
							<div class="country"> Cafetaria</div>
							<div class="visit">Rowobendo,  Pancur, Bedul, Plengkung (G-Land Jack Surf Camp, G-Land Bobby Surf Camp dan G-Land Joyo Surf Camp)</div>
							
						</div>
						<div class="table-row">
							<div class="serial">06</div>
							<div class="country">Musholla</div>
							<div class="visit">Pancur, Rowobendo dan Bedul</div>
							
						</div>
						<div class="table-row">
							<div class="serial">07</div>
							<div class="country">Area Parkir</div>
							<div class="visit">Pasar Anyar, Triangulasi, Pancur  dan Bedul</div>
							
						</div>
						<div class="table-row">
							<div class="serial">08</div>
							<div class="country">MCK</div>
							<div class="visit">Pasaranyar, Rowobendo, Sadengan, Trianggulasi, Pancur, Bedul, Plengkung (G-Land Jack Surf Camp, G-Land Bobby Surf Camp dan G-Land Joyo Surf Camp)</div>
							
						</div>
						<div class="table-row">
							<div class="serial">09</div>
							<div class="country">Camping ground</div>
							<div class="visit">Pancur</div>
							
						</div>
						<div class="table-row">
							<div class="serial">10</div>
							<div class="country"> Menara Pandang</div>
							<div class="visit">Sadengan</div>
							
						</div>
						<div class="table-row">
							<div class="serial">11</div>
							<div class="country">Mobil</div>
							<div class="visit">Pancuran</div>
							
						</div>
						<div class="table-row">
							<div class="serial">12</div>
							<div class="country">Speed Boat</div>
							<div class="visit">Tanjung Pasir, Sembulungan dan Plengkung (G-Land Jack Surf Camp, G-Land Bobby Surf Camp dan G-Land Joyo Surf Camp)</div>
							
						</div>
					</div>
				</div> -->
			</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-12 posts-list">
					<div class="single-post row">
                    <div class="col-sm-12 section-top-border">
					<p class="excert">Selain sarana dan prasarana yang ada di dalam kawasan <b>Taman Nasional Baluran Situbondo Jawa Timur</b>, terdapat juga jasa penginapan/ hotel yang banyak terdapat di sekitar kawasan dan masih dalam wilayah Kabupaten Banyuwangi. Berikut merupakan hotel dan penginapan yang ada di sekitar kawasan <b>Taman Nasional Baluran Situbondo Jawa Timur</b>.</p>
		<h3 class="mb-30">Sarana & Prasarana <b>Diluar</b> Kawasan Taman Nasional Baluran Situbondo Jawa Timur</h3>
			<div class="card-body">
              <table id="diluar" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Nama Tempat</th>
                  <th>Alamat</th>
                  <th>Telepon</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>Manyar</td>
                  <td>Jl. G. Subroto 110 BWI</td>
                  <td>(0333) 427373-427374 Fax. 424742</td>
                </tr>
                <tr>
                  <td>Kalibaru Cottage
                  </td>
                  <td>Jl. Raya Jember, Kalibaru</td>
                  <td>(0333) 897333-897334 Fax. 897222</td>
                </tr>
                <tr>
                  <td>Watu Dodol	
                  </td>
                  <td>	Jl. Raya Situbondo Km. 14-Banyuwangi</td>
                  <td>(0333) 510048</td>
                </tr>
                <tr>
                  <td>Ketapang Indah	
                  </td>
                  <td>Jl. Gatot Subroto-Banyuwangi</td>
                  <td>(0333) 422280-422281 Fax. 423597</td>
                </tr>
                <tr>
                  <td>Berlian Abadi</td>
                  <td>Jl. Yos Sudarso 165-Banyuwangi</td>
                  <td>(0333) 427688</td>
                </tr>
                <tr>
                  <td>Ikhtiar Surya</td>
                  <td>Jl. Gajah Mada 9, Banyuwangi</td>
                  <td>(0333) 421063-423631</td>
                </tr>
                <tr>
                  <td>Ijen Resorts & Villas</td>
                  <td>Jl. Randu Agung, Banyuwangi</td>
                  <td>(0333) 429000 Fax. 420800</td>
                </tr>
                <tr>
                  <td>Agung Jaya Mahkota</td>
                  <td>Jl. Raya Jember 55 Genteng</td>
                  <td>(0333) 845346</td>
                </tr>
                <tr>
                  <td>Margo Utomo I</td>
                  <td>Jl. Lapangan 10, Kalibaru</td>
                  <td>(0333) 897420 Fax. 821872</td>
                </tr>
                <tr>
                  <td>Margo Utomo II</td>
                  <td>Jl. Raya Putri Gunung 3, Kalibaru	</td>
                  <td>(0333) 897420 Fax. 821872</td>
                </tr>
                <tr>
                  <td>Warata</td>
                  <td>Jl.Widuri 56 Banyuwangi</td>
                  <td>(0333) 424575</td>
                </tr>
                <tr>
                  <td>Ketapang Asri</td>
                  <td>Jl. Gatot Subroto 14 Banyuwangi</td>
                  <td>(0333) 510240</td>
                </tr>
                <tr>
                  <td>Baru Dua Beach Hotel	</td>
                  <td>Jl. Raya Situbondo Km 12, Banyuwangi</td>
                  <td>(0333) 511488</td>
                </tr>
                <tr>
                  <td>Raung View
                  </td>
                  <td>Jl. Raya Jember 16 Kalibaru, Banyuwangi</td>
                  <td>(0333) 897214</td>
                </tr>
                <tr>
                  <td>Minak Jinggo
                  </td>
                  <td>Jl.Untung Surapati 44. Glenmore. Banyuwangi</td>
                  <td>(0333) 821286</td>
                </tr>
                <tr>
                  <td>Surya
                  </td>
                  <td>Jl. Yos Sudarso 2, Jajag</td>
                  <td>(0333) 396126</td>
                </tr>
                <tr>
                  <td>Baru Indah</td>
                  <td>Jl. Genteng 241, Jajag</td>
                  <td>(0333) 396515</td>
                </tr>
                <tr>
                  <td>Kumala</td>
                  <td>Jl. A. Yani 21 Banyuwangi</td>
                  <td>(0333) 423287 Fax. 423533</td>
                </tr>
                <tr>
                  <td>Blambangan</td>
                  <td>Jl. Dr. Wahidin Sudirohusodo. Banyuwangi</td>
                  <td>(0333) 421598</td>
                </tr>
                <tr>
                  <td>Tanjung Asri	</td>
                  <td>Jl. Mawar 8-10 Banyuwangi	</td>
                  <td>(0333) 421786</td>
                </tr>
                <tr>
                  <td>Baru</td>
                  <td>Jl. Letjen Hariyono 82-84, Banyuwangi</td>
                  <td>(0333) 421369</td>
                </tr>
                <tr>
                  <td>Slamet</td>
                  <td>Jl. KH. Wahid Hasyim 98, Banyuwangi</td>
                  <td>(0333) 424675</td>
                </tr>
                <tr>
                  <td>Banyuwangi Beach</td>
                  <td>Jl. Gatot Subroto Km 7 Banyuwangi</td>
                  <td>(0333) 427605</td>
                </tr>
                </tbody>
                <tfoot>
                <tr>
                  <th>Nama Tempat</th>
                  <th>Alamat</th>
                  <th>Telepon</th>
                </tr>
                </tfoot>
              </table>
            </div>
				<!-- <div class="progress-table-wrap">
					<div class="progress-table">
						<div class="table-head">
							<div class="serial">#</div>
							<div class="country">Nama</div>
							<div class="visit">Alamat</div>
						</div>
						<div class="table-row">
							<div class="serial">01</div>
							<div class="country"> Loket Karcis</div>
							<div class="visit">Rowobendo, Plengkung dan Bedul</div>
							
						</div>
						<div class="table-row">
							<div class="serial">02</div>
							<div class="country"> Visitor Center</div>
							<div class="visit">Rowobendo</div>
							
						</div>
						<div class="table-row">
							<div class="serial">03</div>
							<div class="country"> Wisma Wisata</div>
							<div class="visit">Plengkung (G-Land Jack Surf Camp, G-Land Bobby Surf Camp dan G-Land Joyo Surf Camp)</div>
							
						</div>
						<div class="table-row">
							<div class="serial">04</div>
							<div class="country"> Mess</div>
							<div class="visit">Pasaranyar</div>
							
						</div>
						<div class="table-row">
							<div class="serial">05</div>
							<div class="country"> Cafetaria</div>
							<div class="visit">Rowobendo,  Pancur, Bedul, Plengkung (G-Land Jack Surf Camp, G-Land Bobby Surf Camp dan G-Land Joyo Surf Camp)</div>
							
						</div>
						<div class="table-row">
							<div class="serial">06</div>
							<div class="country">Musholla</div>
							<div class="visit">Pancur, Rowobendo dan Bedul</div>
							
						</div>
						<div class="table-row">
							<div class="serial">07</div>
							<div class="country">Area Parkir</div>
							<div class="visit">Pasar Anyar, Triangulasi, Pancur  dan Bedul</div>
							
						</div>
						<div class="table-row">
							<div class="serial">08</div>
							<div class="country">MCK</div>
							<div class="visit">Pasaranyar, Rowobendo, Sadengan, Trianggulasi, Pancur, Bedul, Plengkung (G-Land Jack Surf Camp, G-Land Bobby Surf Camp dan G-Land Joyo Surf Camp)</div>
							
						</div>
						<div class="table-row">
							<div class="serial">09</div>
							<div class="country">Camping ground</div>
							<div class="visit">Pancur</div>
							
						</div>
						<div class="table-row">
							<div class="serial">10</div>
							<div class="country"> Menara Pandang</div>
							<div class="visit">Sadengan</div>
							
						</div>
						<div class="table-row">
							<div class="serial">11</div>
							<div class="country">Mobil</div>
							<div class="visit">Pancuran</div>
							
						</div>
						<div class="table-row">
							<div class="serial">12</div>
							<div class="country">Speed Boat</div>
							<div class="visit">Tanjung Pasir, Sembulungan dan Plengkung (G-Land Jack Surf Camp, G-Land Bobby Surf Camp dan G-Land Joyo Surf Camp)</div>
							
						</div>
					</div>
				</div> -->
			</div>
					</div>
				</div>
			</div>
		</div>

	</section>
	<!-- End post-content Area -->

@endsection