@extends('admin.main')
@section('title','Fasilitas|STMIK Sumedang')
@section('dashboard','active')
@section('5','active')
@section('contain')
<!-- Content Wrapper. Contains page content -->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Fasilitas Kampus STMIK Sumedang</h1>

            {{-- flashmesage --}}
            @if(session('berhasil'))
            <script>
            Swal.fire({
            icon: 'success',
            title: 'Disimpan!',
            text:'Data Berhasil di Simpan.',
            showConfirmButton: false,
            timer: 2000
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
            timer: 2000
            })
            </script>
            @endif
            {{-- end --}}

          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/home')}}">Home</a></li>
              <li class="breadcrumb-item active">Fasilitas</li>
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
                <a href="{{url('/fasilitas/create')}}" class="btn btn-primary"><i class="fas fa-plus-square"></i> Tambah Data</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body "style="overflow-x:auto;">
                  <div class="navigation" style="text-align:center;">
                    <a class="button btn active" href="javascript:void(0)" data-filter="all" >ALL</a>
                    <a class="button btn" href="javascript:void(0)" data-filter="ruang Belajar">RUANG BELAJAR</a>
                    <a class="button btn" href="javascript:void(0)" data-filter="laboratorium" >LABORATORIUM</a>
                    <a class="button btn" href="javascript:void(0)" data-filter="perpustakaan" >PERPUSTAKAAN</a>
                    <a class="button btn" href="javascript:void(0)" data-filter="sarana Olahraga" >SARANA OLAHRAGA</a>
                    <a class="button btn" href="javascript:void(0)" data-filter="wifi Hostpot" >WIFI HOSTPOT</a>
                  </div>

                  <div class="imagecontainer">
                    @foreach ($fasilitas as $fa)
                      <div class="filter filtr-item col-lg-4"data-category="{{$fa->kategori}}" data-sort="black sample">
                          <form action="/fasilitas/{{$fa->id_f}}" method="post" id="delete{{$fa->id_f}}">
                                @method('delete')
                                @csrf
                            </form>
                            <button class="btn btn-danger mt-3 btnh" onclick="deleteConfirmation({{$fa->id_f}})"><i class="fas fa-trash"></i></button>

                         <a href="{{asset('img/fasilitas/'.$fa->gambar)}}" data-toggle="lightbox"data-title="{{$fa->nama_f}}">
                           <img src="{{asset('img/fasilitas/'.$fa->gambar)}}" alt="">
                           <H3>{{$fa->nama_f}}</H3>
                        </a>


                      </div>
                      @endforeach
                      </div>


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
    function deleteConfirmation(id_f) {
        swal.fire({
            title: 'Hapus data dengan id: ' +id_f+ '?',
            icon: 'warning',
            text: "Anda tidak akan dapat mengembalikan ini!",
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: "Ya,Hapus!",
        }).then(function (e) {

            if (e.value === true) {
                $('#delete'+id_f).submit();

            } else {
                e.dismiss;
            }

        }, function (dismiss) {
            return false;
        })
    }
</script>


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<!-- Ekko Lightbox -->

<script>
    $(function () {
      $(document).on('click', '[data-toggle="lightbox"]', function(event) {
        event.preventDefault();
        $(this).ekkoLightbox({
          alwaysShowClose: true
        });
      });

      $('.imagecontainer').filterizr({gutterPixels: 3});
      $('.btn[data-filter]').on('click', function() {
        $('.btn[data-filter]').removeClass('active');
        $(this).addClass('active');
      });
    })
  </script>





@endsection
