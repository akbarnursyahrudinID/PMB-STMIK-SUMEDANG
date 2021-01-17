@extends('admin.main')
@section('title','Downloads|STMIK Sumedang')
@section('dashboard','active')
@section('7','active')
@section('contain')
<!-- Content Wrapper. Contains page content -->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    @if(session('berhasil'))
                  <script>
                    Swal.fire({
                    icon: 'success',
                    title: 'Disimpan!',
                    text:'Data Berhasil di Simpan.',
                    showConfirmButton: false,
                    timer: 1500
                    })
                    </script>
            @endif
            @if(session('statusHapus'))
                  <script>
                    Swal.fire({
                    icon: 'success',
                    title: 'Dihapus!',
                    text:'Data Berhasil di Hapus.',
                    showConfirmButton: false,
                    timer: 1500
                    })
                    </script>
            @endif
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Downloads</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/home')}}">Home</a></li>
              <li class="breadcrumb-item active">Downloads</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <a href="{{url('/download/create')}}" class="btn btn-primary"><i class="fas fa-plus-square"></i> Tambah Data</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example" class="table table-bordered table-hover">
                    <thead class="bg-dark">
                    <tr>
                      <th>No.</th>
                      <th>title</th>
                      <th>categories</th>
                      <th>create Date</th>
                      <th>Aksi</th>

                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($download as $data)
                    <tr>
                    <td scope="row">{{$loop->iteration}}</td>
                      <td>{{$data->nama_file}}</td>
                      <td>{{$data->kategori}}</td>
                      <td>{{$data->created_at}}</td>
                      <td style="width:11%">
                          <center>
                            <form action="/download/{{$data->id}}" method="post" class="d-inline" id="delete{{$data->id}}">
                                @method('delete')
                                @csrf
                             </form>
                             <button class="btn btn-danger" onclick="deleteConfirmation({{$data->id}})"style="width:50px;border-radius:10px"><i class="fas fa-trash-alt"></i></button>
                        <form action="/download/{{$data->id}}" class="d-inline">
                            <button type="submit"class="btn btn-info " style="width:50px;border-radius:10px"><i class="fas fa-info-circle"></i></button>
                        </form>
                        </center>

                      </td>
                    </tr>
                    @endforeach



                    </tbody>
                    <tfoot class="bg-dark">
                    <tr>
                        <th>No.</th>
                      <th>title</th>
                      <th>categories</th>
                      <th>create Date</th>
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
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  <script type="text/javascript">
    function deleteConfirmation(id) {
        swal.fire({
            title: 'Hapus data dengan id: ' +id+ '?',
            icon: 'warning',
            text: "Anda tidak akan dapat mengembalikan ini!",
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: "Ya,Hapus!",
        }).then(function (e) {

            if (e.value === true) {
                $('#delete'+id).submit();

            } else {
                e.dismiss;
            }

        }, function (dismiss) {
            return false;
        })
    }
</script>





@endsection
