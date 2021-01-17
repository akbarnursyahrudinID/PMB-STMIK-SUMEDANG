@extends('admin.main')
@section('title','Biaya Studi|STMIK Sumedang')
@section('dashboard','active')
@section('4','active')
@section('contain')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Form Tambah Biaya Studi</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/home')}}">Home</a></li>
              <li class="breadcrumb-item"><a href="{{url('/beasiswa')}}">Info Beasiswa</a></li>
              <li class="breadcrumb-item active">Tambah Data</li>
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
              <div class="card-body">
                <form method="Post" action="/biayaStudi" id="" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <label for="name">Nama:</label>
                    <input type="text" class="form-control"id="name" name="name" placeholder="Masukan Nama File!" value="{{ old('name') }}">
                    </div>
                        <label>masukan Gambar:</label>
                        <div class="input-group mb-3">
                            <input type="file" class="bg-primary form-control" style="height:44px" name="image">
                          </div>
                      <button type="submit" class="btn btn-primary" onclick=""><i class="fas fa-save"></i> Simpan</button>
                </form>
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
