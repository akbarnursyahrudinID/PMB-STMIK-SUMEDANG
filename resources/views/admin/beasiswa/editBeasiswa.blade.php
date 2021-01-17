@extends('admin.main')
@section('title','Info Beasiswa|STMIK Sumedang')
@section('dashboard','active')
@section('3','active')
@section('contain')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Form Edit Info Beasiswa</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/home')}}">Home</a></li>
              <li class="breadcrumb-item"><a href="{{url('/beasiswa')}}">Info Beasiswa</a></li>
              <li class="breadcrumb-item active">Edit Data</li>
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
                <form method="Post" action="/beasiswa/{{$beasiswa->id_beasiswa}}" id="edit">
                    @method('patch')
                    @csrf
                    <div class="form-group">
                      <label for="n_bea">Nama Beasiswa:</label>
                    <input type="text" class="form-control @error('nama_beasiswa')is-invalid @enderror"id="n_bea" name="nama_beasiswa" placeholder="Masukan Nama Beasiswa!" value="{{ old('nama_beasiswa') }}{{$beasiswa->nama_beasiswa}}">
                    @error('nama_beasiswa')<div class="invalid-feedback">{{$message}}</div>@enderror
                    </div>
                    <div class="mb-3">
                        <label>Deskripsi:</label>
                        <textarea type="text" class="textarea @error('deskripsi')is-invalid @enderror" name="deskripsi"style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                            {{ old('nama_beasiswa') }}{{$beasiswa->deskripsi}}
                        </textarea>
                        @error('deskripsi')<div class="invalid-feedback">{{$message}}</div>@enderror
                    </div>
                    <div class="form-group">
                        <label for="link">Tautan:</label>
                      <input type="text" class="form-control"id="link" name="link" placeholder="Masukan Link!" value="{{ old('link') }}{{$beasiswa->link}}">
                      </div>
                </form>
                <button type="submit" class="btn btn-primary" onclick="edit()"><i class="fas fa-edit"></i> Ubah Data</button>
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


  <script>
    function edit(){
       Swal.fire({
       title: 'Kamu Yakin?',
       text: "Data Akan di Ubah",
       icon: 'warning',
       showCancelButton: true,
       confirmButtonColor: '#3085d6',
       cancelButtonColor: '#d33',
       confirmButtonText: 'Ya, Ubah!'
       }).then((result) => {
       if (result.isConfirmed) {
           $('#edit').submit();
       }
       })
    }
   </script>



@endsection
