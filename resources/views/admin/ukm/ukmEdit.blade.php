@extends('admin.main')
@section('title','UKM|STMIK Sumedang')
@section('dashboard','active')
@section('6','active')
@section('contain')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Form Edit UKM</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/home')}}">Home</a></li>
              <li class="breadcrumb-item"><a href="{{url('/ukm')}}">UKM</a></li>
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
                <form method="Post" action="/ukm/{{$ukm->id_ukm}}" id=""enctype="multipart/form-data">
                    @method('patch')
                    @csrf
                    <div class="form-group">
                      <label for="nama_ukm">Nama UKM:</label>
                    <input type="text" class="form-control @error('nama_ukm')is-invalid @enderror"id="nama_ukm" name="nama_ukm" placeholder="Masukan Nama UKM" value="{{$ukm->nama_ukm}}">
                    @error('nama_ukm')<div class="invalid-feedback">{{$message}}</div>@enderror
                    </div>
                    <div class="mb-3">
                        <label>Deskripsi:</label>
                        <textarea type="text" class="textarea @error('deskripsi')is-invalid @enderror" name="tentang"style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                            {{$ukm->tentang}}
                        </textarea>
                        @error('tentang')<div class="invalid-feedback">{{$message}}</div>@enderror
                    </div>
                      <div class="mb-3">
                        <label>Video UKM:</label>
                        <textarea type="text" name="video"style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                            {{$ukm->video}}
                        </textarea>

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
