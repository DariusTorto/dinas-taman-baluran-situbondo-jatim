@extends('template.adminlte')
@push('css')
@endpush
@push('script')
<script>
$(function () {
    $('#galeri').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": false,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });</script>
@endpush
@section('konten')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Galeri</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item active">Galeri</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->

    <div class="container-fluid">
    <div class="col-md-6 card float-right">
      <div class="card-header">
        <h3 class="card-title"><i class="nav-icon fas fa-camera"></i> List Foto</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <table id="galeri" class="table table-bordered table-hover">
          <thead>
          <tr>
            <th>Foto</th>
            <th>Judul</th>
            <th>Jenis</th>
            <th>Aksi</th>
          </tr>
          </thead>
          <tbody>
          @foreach ($galeri as $row)
          <tr>
            <td>{{ $row->foto }}</td>
            <td>{{ $row->nama }}</td>
            <td>{{ $row->jenis }}</td>
            <td>
              <form action="{{ url("galeri/$row->id") }}" method="POST" style="display:inline;">
              @method('delete')
              @csrf
                  <button onclick="return confirm('Yakin akan dihapus ?')" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
              </form>
            </td>
          </tr>
          @endforeach
          </tbody>
          <tfoot>
          <tr>
            <th>Foto</th>
            <th>Judul</th>
            <th>Jenis</th>
            <th>Aksi</th>
          </tr>
          </tfoot>
        </table>
      </div>
    <!-- /.card-body -->
  </div>
    <div class="col-md-6">
            <!-- general form elements disabled -->
            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Form Galeri Foto</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
            <form>
                <div class="row">
                <div class="col-sm-12">
                    <!-- text input -->
                    <div class="form-group">
                    <label for="exampleInputFile">Foto</label>
                        <div class="input-group">
                            <div class="custom-file">
                            <input type="file" class="custom-file-input" id="exampleInputFile">
                            <label class="custom-file-label" for="exampleInputFile">Tekan Disini</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!-- text input -->
                    <div class="form-group">
                        <label>Jenis Foto</label>
                        <select class="form-control">
                        <option>Kawasan</option>
                        <option>Flora</option>
                        <option>Fauna</option>
                        <option>Lainnya</option>
                        </select>
                    </div>
                </div>
            </div>
                    <button type="submit" class="btn btn-primary float-right">Submit</button>
                </form>
            </div>
        </div>
    </div>
    
</div>

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection