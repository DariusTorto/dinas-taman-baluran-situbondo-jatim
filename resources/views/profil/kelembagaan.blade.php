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

			.kelembagaan{
				margin: 0px 0px 0px 350px;
			}
			.img-fluids{
				width:900px;
				height:600px;
			}
			.fluids{
				margin:0px 0px 0px -70px;
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
	<div class="kelembagaan">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 posts-list">
					<div class="single-post row">
								<div class="fluids">
								<img class="img-fluids" src="https://merubetiri.id/assets/image-konten/img-konten_1552037465.jpeg" alt="">
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