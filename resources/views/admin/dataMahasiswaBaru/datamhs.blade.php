@extends('admin.main')
@section('title','Data Mahasiswa Baru')
@section('dashboard','active')
@section('1','active')
@section('contain')
<!-- Content Wrapper. Contains page content -->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Mahasiswa Baru</h1>
            @if(session('status1'))
            <script>
            Swal.fire({
            icon: 'success',
            title: 'Diperbarui!',
            text:'Data Berhasil Diperbarui.',
            showConfirmButton: false,
            timer: 2000
            })
            </script>
            @endif
            @if(session('status2'))
            <script>
            Swal.fire({
            icon: 'success',
            title: 'dihapus!',
            text:'Data Berhasil di Hapus.',
            showConfirmButton: false,
            timer: 2000
            })
            </script>
            @endif
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/home')}}">Home</a></li>
              <li class="breadcrumb-item active">Data Mahasiswa Baru</li>
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

              </div>
              <!-- /.card-header -->
              <div class="card-body"style="overflow-x:auto;">
                <table id="example" class="table table-bordered table-hover">
                  <thead class="bg-dark">
                  <tr>
                    <th>NIK</th>
                    <th>Nama</th>
                    <th>No HP</th>
                    <th>Email</th>
                    <th>Aksi</th>

                  </tr>
                  </thead>
                  <tbody>
                      @foreach ($data_cmb as $data)
                  <tr>
                  <td>{{$data->nik}}</td>
                    <td>{{$data->nama}}</td>
                    <td>{{$data->nomor_hp}}</td>
                    <td>{{$data->email}}</td>
                    <td style="width:11%">
                        <center>
                        <form action="/datamhs/{{$data->id_register}}" method="post" class="d-inline" id="delete{{$data->id_register}}">
                            @method('delete')
                            @csrf
                         </form>
                         <button class="btn btn-danger" onclick="deleteConfirmation({{$data->id_register}})"style="width:50px;border-radius:10px"><i class="fas fa-trash-alt"></i></button>
                    <form action="/datamhs/{{$data->id_register}}" class="d-inline">
                        <button type="submit"class="btn btn-info " style="width:50px;border-radius:10px"><i class="fas fa-info-circle"></i></button>
                    </form>
                </center>

                    </td>
                  </tr>
                  @endforeach



                  </tbody>
                  <tfoot class="bg-dark">
                  <tr>
                    <th>NIK</th>
                    <th>Nama</th>
                    <th>No HP</th>
                    <th>Email</th>
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
    function deleteConfirmation(id_register) {
        swal.fire({
            title: 'Hapus data dengan id: ' +id_register+ '?',
            icon: 'warning',
            text: "Anda tidak akan dapat mengembalikan ini!",
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: "Ya,Hapus!",
        }).then(function (e) {

            if (e.value === true) {
                $('#delete'+id_register).submit();

            } else {
                e.dismiss;
            }

        }, function (dismiss) {
            return false;
        })
    }
</script>





@endsection
