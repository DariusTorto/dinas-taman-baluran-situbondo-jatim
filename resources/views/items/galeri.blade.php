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
			.whole-wrap{
				padding: 0px 50px 50px 50px;
			}
	</style>
	<!-- Theme style -->
	<link rel="stylesheet" href="/adminlte/dist/css/adminlte.min.css">
@endpush
@push('script')
<script>
  $(function () {
    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
      event.preventDefault();
      $(this).ekkoLightbox({
        alwaysShowClose: true
      });
    });

    $('.filter-container').filterizr({gutterPixels: 3});
    $('.btn[data-filter]').on('click', function() {
      $('.btn[data-filter]').removeClass('active');
      $(this).addClass('active');
    });
  })</script>
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
		<div class="whole-wrap">
		<div class="col-12">
		<h3>Album Foto TN. Baluran Situbondo Jawa Timur</h3>
            <div class="card card-primary card-outline card-outline-tabs">
              <div class="card-header p-0 border-bottom-0">
                <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="custom-tabs-four-home-tab" data-toggle="pill" href="#custom-tabs-four-home" role="tab" aria-controls="custom-tabs-four-home" aria-selected="true">Kawasan</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-four-profile-tab" data-toggle="pill" href="#custom-tabs-four-profile" role="tab" aria-controls="custom-tabs-four-profile" aria-selected="false">Flora</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-four-messages-tab" data-toggle="pill" href="#custom-tabs-four-messages" role="tab" aria-controls="custom-tabs-four-messages" aria-selected="false">Fauna</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-four-settings-tab" data-toggle="pill" href="#custom-tabs-four-settings" role="tab" aria-controls="custom-tabs-four-settings" aria-selected="false">Lainnya</a>
                  </li>
                </ul>
              </div>
              <div class="card-body">
                <div class="tab-content" id="custom-tabs-four-tabContent">
                  <div class="tab-pane fade show active" id="custom-tabs-four-home" role="tabpanel" aria-labelledby="custom-tabs-four-home-tab">
				  <div class="row gallery-item">
						<div class="col-md-4">
							<a href="/appru/img/elements/g1.jpg" class="img-pop-up" data-toggle="lightbox" data-title="sample 1 - white" data-gallery="gallery">
								<div class="single-gallery-image" style="background: url(/appru/img/elements/g1.jpg);"></div>
							</a>
						</div>
						<div class="col-md-4">
							<a href="/appru/img/elements/g2.jpg" class="img-pop-up" data-toggle="lightbox" data-title="sample 2 - white" data-gallery="gallery">
								<div class="single-gallery-image" style="background: url(/appru/img/elements/g2.jpg);"></div>
							</a>
						</div>
						<div class="col-md-4">
							<a href="/appru/img/elements/g3.jpg" class="img-pop-up" data-toggle="lightbox" data-title="sample 3 - white" data-gallery="gallery">
								<div class="single-gallery-image" style="background: url(/appru/img/elements/g3.jpg);"></div>
							</a>
						</div>
						<div class="col-md-4">
							<a href="/appru/img/elements/g4.jpg" class="img-pop-up" data-toggle="lightbox" data-title="sample 4 - white" data-gallery="gallery">
								<div class="single-gallery-image" style="background: url(/appru/img/elements/g4.jpg);"></div>
							</a>
						</div>
						<div class="col-md-4">
							<a href="/appru/img/elements/g5.jpg" class="img-pop-up" data-toggle="lightbox" data-title="sample 5 - white" data-gallery="gallery">
								<div class="single-gallery-image" style="background: url(/appru/img/elements/g5.jpg);"></div>
							</a>
						</div>
						<div class="col-md-4">
							<a href="/appru/img/blog/user-info.jpg" class="img-pop-up" data-toggle="lightbox" data-title="sample 6 - white" data-gallery="gallery">
								<div class="single-gallery-image" style="background: url(/appru/img/blog/user-info.jpg);"></div>
							</a>
						</div>
						<div class="col-md-4">
							<a href="/appru/img/elements/g6.jpg" class="img-pop-up" data-toggle="lightbox" data-title="sample 7 - white" data-gallery="gallery">
								<div class="single-gallery-image" style="background: url(/appru/img/elements/g6.jpg);"></div>
							</a>
						</div>
						<div class="col-md-4">
							<a href="/appru/img/elements/g7.jpg" class="img-pop-up" data-toggle="lightbox" data-title="sample 8 - white" data-gallery="gallery">
								<div class="single-gallery-image" style="background: url(/appru/img/elements/g7.jpg);"></div>
							</a>
						</div>
						<div class="col-md-4">
							<a href="/appru/img/elements/g8.jpg" class="img-pop-up" data-toggle="lightbox" data-title="sample 9 - white" data-gallery="gallery">
								<div class="single-gallery-image" style="background: url(/appru/img/elements/g8.jpg);"></div>
							</a>
					</div>
					</div>
                  </div>
                  <div class="tab-pane fade" id="custom-tabs-four-profile" role="tabpanel" aria-labelledby="custom-tabs-four-profile-tab">
				  <div class="row gallery-item">
						<div class="col-md-4">
							<a href="/appru/img/elements/g8.jpg" class="img-pop-up" data-toggle="lightbox" data-title="sample 1 - white" data-gallery="gallery">
								<div class="single-gallery-image" style="background: url(/appru/img/elements/g8.jpg);"></div>
							</a>
						</div>
						<div class="col-md-4">
							<a href="/appru/img/elements/g7.jpg" class="img-pop-up" data-toggle="lightbox" data-title="sample 2 - white" data-gallery="gallery">
								<div class="single-gallery-image" style="background: url(/appru/img/elements/g7.jpg);"></div>
							</a>
						</div>
						<div class="col-md-4">
							<a href="/appru/img/elements/g6.jpg" class="img-pop-up" data-toggle="lightbox" data-title="sample 3 - white" data-gallery="gallery">
								<div class="single-gallery-image" style="background: url(/appru/img/elements/g6.jpg);"></div>
							</a>
						</div>
						<div class="col-md-4">
							<a href="/appru/img/elements/g5.jpg" class="img-pop-up" data-toggle="lightbox" data-title="sample 4 - white" data-gallery="gallery">
								<div class="single-gallery-image" style="background: url(/appru/img/elements/g5.jpg);"></div>
							</a>
						</div>
						<div class="col-md-4">
							<a href="/appru/img/elements/g4.jpg" class="img-pop-up" data-toggle="lightbox" data-title="sample 5 - white" data-gallery="gallery">
								<div class="single-gallery-image" style="background: url(/appru/img/elements/g4.jpg);"></div>
							</a>
						</div>
						<div class="col-md-4">
							<a href="/appru/img/blog/user-info.jpg" class="img-pop-up" data-toggle="lightbox" data-title="sample 6 - white" data-gallery="gallery">
								<div class="single-gallery-image" style="background: url(/appru/img/blog/user-info.jpg);"></div>
							</a>
						</div>
						<div class="col-md-4">
							<a href="/appru/img/elements/g3.jpg" class="img-pop-up" data-toggle="lightbox" data-title="sample 7 - white" data-gallery="gallery">
								<div class="single-gallery-image" style="background: url(/appru/img/elements/g3.jpg);"></div>
							</a>
						</div>
						<div class="col-md-4">
							<a href="/appru/img/elements/g2.jpg" class="img-pop-up" data-toggle="lightbox" data-title="sample 8 - white" data-gallery="gallery">
								<div class="single-gallery-image" style="background: url(/appru/img/elements/g2.jpg);"></div>
							</a>
						</div>
						<div class="col-md-4">
							<a href="/appru/img/elements/g1.jpg" class="img-pop-up" data-toggle="lightbox" data-title="sample 9 - white" data-gallery="gallery">
								<div class="single-gallery-image" style="background: url(/appru/img/elements/g1.jpg);"></div>
							</a>
					</div>
					</div>
                  </div>
                  <div class="tab-pane fade" id="custom-tabs-four-messages" role="tabpanel" aria-labelledby="custom-tabs-four-messages-tab">
				  <div class="row gallery-item">
						<div class="col-md-4">
							<a href="/appru/img/elements/g1.jpg" class="img-pop-up" data-toggle="lightbox" data-title="sample 1 - white" data-gallery="gallery">
								<div class="single-gallery-image" style="background: url(/appru/img/elements/g1.jpg);"></div>
							</a>
						</div>
						<div class="col-md-4">
							<a href="/appru/img/elements/g2.jpg" class="img-pop-up" data-toggle="lightbox" data-title="sample 2 - white" data-gallery="gallery">
								<div class="single-gallery-image" style="background: url(/appru/img/elements/g2.jpg);"></div>
							</a>
						</div>
						<div class="col-md-4">
							<a href="/appru/img/elements/g3.jpg" class="img-pop-up" data-toggle="lightbox" data-title="sample 3 - white" data-gallery="gallery">
								<div class="single-gallery-image" style="background: url(/appru/img/elements/g3.jpg);"></div>
							</a>
						</div>
						<div class="col-md-4">
							<a href="/appru/img/elements/g4.jpg" class="img-pop-up" data-toggle="lightbox" data-title="sample 4 - white" data-gallery="gallery">
								<div class="single-gallery-image" style="background: url(/appru/img/elements/g4.jpg);"></div>
							</a>
						</div>
						<div class="col-md-4">
							<a href="/appru/img/elements/g5.jpg" class="img-pop-up" data-toggle="lightbox" data-title="sample 5 - white" data-gallery="gallery">
								<div class="single-gallery-image" style="background: url(/appru/img/elements/g5.jpg);"></div>
							</a>
						</div>
						<div class="col-md-4">
							<a href="/appru/img/blog/user-info.jpg" class="img-pop-up" data-toggle="lightbox" data-title="sample 6 - white" data-gallery="gallery">
								<div class="single-gallery-image" style="background: url(/appru/img/blog/user-info.jpg);"></div>
							</a>
						</div>
						<div class="col-md-4">
							<a href="/appru/img/elements/g6.jpg" class="img-pop-up" data-toggle="lightbox" data-title="sample 7 - white" data-gallery="gallery">
								<div class="single-gallery-image" style="background: url(/appru/img/elements/g6.jpg);"></div>
							</a>
						</div>
						<div class="col-md-4">
							<a href="/appru/img/elements/g7.jpg" class="img-pop-up" data-toggle="lightbox" data-title="sample 8 - white" data-gallery="gallery">
								<div class="single-gallery-image" style="background: url(/appru/img/elements/g7.jpg);"></div>
							</a>
						</div>
						<div class="col-md-4">
							<a href="/appru/img/elements/g8.jpg" class="img-pop-up" data-toggle="lightbox" data-title="sample 9 - white" data-gallery="gallery">
								<div class="single-gallery-image" style="background: url(/appru/img/elements/g8.jpg);"></div>
							</a>
					</div>
					</div>
                  </div>
                  <div class="tab-pane fade" id="custom-tabs-four-settings" role="tabpanel" aria-labelledby="custom-tabs-four-settings-tab">
				  <div class="row gallery-item">
						<div class="col-md-4">
							<a href="/appru/img/elements/g8.jpg" class="img-pop-up" data-toggle="lightbox" data-title="sample 1 - white" data-gallery="gallery">
								<div class="single-gallery-image" style="background: url(/appru/img/elements/g8.jpg);"></div>
							</a>
						</div>
						<div class="col-md-4">
							<a href="/appru/img/elements/g7.jpg" class="img-pop-up" data-toggle="lightbox" data-title="sample 2 - white" data-gallery="gallery">
								<div class="single-gallery-image" style="background: url(/appru/img/elements/g7.jpg);"></div>
							</a>
						</div>
						<div class="col-md-4">
							<a href="/appru/img/elements/g6.jpg" class="img-pop-up" data-toggle="lightbox" data-title="sample 3 - white" data-gallery="gallery">
								<div class="single-gallery-image" style="background: url(/appru/img/elements/g6.jpg);"></div>
							</a>
						</div>
						<div class="col-md-4">
							<a href="/appru/img/elements/g5.jpg" class="img-pop-up" data-toggle="lightbox" data-title="sample 4 - white" data-gallery="gallery">
								<div class="single-gallery-image" style="background: url(/appru/img/elements/g5.jpg);"></div>
							</a>
						</div>
						<div class="col-md-4">
							<a href="/appru/img/elements/g4.jpg" class="img-pop-up" data-toggle="lightbox" data-title="sample 5 - white" data-gallery="gallery">
								<div class="single-gallery-image" style="background: url(/appru/img/elements/g4.jpg);"></div>
							</a>
						</div>
						<div class="col-md-4">
							<a href="/appru/img/blog/user-info.jpg" class="img-pop-up" data-toggle="lightbox" data-title="sample 6 - white" data-gallery="gallery">
								<div class="single-gallery-image" style="background: url(/appru/img/blog/user-info.jpg);"></div>
							</a>
						</div>
						<div class="col-md-4">
							<a href="/appru/img/elements/g3.jpg" class="img-pop-up" data-toggle="lightbox" data-title="sample 7 - white" data-gallery="gallery">
								<div class="single-gallery-image" style="background: url(/appru/img/elements/g3.jpg);"></div>
							</a>
						</div>
						<div class="col-md-4">
							<a href="/appru/img/elements/g2.jpg" class="img-pop-up" data-toggle="lightbox" data-title="sample 8 - white" data-gallery="gallery">
								<div class="single-gallery-image" style="background: url(/appru/img/elements/g2.jpg);"></div>
							</a>
						</div>
						<div class="col-md-4">
							<a href="/appru/img/elements/g1.jpg" class="img-pop-up" data-toggle="lightbox" data-title="sample 9 - white" data-gallery="gallery">
								<div class="single-gallery-image" style="background: url(/appru/img/elements/g1.jpg);"></div>
							</a>
					</div>
					</div>
                  </div>
                </div>
              </div>
              <!-- /.card -->
            </div>
          </div>
				
				
			</div>
		</div>
	</div>
</div>
	</section>
	<!-- End post-content Area -->

@endsection