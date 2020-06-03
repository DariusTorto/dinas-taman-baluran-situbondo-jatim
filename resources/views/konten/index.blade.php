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
    <form method="POST" action="/konten" accept-charset="utf-8" enctype="multipart/form-data">
      @csrf
      <div class="card-body">
        <div class="form-group">
          <label for="judul">Judul</label>
            <input type="text" class="form-control" id="judul" placeholder="Judul Artikel" name="judul"  value="{{ old('judul')}}">
            @error('judul')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
          <label>Kategori</label>
            <select class="form-control" id="kategori" name="kategori">
              @foreach($kategori as $row)
                <option>{{ $row->kategori }}</option>
              @endforeach
            </select>
            @error('kategori')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div> 
        <div class="form-group">
        <label for="thumbnail">Thumbnail</label>
        <div class="input-group">
          <div class="custom-file">
            <input type="file" class="custom-file-input" id="thumbnail" name="thumbnail" value="{{ old('thumbnail')}}">
            @error('thumbnail')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
            <label class="custom-file-label" for="thumbnail">Tekan Disini</label>
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
                <textarea name="isi" class="textarea" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" id="isi" name="isi" value="{{ old('isi')}}"></textarea>
                @error('isi')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
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