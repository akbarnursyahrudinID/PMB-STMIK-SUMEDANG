<!DOCTYPE html>
<html lang="en">
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="content">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title> Form Pendaftaran </title>
      <!-- Normalize CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
      <!-- Bootstrap 4 CSS -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta.2/css/bootstrap.css'>
      <!-- Telephone Input CSS -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/12.1.2/css/intlTelInput.css'>
      <!-- Icons CSS -->
    <link rel='stylesheet' href='https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css'>
      <!-- Nice Select CSS -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css'>
     <!-- Style CSS -->
    <link rel="stylesheet" href="{{asset('AdminLTE/dist/css/formregistStyle.css')}}">
    <link rel="stylesheet" href="{{asset('AdminLTE/dist/css/registdemo.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


  </head>
  <body>
 <header class="intro" style="background-image: url('{{asset('AdminLTE/dist/img/Layer-1.png')}}');background-size: cover;opacity: 5%; height:300px">
</header>
<div class="action " style="position: absolute;left:25%;right:25%;top:5%;">
  <h1 style="font-size:200%">PMB STMIK SUMEDANG</h1>
  <p style="font-size:100%">GRATIS UANG PENDAFTARAN <br> Tahun Akademik 2020/2021</p>
 <a href="" class="btn back">Back to Home</a>
 </div>







 <main>
  <article>

      <!-- Start Multiform HTML -->
  <section class="multi_step_form">
    <form method="Post" action="/formpendaftaran"  id="msform" enctype="multipart/form-data">
        @csrf
    <!-- Tittle -->
    <div class="tittle">
      <h2>Formulir Pendaftaran Mahasiswa Baru </h2>
      <p>In order to use this service, you have to complete this verification process</p>
    </div>
    <!-- progressbar -->
    <ul id="progressbar">
      <li class="active">Verify Phone</li>
      <li>Upload Documents</li>
      <li>Security Questions</li>
    </ul>
    <!-- fieldsets -->
    <fieldset id="1">
      <h3>Create Security Questions</h3>
      <h6>Please update your account with security questions</h6>

      <div class="form-group">
        <h5>Silahkan Pilih Salahsatu :</h5>
        <label><input class="radio @error('jenis_register')is-invalid @enderror" type="radio" name="jenis_register" value="Regular" >Regular</label>
        <label><input class="radio @error('jenis_register')is-invalid @enderror" type="radio" name="jenis_register" value="Pindahan" > Pindahan</label>
        @error('jenis_register')<div class="invalid-feedback">{{$message}}</div>@enderror
      </div>


      <div class="form-group fg_2">
        <input type="text" class="form-control @error('nik')is-invalid @enderror" name="nik" placeholder="Masukan NIK !" value="{{old('nik')}}" autocomplete="none">
        @error('nik')<div class="invalid-feedback">{{$message}}</div>@enderror
      </div>
      <div class="form-group fg_2">
        <input type="text" class="form-control @error('nama')is-invalid @enderror" name="nama" placeholder="Masukan Nama Lengkap !" value="{{old('nama')}}" autocomplete="none">
        @error('nama')<div class="invalid-feedback">{{$message}}</div>@enderror
      </div>
    </div>
    <div class="form-group fg_2">
      <input type="text" class="form-control @error('tmp_l')is-invalid @enderror" name="tmp_l" placeholder="Masukan Tempat Lahir !" value="{{old('tmp_l')}}" autocomplete="none">
      @error('tmp_l')<div class="invalid-feedback">{{$message}}</div>@enderror
    </div>
    <div class="form-group fg_2">
      <h5> Tanggal Lahir :</h5>
      <input type="date" class="form-control @error('tgl_lahir')is-invalid @enderror" name="tgl_lahir" value="{{old('tgl_lahir')}}">
      @error('tgl_lahir')<div class="invalid-feedback">{{$message}}</div>@enderror
    </div>
    <div class="form-group fg_2">
      <h5>Jenis Kelamin:</h5>
      <label class="mr-2"><input type="radio" class="@error('jk')is-invalid @enderror"name="jk" value="{{old('jk')}}"> Laki-Laki</label>
      <label><input type="radio" class="@error('jk')is-invalid @enderror" name="jk" value="{{old('jk')}}"> Perempuan</label>
      @error('jk')<div class="invalid-feedback">{{$message}}</div>@enderror
    </div>
    <div class="form-group">
      <h5>Agama:</h5>
      <select class=" form-control product_select @error('agama')is-invalid @enderror" id="inputGroupSelect01" name="agama">
        <option selected>{{old('agama')}}</option>
        <option value="Islam">Islam</option>
        <option value="KristenProtestan">Kristen Protestan</option>
        <option value="KristenKatolik">KristenKatolik</option>
        <option value="Hindu">Hindu</option>
        <option value="Budha">Budha</option>
      </select>
      @error('agama')<div class="invalid-feedback">{{$message}}</div>@enderror
    </div>
    <div class="form-group">
      <h5>Alamat:</h5>
  <textarea class="form-control @error('alamat')is-invalid @enderror" name="alamat" rows="5" id="alamat" style="width:99%;height:200px">{{old('alamat')}}</textarea>
  @error('alamat')<div class="invalid-feedback">{{$message}}</div>@enderror
    </div>

    <div class="form-group">
        <h5> Provinsi:</h5>
        <select class="form-control product_select"  name="provinsi"  id="province-dropdown">
          <option selected disabled>-- Pilih Provinsi --</option>
          @foreach ($provinces as $prov)
              <option value="{{$prov->id_provinsi}}">{{$prov->nama_provinsi}}</option>
          @endforeach
        </select>
      </div>
      <div class="form-group">
        <h5> Kabupaten / Kota:</h5>
        <select class="form-control product_select"  name="kabupaten"id="regencie-dropdown">


        </select>
      </div>
      <div class="form-group">
        <h5>Kecamatan:</h5>
        <select class="form-control product_select"  name="kecamatan" id="district-dropdown">



        </select>
      </div>
      <div class="form-group">
        <h5>Desa:</h5>
        <select class="form-control product_select"  name="desa" id="village-dropdown" >


        </select>
      </div>




    <div class="form-group fg_3">
      <input type="text" class="form-control @error('kode_pos')is-invalid @enderror" name="kode_pos"placeholder="Masukan Kode Post!" value="{{old('kode_pos')}}" autocomplete="none">
      @error('kode_pos')<div class="invalid-feedback">{{$message}}</div>@enderror
    </div>


      <a href="#2"class="next action-button mt-5">Continue</a>


    </fieldset>
    <fieldset  id="2">
      <h3>Verify Your Identity</h3>
      <h6>Please upload any of these documents to verify your Identity.</h6>
      <div class="form-group">
        <label><h5>Status Perkawinan:</h5> </label>
        <select class="form-control product_select @error('st_perkawinan')is-invalid @enderror"name="st_perkawinan">
          <option selected>{{old('st_perkawinan')}}</option>
          <option value="Belum Menikah">Belum Menikah</option>
          <option value="Menikah">Menikah</option>
        </select>
        @error('st_perkawinan')<div class="invalid-feedback">{{$message}}</div>@enderror
      </div>
      <div class="form-group">
        <label for=""><h5>Kewarganegaraan :</h5></label>
        <br>
        <label class="mr-2"><input type="radio"class="@error('wara_negara')is-invalid @enderror" name="warga_negara" value="WNI"> WNI</label>
        <label><input type="radio" name="warga_negara" class="@error('wara_negara')is-invalid @enderror" value="WNA"> WNA</label>
        @error('warga_negara')<div class="invalid-feedback">{{$message}}</div>@enderror
      </div>
      <div class="form-group fg_2">
        <label for=""><h5>Nama Ibu Kandung</h5></label>
        <input type="text" class="form-control @error('ibu_kandung')is-invalid @enderror" name="ibu_kandung" value="{{old('ibu_kandung')}}" autocomplete="none">
        @error('ibu_kandung')<div class="invalid-feedback">{{$message}}</div>@enderror
      </div>
      <div class="form-group fg_2">
        <label for=""><h5>Nomor Handphone</h5></label>
        <input type="text" class="form-control @error('nomor_hp')is-invalid @enderror" name="nomor_hp" placeholder="Masukan No HP yang Aktif" value="{{old('nomor_hp')}}" autocomplete="none">
        @error('nomor_hp')<div class="invalid-feedback">{{$message}}</div>@enderror
      </div>
      <div class="form-group fg_2">
        <label for=""><h5>Alamat Email</h5></label>
        <input type="text" class="form-control @error('email')is-invalid @enderror" name="email" placeholder=""value="{{old('email')}}">
        @error('email')<div class="invalid-feedback">{{$message}}</div>@enderror
      </div>
      <div class="form-group">
        <label class="mt-3"><h5>Dimana Anda Tinggal</h5> </label>
        <select class="form-control product_select @error('menetap')is-invalid @enderror" name="menetap">
          <option selected>{{old('menetap')}}</option>
          <option value="Dengan Orang Tua">Dengan Orang Tua</option>
          <option value="Dengan Saudara">Dengan Saudara</option>
          <option value="Kost">Kost</option>
        </select>
        @error('menetap')<div class="invalid-feedback">{{$message}}</div>@enderror
      </div>
      <div class="form-group">
        <label class="mt-3" ><h5>Alat Transportasi</h5> </label>
        <select class="form-control product_select @error('transportasi')is-invalid @enderror" name="transportasi">
          <option selected>{{old('transportasi')}}</option>
          <option value="Mobil">Mobil</option>
          <option value="Motor">Motor</option>
          <option value="Angkutan Umum">Angkutan Umum</option>
          <option value="Lain-lain">Lain-lain</option>
        </select>
        @error('transportasi')<div class="invalid-feedback">{{$message}}</div>@enderror
      </div>
      <div class="form-group">
        <label class="mt-3"><h5>Pendidikan Terakhir</h5> </label>
        <select class="form-control product_select  @error('pendidikan_akhir')is-invalid @enderror" name="pendidikan_akhir">
          <option selected>{{old('pendidikan_akhir')}}</option>
          <option value="SMA">SMA</option>
          <option value="SMK">SMK</option>
          <option value="MA">MA</option>
        </select>
        @error('pendidikan_akhir')<div class="invalid-feedback">{{$message}}</div>@enderror
      </div>
      <div class="form-group">
        <label class="mt-3" ><h5>Kabupaten Tempat Sekolah Asal</h5> </label>
        <select class="form-control product_select" name="">
          <option selected></option>
          <option value="Mobil"></option>
        </select>

      </div>
      <div class="form-group">
        <label class="mt-3" ><h5>Sekolah Asal</h5> </label>
        <select class="form-control product_select @error('sekolah_asal')is-invalid @enderror" name="sekolah_asal">
          <option selected>{{old('sekolah_asal')}}</option>
          <option value="Mobil">Mobil</option>
        </select>
        @error('sekolah_asal')<div class="invalid-feedback">{{$message}}</div>@enderror
      </div>
      <div class="form-group">
        <label class="mt-3" ><h5>Jurusan Asal</h5> </label>
        <select class="form-control product_select @error('jurusan_asal')is-invalid @enderror" name="jurusan_asal">
          <option selected>{{old('jurusan_asal')}}</option>
          <option value="Mobil">Mobil</option>
        </select>
        @error('jurusan_asal')<div class="invalid-feedback">{{$message}}</div>@enderror
      </div>
      <div class="form-group fg_2">
        <label for=""><h5>Tahun Lulus</h5></label>
        <input type="number" class="form-control @error('tahun_lulus')is-invalid @enderror" name="tahun_lulus"value="2000">
        @error('tahun_lulus')<div class="invalid-feedback">{{$message}}</div>@enderror
      </div>
      <div class="form-group">
        <label class="mt-3" ><h5>Pilihan Prodi</h5> </label>
        <select class="form-control product_select @error('pilihan_prodi')is-invalid @enderror" name="pilihan_prodi">
          <option selected>{{old('pilihan_prodi')}}</option>
          <option value="TI">TEKNIK INFORMATIKA (TI)</option>
          <option value="SI">SISTEM INFORMASI (SI)</option>
          <option value="MI">MANAJEMEN INFORMATIKA (MI) (SI)</option>
        </select>
        @error('pilihan_prodi')<div class="invalid-feedback">{{$message}}</div>@enderror
      </div>
       <div class="form-group">
           <label  class="mt-3"><h5>Tanda Kelulusan/Ijazah</h5></label>
          <input type="file" class="form-control @error('tanda_kelulusan')is-invalid @enderror"name="tanda_kelulusan">
          @error('tanda_kelulusan')<div class="invalid-feedback">{{$message}}</div>@enderror
       </div>
       <div class="form-group">
        <label  class="mt-3"><h5>Foto</h5></label>
       <input type="file" class="form-control @error('foto')is-invalid @enderror"name="foto">
       @error('foto')<div class="invalid-feedback">{{$message}}</div>@enderror
    </div>
    <div class="form-group">
      <label  class="mt-3"><h5>Kartu Tanda Penduduk (KTP)</h5></label>
     <input type="file" class="form-control @error('ktp')is-invalid @enderror"name="ktp">
     @error('ktp')<div class="invalid-feedback">{{$message}}</div>@enderror
  </div>
  <div class="form-group fg_3">
    <label><h5>Kartu Keluarga (KK)</h5></label>
   <input type="file" class="form-control  @error('kk')is-invalid @enderror"name="kk">
   @error('kk')<div class="invalid-feedback">{{$message}}</div>@enderror
</div>




      <a href="#1" class="action-button previous previous_button>Back">Back</a>
      <a href="#3" class="next action-button mt-5">Continue</a>

    </fieldset>
    <fieldset id="3">
      <h3>Create Security Questions</h3>
      <h6>Please update your account with security questions</h6>

      <div class="form-group">
        <h5>Registrasi/Pengantar Pendaftaran Online</h5>
      </div>
    <div class="form-group ml-5">
      <ul>
        <li><input class="form-check-input" type="checkbox" name="pengantar" value="Dosen" aria-label="Checkbox for following text input">Dosen</li>
        <li><input class="form-check-input" type="checkbox" name="pengantar" value="Staf" aria-label="Checkbox for following text input">Staf</li>
        <li><input class="form-check-input" type="checkbox" name="pengantar" value="Mahasiswa" aria-label="Checkbox for following text input">Mahasiswa</li>

      </ul>
    </div>
    <h6>Silahkan anda ceklist dan isi form ini jika saat melakukan pendaftaran didampingi.</h6>

    <div class="form-group">
      <h5>Nama Dosen</h5>
      <input type="text" class="form-control"name="nama_dosen" autocomplete="none">
  </div>

  <div class="form-group">
    <h5>NIDN</h5>
    <input type="text" class="form-control"name="nidn"autocomplete="none">
  </div>


<div class="form-group">
  <h5>Nama Staf</h5>
  <input type="text" class="form-control"name="nama_staf"autocomplete="none">
</div>

<div class="form-group">
  <h5>NIK Staf</h5>
  <input type="text" class="form-control"name="nik_staf"autocomplete="none">
</div>


<div class="form-group">
  <h5>Nama Mahasiswa</h5>
  <input type="text" class="form-control"name="nama_mhs"autocomplete="none">
</div>


<div class="form-group">
  <h5>NIM</h5>
  <input type="text" class="form-control"name="nim"autocomplete="none">
</div>


<div class="form-group">
  <h5>Informasi dari</h5>
</div>
<div class=" form-group fg_3 ml-5">
<ul class="@error('sumber_info')is-invalid @enderror" name="sumber_info">
  <li><input class="form-check-input" type="checkbox" value="" aria-label="Checkbox for following text input">Internet</li>
  <li><input class="form-check-input" type="checkbox" value="" aria-label="Checkbox for following text input">Koran</li>
  <li><input class="form-check-input" type="checkbox" value="" aria-label="Checkbox for following text input">Teman</li>
  <li><input class="form-check-input" type="checkbox" value="" aria-label="Checkbox for following text input">Brosur</li>
  <li><input class="form-check-input" type="checkbox" value="" aria-label="Checkbox for following text input">Kunjungan Ke Sekolah</li>
</ul>
@error('sumber_info')<div class="invalid-feedback">{{$message}}</div>@enderror
</div>




      <button type="button" class="action-button previous previous_button">Back</button>
      <button type="submit" class="btn btn-primary" onclick=""><i class="fas fa-send">Daftar</i> </button>
    </fieldset>

  </form>
</section>
      <!-- END Multiform HTML -->
  </article>
 </main>




    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/12.1.2/js/intlTelInput.js'></script>
    <!-- <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js'></script> -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js'></script>
    <script src="{{asset('AdminLTE/dist/js/scriptFormRegist.js')}}"></script>



    <script>
        $(document).ready(function() {
        $('#province-dropdown').on('change', function() {
        var id_provinsi = this.value;
        $("#regencie-dropdown").html('');
        $.ajax({
            url:"{{url('')}}",
        type: "POST",
        data: {
        id_provinsi: id_provinsi,
        _token: '{{csrf_token()}}'
        },
        dataType : 'json',
        success: function(result){
        $.each(result.regencies,function(key,value){
        $("#regencie-dropdown").append('<option value="'+value.id_kabupaten+'">'+value.nama_kabupaten+'</option>');
        });
        $('#district-dropdown').html('<option value="">Select State First</option>');
        }
        });
        });
        $('#regencie-dropdown').on('change', function() {
        var id_kabupaten = this.value;
        $("#district-dropdown").html('');
        $.ajax({
        url:"{{url('get-cities-by-state')}}",
        type: "POST",
        data: {
        id_kabupaten: id_kabupaten,
        _token: '{{csrf_token()}}'
        },
        dataType : 'json',
        success: function(result){
        $.each(result.districs,function(key,value){
        $("#district-dropdown").append('<option value="'+value.id_kecamatan+'">'+value.nama_kecamatan+'</option>');
        });
        }
        });
        });
        });
        </script>



  </body>
</html>
