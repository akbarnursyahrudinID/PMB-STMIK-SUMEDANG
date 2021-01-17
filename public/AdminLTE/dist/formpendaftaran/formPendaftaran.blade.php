<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap Multi Step Form with Progress Bar Example </title>
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
    <link rel="stylesheet" href="css/style.css">
	<!-- Demo CSS -->
	<link rel="stylesheet" href="css/demo.css">
  
  </head>
  <body>
 <header class="intro" style="background-image: url('Layer-1.png');background-size: cover;opacity: 5%; height:300px">
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
  <form id="msform"> 
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
        <label><input class="radio" type="radio" name="optradio"> Regular</label>
        <label><input type="radio" name="optradio"> Pindahan</label>
      </div>
      

      <div class="form-group">
        <input type="text" class="form-control"placeholder="Masukan NIK !">
      </div>
      <div class="form-group fg_2"> 
        <input type="text" class="form-control" placeholder="Masukan Nama Lengkap !">
      </div> 
    </div>
    <div class="form-group fg_2"> 
      <input type="text" class="form-control" placeholder="Masukan Tempat Lahir !">
    </div>
    <div class="form-group fg_2"> 
      <h5> Tanggal Lahir :</h5>
      <input type="date" class="form-control">
    </div>
    <div class="form-group fg_2">
      <h5>Jenis Kelamin:</h5>
      <label class="mr-2"><input type="radio" name="optradio"> Laki-Laki</label>
      <label><input type="radio" name="optradio"> Perempuan</label>
    </div>
   
    <div class="form-group fg_2">
      <h5>Agama:</h5>
      <select class="form-select form-control product_select"" id="inputGroupSelect01" name="agama">
        <option selected>Pilih Agama</option>
        <option value="Islam">Islam</option>
        <option value="KristenProtestan">Kristen Protestan</option>
        <option value="KristenKatolik">KristenKatolik</option>
        <option value="Hindu">Hindu</option>
        <option value="Budha">Budha</option>
      </select>
    </div>
    <div class="form-group fg_2"> 
      <h5>Alamat:</h5>
  <textarea class="form-control" rows="5" id="alamat"></textarea>
    </div>
    <div class="form-group fg_2">
      <h5> Provinsi:</h5>
      <select class="form-select form-control"  name="">
        <option selected>Pilih Provinsi</option>
      </select>
    </div>
    <div class="form-group fg_2">
      <h5> Kabupaten:</h5>
      <select class="form-select form-control"  name="">
        <option selected>Pilih Kabupaten</option>
      </select>
    </div>
    <div class="form-group fg_2">
      <h5>Kecamatan:</h5>
      <select class="form-select form-control"  name="">
        <option selected>Pilih Kecamatan</option>
      </select>
    </div>
    <div class="form-group fg_2">
      <h5>Desa:</h5>
      <select class="form-select form-control"  name="">
        <option selected>Pilih Desa</option>
      </select>
    </div>
    <div class="form-group fg_3"> 
      <input type="text" class="form-control" placeholder="Masukan Kode Protestan!">
    </div>
    
      
      <a href="#2"class="next action-button mt-5">Continue</a>

    </fieldset>  
    <fieldset  id="2">
      <h3>Verify Your Identity</h3>
      <h6>Please upload any of these documents to verify your Identity.</h6>
      <div class="form-group">
        <label><h5>Status Perkawinan:</h5> </label>
        <select class="form-select form-control"name="st_perkawinan">
          <option selected>Pilih Status</option>
          <option value="Belum Menikah">Belum Menikah</option>
          <option value="Menikah">Menikah</option>
        </select>
      </div>
      <div class="form-group">
        <label for=""><h5>Kewarganegaraan :</h5></label>
        <br>
        <label class="mr-2"><input type="radio" name="optradio"> WNI</label>
        <label><input type="radio" name="optradio"> WNA</label>
      </div>
      <div class="form-group fg_2"> 
        <label for=""><h5>Nama Ibu Kandung</h5></label>
        <input type="text" class="form-control">
      </div>
      <div class="form-group fg_2"> 
        <label for=""><h5>Nomor Handphone</h5></label>
        <input type="text" class="form-control" placeholder="Masukan No HP yang Aktif">
      </div>
      <div class="form-group fg_2"> 
        <label for=""><h5>Alamat Email</h5></label>
        <input type="text" class="form-control" placeholder="">
      </div>
      <div class="form-group">
        <label class="mt-3"><h5>Dimana Anda Tinggal</h5> </label>
        <select class="form-select form-control" name="menetap">
          <option selected>Pilih ...</option>
          <option value="Dengan Orang Tua">Dengan Orang Tua</option>
          <option value="Dengan Saudara">Dengan Saudara</option>
          <option value="Kost">Kost</option>
        </select>
      </div>
      <div class="form-group">
        <label class="mt-3" ><h5>Alat Transportasi</h5> </label>
        <select class="form-select form-control" name="transportasi">
          <option selected>Pilih ...</option>
          <option value="Mobil">Mobil</option>
          <option value="Motor">Motor</option>
          <option value="Angkutan Umum">Angkutan Umum</option>
          <option value="Lain-lain">Lain-lain</option>
        </select>
      </div>
      <div class="form-group">
        <label class="mt-3"><h5>Pendidikan Terakhir</h5> </label>
        <select class="form-select form-control" name="pendidikan_akhir">
          <option selected>Pilih ...</option>
          <option value="SMA">SMA</option>
          <option value="SMK">SMK</option>
          <option value="MA">MA</option>
        </select>
      </div>
      <div class="form-group">
        <label class="mt-3" ><h5>Kabupaten Tempat Sekolah Asal</h5> </label>
        <select class="form-select form-control" name="transportasi">
          <option selected>Pilih ...</option>
          <option value="Mobil">Mobil</option>
        </select>
      </div>
      <div class="form-group">
        <label class="mt-3" ><h5>Sekolah Asal</h5> </label>
        <select class="form-select form-control" name="transportasi">
          <option selected>Pilih ...</option>
          <option value="Mobil">Mobil</option>
        </select>
      </div>
      <div class="form-group">
        <label class="mt-3" ><h5>Jurusan Asal</h5> </label>
        <select class="form-select form-control" name="transportasi">
          <option selected>Pilih ...</option>
          <option value="Mobil">Mobil</option>
        </select>
      </div>
      <div class="form-group fg_2"> 
        <label for=""><h5>Tahun Lulus</h5></label>
        <input type="number" class="form-control" value="2000">
      </div>
      <div class="form-group">
        <label class="mt-3" ><h5>Pilihan Prodi</h5> </label>
        <select class="form-select form-control" name="transportasi">
          <option selected>Pilih ...</option>
          <option value="Mobil">Mobil</option>
        </select>
      </div>
       <div class="form-group">
           <label  class="mt-3"><h5>Tanda Kelulusan/Ijazah</h5></label>
          <input type="file" class="form-control"name="gambar">
       </div>
       <div class="form-group">
        <label  class="mt-3"><h5>Tanda Kelulusan/Ijazah</h5></label>
       <input type="file" class="form-control"name="gambar">
    </div>
    <div class="form-group">
      <label  class="mt-3"><h5>Foto</h5></label>
     <input type="file" class="form-control"name="gambar">
  </div>
  <div class="form-group fg_3">
    <label><h5>Kartu Keluarga (KK)</h5></label>
   <input type="file" class="form-control"name="gambar">
</div>
        
      
     
      
      <a href="#1" class="action-button previous previous_button>Back"></a>
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
        <li><input class="form-check-input" type="checkbox" value="" aria-label="Checkbox for following text input">Dosen</li>
        <li><input class="form-check-input" type="checkbox" value="" aria-label="Checkbox for following text input">Staf</li>
        <li><input class="form-check-input" type="checkbox" value="" aria-label="Checkbox for following text input">Mahasiswa</li>
        <li><input class="form-check-input" type="checkbox" value="" aria-label="Checkbox for following text input">Staf</li>
      </ul>
    </div>
    <h6>Silahkan anda ceklist dan isi form ini jika saat melakukan pendaftaran didampingi.</h6>
    
    <div class="form-group">
      <h5>Nama Dosen</h5>
      <input type="text" class="form-control"name="gambar">
  </div>

  <div class="form-group">
    <h5>NIDN</h5>
    <input type="text" class="form-control"name="gambar">
  </div>
 

<div class="form-group">
  <h5>Nama Staf</h5>
  <input type="text" class="form-control"name="gambar">
</div>
>

<div class="form-group">
  <h5>NIK Staf</h5>
  <input type="text" class="form-control"name="gambar">
</div>


<div class="form-group">
  <h5>Nama Mahasiswa</h5>
  <input type="text" class="form-control"name="gambar">
</div>


<div class="form-group">
  <h5>NIM</h5>
  <input type="text" class="form-control"name="gambar">
</div>


<div class="form-group">
  <h5>Informasi dari</h5>
</div>
<div class=" form-group fg_3 ml-5">
<ul>
  <li><input class="form-check-input" type="checkbox" value="" aria-label="Checkbox for following text input">Internet</li>
  <li><input class="form-check-input" type="checkbox" value="" aria-label="Checkbox for following text input">Koran</li>
  <li><input class="form-check-input" type="checkbox" value="" aria-label="Checkbox for following text input">Teman</li>
  <li><input class="form-check-input" type="checkbox" value="" aria-label="Checkbox for following text input">Brosur</li>
  <li><input class="form-check-input" type="checkbox" value="" aria-label="Checkbox for following text input">Kunjungan Ke Sekolah</li>
</ul>
</div>



     
      <button type="button" class="action-button previous previous_button">Back</button> 
      <a href="#" class="action-button">Finish</a> 
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
    <script src="js/script.js"></script>
  
  </body>
</html>