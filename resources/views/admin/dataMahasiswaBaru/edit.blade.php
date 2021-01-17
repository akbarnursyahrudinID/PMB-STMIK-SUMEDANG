@extends('admin.main')
@section('title','Rincian Data Mahasiswa')
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
            <h1>Ubah Data Mahasiswa Baru</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/home')}}">Home</a></li>
              <li class="breadcrumb-item"><a href="{{url('/datamhs')}}"">Data Mahasiswa Baru</a></li>
              <li class="breadcrumb-item active">Detail</li>
              <li class="breadcrumb-item active">Ubah Data</li>
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
              {{-- <div cla    ss="card-header">

              </div> --}}
              <!-- /.card-header -->
              <div class="card-body">

              <form method="Post" action="/datamhs/{{$dataCmb->id_register}}" id="ubah">
                @method('patch')
                @csrf
                    <div class="form-group">
                      <label for="nik">NIK:</label>
                    <input type="text" class="form-control @error('nik') is-invalid @enderror"id="nik" name="nik" value="{{$dataCmb->nik}}">
                    @error('nik')<div class="invalid-feedback">{{$message}}</div>@enderror
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama:</label>
                      <input type="text" class="form-control  @error('nama') is-invalid @enderror"id="nama" name="nama" value="{{$dataCmb->nama}}">
                      @error('nama')<div class="invalid-feedback">{{$message}}</div>@enderror
                      </div>
                      <div class="form-group">
                        <label for="status">Status:</label>
                      <input type="text" class="form-control @error('st_perkawinan') is-invalid @enderror"id="status" name="st_perkawinan" value="{{$dataCmb->st_perkawinan}}">
                      @error('st_perkawinan')<div class="invalid-feedback">{{$message}}</div>@enderror
                      </div>
                      <div class="form-group">
                        <label for="alamat">Alamat:</label>
                      <input type="text" class="form-control @error('alamat') is-invalid @enderror"id="alamat" name="alamat" value="{{$dataCmb->alamat}}">
                      @error('alamat')<div class="invalid-feedback">{{$message}}</div>@enderror
                      </div>
                      <div class="form-group">
                        <label for="wn">Kewarganegaraan:</label>
                      <input type="text" class="form-control @error('warga_negara') is-invalid @enderror"id="wn" name="warga_negara" value="{{$dataCmb->warga_negara}}">
                      @error('warga_negara')<div class="invalid-feedback">{{$message}}</div>@enderror
                      </div>
                      <div class="form-group">
                        <label for="hp">Nomor Handphone:</label>
                      <input type="text" class="form-control @error('nomor_hp') is-invalid @enderror"id="hp" name="nomor_hp"value="{{$dataCmb->nomor_hp}}">
                      @error('nomor_hp')<div class="invalid-feedback">{{$message}}</div>@enderror
                      </div>
                      <div class="form-group">
                        <label for="email">Alamat Email:</label>
                      <input type="text" class="form-control @error('email') is-invalid @enderror"id="email" name="email" value="{{$dataCmb->email}}">
                      @error('email')<div class="invalid-feedback">{{$message}}</div>@enderror
                      </div>
                      <div class="form-group">
                        <label for="tinggal">Dimana Anda Tinggal:</label>
                      <input type="text" class="form-control @error('menetap') is-invalid @enderror"id="tinggal"name="menetap" value="{{$dataCmb->menetap}}">
                      @error('menetap')<div class="invalid-feedback">{{$message}}</div>@enderror
                      </div>
                      <div class="form-group">
                        <label for="prodi">Pilihan Prodi:</label>
                      <input type="text" class="form-control @error('pilihan_prodi') is-invalid @enderror"id="prodi" name="pilihan_prodi" value="{{$dataCmb->pilihan_prodi}}">
                      @error('pilihan_prodi')<div class="invalid-feedback">{{$message}}</div>@enderror
                      </div>


                  </form>
                  <button type="submit" class="btn btn-primary" onclick="edit()">Ubah Data!</button>


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
       text: "Data Akan Diubah",
       icon: 'warning',
       showCancelButton: true,
       confirmButtonColor: '#3085d6',
       cancelButtonColor: '#d33',
       confirmButtonText: 'Ya,Ubah!'
       }).then((result) => {
       if (result.isConfirmed) {
           $('#ubah').submit();
       }
       })
    }
   </script>



@endsection
