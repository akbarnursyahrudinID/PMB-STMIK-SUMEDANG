@extends('admin.main')
@section('title','Biaya Studi|STMIK Sumedang')
@section('dashboard','active')
@section('4','active')
@section('contain')
<!-- Content Wrapper. Contains page content -->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Biaya Studi</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/home')}}">Home</a></li>
              <li class="breadcrumb-item active">Biaya Studi</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
<section class="content">
    @if(session('statusHapus'))
    <script>
      Swal.fire({
      icon: 'success',
      title: 'dihapus!',
      text:'Data Berhasil Di Hapus.',
      showConfirmButton: false,
      timer: 1500
      })
      </script>
@endif
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <a href="{{url('/biayaStudi/create')}}" class="btn btn-primary"><i class="fas fa-plus-square"></i> Tambah Data</a>

              </div>
              <!-- /.card-header -->
              <div class="card-body" style="overflow-x:auto;">
                <table id="example" class="table table-bordered table-hover">
                    <thead class="bg-dark">
                    <tr>
                      <th>No.</th>
                      <th>Nama</th>
                      <th>Image</th>
                      <th>Dibuat</th>
                      <th>Aksi</th>

                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($biayastudi as $dbs)
                    <tr >
                      <td scope="row">{{$loop->iteration}}</td>
                      <td>{{$dbs->name}}</td>
                      <td><center>
                           <img src="{{asset('img/biayastudi/'.$dbs->image)}}" alt="" style="width:400px;height:50%; border-radius:20px">
                        </td></center>
                      <td>{{$dbs->created_at}}</td>
                      <td style="width:11%">
                        <center>
                            <form action="/biayaStudi/{{$dbs->id}}" method="post" id="sid{{$dbs->id}}">
                                @method('delete')
                                @csrf
                            </form>

                            <a href="javascript:void(0)" onclick="deleteConfirmation({{$dbs->id}})" class="btn btn-danger"  style="width:50px;border-radius:10px"><i class="fas fa-trash-alt"></i></a>

                        </center>
                      </td>
                    </tr>
                    @endforeach





                    </tbody>
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
                $('#sid'+id).submit();

            } else {
                e.dismiss;
            }

        }, function (dismiss) {
            return false;
        })
    }
</script>






@endsection
