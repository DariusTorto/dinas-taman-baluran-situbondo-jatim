@extends('template.adminlte')
@push('css')
@endpush
@push('script')
<script>
  $(function () {
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": false,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
  $(function () {
    $('#akomodasidlm').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": false,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
  $(function () {
    $('#akomodasiluar').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": false,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
@endpush
@section('konten')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
    <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title"><i class="nav-icon fas fa-newspaper"></i> List Posting</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Judul</th>
                  <th>Thumbnail</th>
                  <th>Kategori</th>
                  <th>Tanggal Dipublikasi</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($konten as $baris)
                <tr>
                  <td>{{ $baris->judul }}</td>
                  <td>{{ $baris->thumbnail }}</td>
                  <td>{{ $baris->kategori }}</td>
                  <td>{{ $baris->created_at }}</td>
                  <td>
                    <a href="{{ url("konten/$baris->id/edit") }}" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i></a>
                      <form action="{{ url("konten/$baris->id") }}" method="POST" style="display:inline;">
                      @method('delete')
                      @csrf
                          <button onclick="return confirm('Yakin akan dihapus ?')" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                      </form>
                    <a href="{{ url("konten/$baris->id/view") }}" class="btn btn-sm btn-warning"><i class="fa fa-floppy-o"></i></a>
                    </td>
                </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>Judul</th>
                  <th>Thumbnail</th>
                  <th>Kategori</th>
                  <th>Tanggal Dipublikasi</th>
                  <th>Aksi</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <div class="row">
        <div class="col-12">
          <div class="col-sm-6 card float-right">
            <div class="card-header">
              <h3 class="card-title"><i class="nav-icon fas fa-newspaper"></i> List Akomodasi Luar</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="akomodasiluar" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Nama Tempat</th>
                  <th>Alamat</th>
                  <th>No Telepon</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($akomodasiluar as $baris)
                <tr>
                  <td>{{ $baris->nama }}</td>
                  <td>{{ $baris->alamat }}</td>
                  <td>{{ $baris->no_telp }}</td>
                  <td>
                    <a href="{{ url("akomodasidlm/$baris->id/edit") }}" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i></a>
                      <form action="{{ url("akomodasidlm/$baris->id") }}" method="POST" style="display:inline;">
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
                  <th>Nama Tempat</th>
                  <th>Alamat</th>
                  <th>No Telepon</th>
                  <th>Aksi</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
          <!-- /.card -->
          <div class="col-md-6 card">
            <div class="card-header">
              <h3 class="card-title"><i class="nav-icon fas fa-newspaper"></i> List Akomodasi Dalam</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="akomodasidlm" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Nama Tempat</th>
                  <th>Alamat</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($akomodasidlm as $row)
                <tr>
                  <td>{{ $row->nama }}</td>
                  <td>{{ $row->alamat }}</td>
                  <td>
                    <a href="{{ url("akomodasidlm/$row->id/edit") }}" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i></a>
                      <form action="{{ url("akomodasidlm/$row->id") }}" method="POST" style="display:inline;">
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
                  <th>Nama Tempat</th>
                  <th>Alamat</th>
                  <th>Aksi</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection