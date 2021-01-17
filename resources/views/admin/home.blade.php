@extends('admin.main')
@section('title','PMB STMIK Sumedang')
@section('home','active')
@section('home_color','color: #e6a50a')
@section('contain')
<!-- Content Wrapper. Contains page content -->
<!-- Content Wrapper. Contains page content -->


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        @if(session('loginsukses'))
                  <script>
                    Swal.fire({
                    icon: 'success',
                    title: 'Berhasil Masuk',
                    text:'Selamat Datang',
                    showConfirmButton: false,
                    timer: 1500
                    })
                    </script>
            @endif
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Mahasiswa Baru</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Home /</li>
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
              <div cla    ss="card-header">
                <h3 class="card-title">Data Mahasiswa Baru</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">



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












@endsection
