@extends('admin.main')
@section('title','Downloads|STMIK Sumedang')
@section('dashboard','active')
@section('7','active')
@section('contain')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Form Tambah Data</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/home')}}">Home</a></li>
              <li class="breadcrumb-item"><a href="{{url('/download')}}">Download</a></li>
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
                <form method="Post" action="/download" id=""enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <label for="nama_file">Nama File:</label>
                    <input type="text" class="form-control @error('nama_file')is-invalid @enderror"id="nama_file" name="nama_file" placeholder="Masukan Nama File!" value="{{ old('nama_file') }}">
                    @error('nama_file')<div class="invalid-feedback">{{$message}}</div>@enderror
                    </div>
                    <div class="input-group mb-3 ">
                        <label class="input-group-text" for="inputGroupSelect01">Kategori</label>
                        <select class="form-select @error('kategori')is-invalid @enderror" id="inputGroupSelect01" name="kategori">
                          <option selected></option>
                          <option value="Brosur PMB">Brosur PMB</option>
                        </select>
                        @error('kategori')<div class="invalid-feedback">{{$message}}</div>@enderror
                      </div>
                    <label>MAsukan File:</label>
                    <div class="input-group mb-3">
                        <input type="file" class="bg-primary form-control @error('file')is-invalid @enderror" style="height:44px" name="file">
                        @error('file')<div class="invalid-feedback">{{$message}}</div>@enderror
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
