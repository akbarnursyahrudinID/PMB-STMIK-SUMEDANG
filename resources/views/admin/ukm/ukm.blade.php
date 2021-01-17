@extends('admin.main')
@section('title','UKM|STMIK Sumedang')
@section('dashboard','active')
@section('6','active')
@section('contain')
<!-- Content Wrapper. Contains page content -->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Unit Kegiatan Mahasiswa (UKM)</h1>

            {{-- flashmesage --}}
            @if(session('statusHapus'))
            <script>
            Swal.fire({
            icon: 'success',
            title: 'Dihapus!',
            text:'Data Berhasil di hapus.',
            showConfirmButton: false,
            timer: 2000
            })
            </script>
            @endif
            @if(session('berhasilUbah'))
            <script>
            Swal.fire({
            icon: 'success',
            title: 'Diubah!',
            text:'Data Berhasil di Ubah.',
            showConfirmButton: false,
            timer: 2000
            })
            </script>
            @endif
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/home')}}">Home</a></li>
              <li class="breadcrumb-item active">UKM</li>
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
                <a href="{{url('/ukm/create')}}" class="btn btn-primary"><i class="fas fa-plus-square"></i> Tambah Data</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <center>
                <div class="imagecontainer ">
                    @foreach ($ukm as $data)


                      <div class="filter col-lg-4">
                          <form action="/ukm/{{$data->id_ukm}}" method="post" id="delete{{$data->id_ukm}}">
                                @method('delete')
                                @csrf
                            </form>
                            <button class="btn btn-danger mt-3 btnh" onclick="deleteConfirmation({{$data->id_ukm}})"><i class="fas fa-trash"></i></button>
                            <form action="/ukm/{{$data->id_ukm}}/edit" class="d-inline">
                            <button class="btn btn-warning mt-3 btne"><i class="fas fa-edit"></i></button>
                        </form>
                         <a href="/ukm/{{$data->id_ukm}}" target="">
                           <img src="{{asset('img/ukm/'.$data->logo)}}" alt="" style="width:67%;height:67%">
                           <H3 style="text-align:center; font-size:130%">{{$data->nama_ukm}}</H3>
                        </a>

                      </div>

                      @endforeach
                      </div>
                    </center>

                  </div>




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
    function deleteConfirmation(id_ukm) {
        swal.fire({
            title: 'Hapus data dengan id: ' +id_ukm+ '?',
            icon: 'warning',
            text: "Anda tidak akan dapat mengembalikan ini!",
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: "Ya,Hapus!",
        }).then(function (e) {

            if (e.value === true) {
                $('#delete'+id_ukm).submit();

            } else {
                e.dismiss;
            }

        }, function (dismiss) {
            return false;
        })
    }
</script>







@endsection
