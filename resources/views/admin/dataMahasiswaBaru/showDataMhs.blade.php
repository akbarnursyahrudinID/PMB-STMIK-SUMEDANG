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
            <h1>Data Mahasiswa Baru</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/home')}}">Home</a></li>
              <li class="breadcrumb-item"><a href="{{url('/datamhs')}}"">Data Mahasiswa Baru</a></li>
              <li class="breadcrumb-item active">Detail</li>
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
                {{-- <h3 class="card-title mt-3">Data Mahasiswa Baru</h3> --}}
                <ol class=" float-right mr-4">
                    <a href="" class="badge badge-success mt-3 " style="font-size:20px"> <i class="fas fa-print"></i> Cetak</a>
                  </ol>
              </div>
              <!-- /.card-header   -->
              <div class="card-body"style="overflow-x:auto;">
                <table class="table table-bordered table-hover" >
                  <tbody>
                    <tr>
                        <th>Register</th>
                        <td>{{$dataCmb->jenis_register}}</td>
                    </tr>
                  <tr>
                      <th>NIK</th>
                      <td>{{$dataCmb->nik}}</td>
                  </tr>
                  <tr>
                    <th>Nama</th>
                    <td>{{$dataCmb->nama}}</td>
                </tr>
                <tr>
                    <th>Tempat Lahir</th>
                    <td>{{$dataCmb->tmp_l}}</td>
                </tr>
                <tr>
                    <th>Tanggal Lahir</th>
                    <td>{{$dataCmb->tgl_lahir}}</td>
                </tr>
                <tr>
                    <th>Jenis kelamin</th>
                    <td>{{$dataCmb->jk}}</td>
                </tr>
                <tr>
                    <th>Agama</th>
                    <td>{{$dataCmb->agama}}</td>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <td>{{$dataCmb->alamat}}</td>
                </tr>
                <tr>
                    <th>Provinsi</th>
                    <td>{{$dataCmb->provinsi}}</td>
                </tr>
                <tr>
                    <th>Kabupaten</th>
                    <td>{{$dataCmb->kabupaten}}</td>
                </tr>
                <tr>
                    <th>kecamatan</th>
                    <td>{{$dataCmb->kecamatan}}</td>
                </tr>
                <tr>
                    <th>Desa</th>
                    <td>{{$dataCmb->desa}}</td>
                </tr>
                <tr>
                    <th>Kode Pos</th>
                    <td>{{$dataCmb->kode_pos}}</td>
                </tr>
                <tr>
                    <th>Status</th>
                    <td>{{$dataCmb->st_perkawinan}}</td>
                </tr>
                <tr>
                    <th>Kewarganegaraan</th>
                    <td>{{$dataCmb->warga_negara}}</td>
                </tr>
                <tr>
                    <th>Nomor Handphone</th>
                    <td>{{$dataCmb->nomor_hp}}</td>
                </tr>
                <tr>
                    <th>Alamat Email</th>
                    <td>{{$dataCmb->email}}</td>
                </tr>
                <tr>
                    <th>Nama Ibu Kandung</th>
                    <td>{{$dataCmb->ibu_kandung}}</td>
                </tr>
                <tr>
                    <th>Dimana Anda Tinggal</th>
                    <td>{{$dataCmb->menetap}}</td>
                </tr>
                <tr>
                    <th>Alat Transportasi</th>
                    <td>{{$dataCmb->transportasi}}</td>
                </tr>
                <tr>
                    <th>Pendidiak Terakhir</th>
                    <td>{{$dataCmb->pendidikan_akhir}}</td>
                </tr>
                <tr>
                    <th>Sekolah Asal</th>
                    <td>{{$dataCmb->sekolah_asal}}</td>
                </tr>
                <tr>
                    <th>Jueusan Asal</th>
                    <td>{{$dataCmb->jurusan_asal}}</td>
                </tr>
                <tr>
                    <th>Tahun Lulus</th>
                    <td>{{$dataCmb->tahun_lulus}}</td>
                </tr>
                <tr>
                    <th>Pilihan Prodi</th>
                    <td>{{$dataCmb->pilihan_prodi}}</td>
                </tr>
                <tr>
                    <th>Tanda Kelulusan/Ijazah</th>
                    <td>{{$dataCmb->tanda_kelulusan}}</td>
                </tr>
                <tr>
                    <th>Kartu Keluarga (KK)</th>
                    <td>{{$dataCmb->kk}}</td>
                </tr>
                <tr>
                    <th>Kartu Tanda Penduduk (KTP)</th>
                    <td>{{$dataCmb->ktp}}</td>
                </tr>
                <tr>
                    <th>Foto</th>
                    <td>{{$dataCmb->foto}}</td>
                </tr>
                <tr>
                    <th>Registrasi/Pengantar Pendaftaran Online</th>
                    <td>{{$dataCmb->pengantar}}</td>
                </tr>
                <tr>
                    <th>Nama Dosen</th>
                    <td>{{$dataCmb->nama_dosen}}</td>
                </tr>
                <tr>
                    <th>NIDN</th>
                    <td>{{$dataCmb->nidnk}}</td>
                </tr>
                <tr>
                    <th>Nama Staf</th>
                    <td>{{$dataCmb->nama_staf}}</td>
                </tr>
                <tr>
                    <th>NIK (Pegawai Staf)</th>
                    <td>{{$dataCmb->nik_staf}}</td>
                </tr>
                <tr>
                    <th>Nama Mahasiswa</th>
                    <td>{{$dataCmb->nama_mhs}}</td>
                </tr>
                <tr>
                    <th>NPM</th>
                    <td>{{$dataCmb->nim}}</td>
                </tr>
                <tr>
                    <th>Informasi dari</th>
                    <td>{{$dataCmb->sumber_info}}</td>
                </tr>
                <tr>
                    <th>Tanggal Pendaftaran</th>
                    <td>{{$dataCmb->created_at}}</td>
                </tr>

                  </tbody>
                </table>
                <br>
                    <center>
                        <form action="{{$dataCmb->id_register}}/edit" class="d-inline">
                            <button type="submit" class="btn btn-primary"><i class="fas fa-edit"></i> Ubah</button>
                        </form>
                        <form action="/datamhs/{{$dataCmb->id_register}}" method="post" class="d-inline" id="delete">
                            @method('delete')
                            @csrf

                         </form>
                         <button type="submit" onclick="hapus()" class="btn btn-danger"><i class="fas fa-trash-alt"></i> Hapus</button>
                        <br>
                        <a href="{{url('/datamhs')}}" class="badge badge-warning mt-1" style="font-size:20px; width:175px"><i class="fas fa-arrow-circle-left"></i> Kembali</a>


                    </center>
                    <script>
                         function hapus(){
                            Swal.fire({
                            title: 'Kamu Yakin?',
                            text: "Anda tidak akan dapat mengembalikan ini!",
                            icon: 'warning',
                            showCancelButton: true,
                            confirmButtonColor: '#3085d6',
                            cancelButtonColor: '#d33',
                            confirmButtonText: 'Ya,Hapus!'
                            }).then((result) => {
                            if (result.isConfirmed)
                            {
                                $('#delete').submit();

                            }
                            })
                         }
                        </script>

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
