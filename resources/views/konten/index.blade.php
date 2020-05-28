@extends('template.adminlte')
@push('css')
<script src="https://cdn.ckeditor.com/ckeditor5/19.0.0/inline/ckeditor.js"></script>
@endpush
@push('script')
@endpush
@section('konten')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Artikel</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item active">Text Editors</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <div class="container-fluid">
    <div class="card card-success">
    <div class="card-header">
    <h3 class="card-title">Dinas Taman Nasional</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form role="form">
    <div class="card-body">
        <div class="form-group">
        <label for="text">Judul</label>
        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Judul Artikel">
        </div>
        <div class="form-group">
        <label for="exampleInputFile">Thumbnail</label>
        <div class="input-group">
            <div class="custom-file">
            <input type="file" class="custom-file-input" id="exampleInputFile">
            <label class="custom-file-label" for="exampleInputFile">Tekan Disini</label>
            </div>
        </div>
        </div>
    </div>
        <!-- /.card-body -->
        
    </div>
    </div>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-outline card-info">
            <div class="card-header">
              <h3 class="card-title">
                Deskripsi Artikel
              </h3>
              <!-- tools box -->
              <div class="card-tools">
                <button type="button" class="btn btn-tool btn-sm" data-card-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
              <!-- /. tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body pad">
              <div class="mb-3">
                <textarea class="textarea" placeholder="Place some text here"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
              </div>
              <button type="submit" class="btn btn-primary float-right">Publish</button>
            </div>
            
          </div>
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>
    </form>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection