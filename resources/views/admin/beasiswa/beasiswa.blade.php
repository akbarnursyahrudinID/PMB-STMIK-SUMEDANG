@extends('admin.main')
@section('title','Info Beasiswa|STMIK Sumedang')
@section('dashboard','active')
@section('3','active')
@section('contain')
<!-- Content Wrapper. Contains page content -->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Info Beasiswa</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/home')}}">Home</a></li>
              <li class="breadcrumb-item active">Info Beasiswa</li>
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
                  <a href="{{url('/beasiswa/create')}}" class="btn btn-primary"><i class="fas fa-plus-square"></i> Tambah Data</a>
                  @if(session('status1'))
                  <script>
                    Swal.fire({
                    icon: 'success',
                    title: 'DiSimpan!',
                    text:'Data Berhasil Di Simpan.',
                    showConfirmButton: false,
                    timer: 1500
                    })
                    </script>
            @endif
            @if(session('status2'))
                  <script>
                    Swal.fire({
                    icon: 'success',
                    title: 'Diperbarui!',
                    text:'Data Berhasil di Ubah.',
                    showConfirmButton: false,
                    timer: 1500
                    })
                    </script>
            @endif
            @if(session('status3'))
                  <script>
                    Swal.fire({
                    icon: 'success',
                    title: 'dihapus!',
                    text:'Data Berhasil di Hapus.',
                    showConfirmButton: false,
                    timer: 1500
                    })
                    </script>
            @endif
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example" class="table table-bordered table-hover">
                    <thead class="bg-dark">
                    <tr>
                      <th>No.</th>
                      <th>Nama Beasiswa</th>
                      <th>Deskripsi</th>
                      <th>Tautan</th>
                      <th>Aksi</th>

                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($beasiswa as $data)
                    <tr>
                    <td scope="row">{{$loop->iteration}}</td>
                      <td>{{$data->nama_beasiswa}}</td>
                      <td><?php echo "{$data->deskripsi}";?></td>
                      <td><a href="{{$data->link}}" target="_blank">
                          {{$data->link}}</a>
                        </td>
                      <td style="width:11%">
                            <center>
                            <form action="/beasiswa/{{$data->id_beasiswa}}" method="post" id="delete{{$data->id_beasiswa}}">
                                @method('delete')
                                @csrf
                            </form>
                            <button class="btn btn-danger" onclick="deleteConfirmation({{$data->id_beasiswa}})"style="width:50px;border-radius:10px"><i class="fas fa-trash-alt"></i></button>
                            <form action="/beasiswa/{{$data->id_beasiswa}}/edit" class="d-inline">
                                <button type="submit"class="btn btn-warning" style="width:50px;border-radius:10px"><i class="fas fa-edit"></i></button>
                            </form>
                        </center>

                      </td>
                    </tr>
                    @endforeach



                    </tbody>
                    <tfoot class="bg-dark">
                    <tr>
                        <th>No.</th>
                        <th>Nama Beasiswa</th>
                        <th>Deskripsi</th>
                        <th>Tautan</th>
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
    function deleteConfirmation(id_beasiswa) {
        swal.fire({
            title: 'Hapus data dengan id: ' +id_beasiswa+ '?',
            icon: 'warning',
            text: "Anda tidak akan dapat mengembalikan ini!",
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: "Ya,Hapus!",
        }).then(function (e) {

            if (e.value === true) {
                $('#delete'+id_beasiswa).submit();

            } else {
                e.dismiss;
            }

        }, function (dismiss) {
            return false;
        })
    }
</script>




@endsection
