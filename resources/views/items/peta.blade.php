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

            .single-post{
				margin-left: 20px;
				margin-top: 20px;
             }
             
             .card{
                 margin-left:35px;
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
				<div class="col-sm-4">
					<div class="single-post row">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d46023.19984316743!2d114.37399056257793!3d-7.883639550338634!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd6bdb4195092f24e!2sPos%20Tiket%20Taman%20Nasional%20Baluran!5e0!3m2!1sen!2sid!4v1590720619670!5m2!1sen!2sid" width="600" height="310" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="single-post row">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d85014.25507174141!2d114.38340370189898!3d-7.904633753199129!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd1249454d7c085%3A0x67067c7ed3eced4b!2sBaluran%20National%20Park!5e0!3m2!1sen!2sid!4v1590679276275!5m2!1sen!2sid" width="600" height="310" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="single-post row">
						<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d75753.84856634002!2d114.34280124251102!3d-7.823810365247087!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xdc36ae911aca490d!2sKantor%20resort%20bitakol%20%2C%20taman%20nasional%20baluran!5e0!3m2!1sen!2sid!4v1590721370119!5m2!1sen!2sid" width="600" height="310" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
					</div>
				</div>
				<div class="col-sm-12">
					<div class="single-post row">
							<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d67972.11637613941!2d114.31183065583083!3d-7.860191814167267!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd125bd0508b207%3A0xa3ef3d8e1ad8fb9e!2sBaluran!5e0!3m2!1sen!2sid!4v1590721540132!5m2!1sen!2sid" width="1100" height="310" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
					</div>
				</div>
            </div>
		</div>
	</section>
	<!-- End post-content Area -->

@endsection