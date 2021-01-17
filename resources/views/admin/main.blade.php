
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('AdminLTE/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('AdminLTE/dist/css/adminlte.min.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">



    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset('AdminLTE/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('AdminLTE/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    {{-- sweetalert --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

{{--  --}}
<!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<!-- Theme style -->
{{-- <link rel="stylesheet" href="{{asset('AdminLTE/plugins/dist/css/adminlte.min.css')}}"> --}}
<!-- summernote -->
<link rel="stylesheet" href="{{asset('AdminLTE/plugins/summernote/summernote-bs4.css')}}">
{{-- lightbox --}}
<link rel="stylesheet" href="{{asset('AdminLTE/plugins/ekko-lightbox/ekko-lightbox.css')}}">

{{-- galerystyle --}}
<link rel="stylesheet" href="{{asset('AdminLTE/dist/css/galerystyle.css')}}">


<link rel="icon" type="image/png" href="{{url('AdminLTE/dist/img/stmik.png')}}">
  <title>@yield('title')</title>
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
    <div class="intro" style="background-image: url('/AdminLTE/dist/img/Layer-1.png');background-size: cover;opacity: 7%; height:300px;position:absolute;width:100%;">
    </div>
  <nav
  class="main-header navbar navbar-expand navbar-dark"
  style="background-color: #133f6b"
>
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"
        ><i class="fas fa-bars fa-lg"></i
      ></a>
    </li>
    <li class="nav-item @yield('home')">
    <a href="{{url('/home')}}" class="nav-link"style="@yield('home_color')"><i class="fas fa-home fa-lg"> <b class="d-none d-none d-sm-inline-block ">Home</b></i></a>

    </li>

  </ul>

  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">
    <!-- Notifications Dropdown Menu -->
    <li class="nav-item dropdown">
      <a class="nav-link" data-toggle="dropdown" href="#">
        <i class="far fa-bell"></i>
        <span class="badge badge-danger navbar-badge">15</span>
      </a>
      <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
        <span class="dropdown-item dropdown-header">15 Notifications</span>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item">
          <i class="fas fa-envelope mr-2"></i> 4 new messages
          <span class="float-right text-muted text-sm">3 mins</span>
        </a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item">
          <i class="fas fa-users mr-2"></i> 8 friend requests
          <span class="float-right text-muted text-sm">12 hours</span>
        </a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item">
          <i class="fas fa-file mr-2"></i> 3 new reports
          <span class="float-right text-muted text-sm">2 days</span>
        </a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item dropdown-footer"
          >See All Notifications</a
        >
      </div>
    </li>

    <li class="nav-item dropdown mt-1">
    <a class="nav-link dropdown-toggle d-inline" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
     <img src="/{{auth()->user()->image}}" class="img-circle elevation-2 "  alt="" style="width:30px;height:30px">
     <span class="d-sm-inline-block d-none"><p class="d-inline" >{{auth()->user()->name}}</p></span> </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Tutorial HTML</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="{{url('/logout')}}"><i class="fas fa-sign-out-alt"></i> <span>Sign Out</span></a>
        </div>
        <img src="" alt="">
      </li>
    {{-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="" class="img-circle elevation-2" alt="" />
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div> --}}

  </ul>
</nav>

  <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <a href=""class="brand-link">
        <img
          src="{{url('AdminLTE/dist/img/stmik.png')}}"
          alt=""
          class="brand-image img-circle elevation-3"
          style="opacity: 0.8"
        />
        <span class="brand-text font-weight-light" style="font-size: 18px"
          ><b>PMB STMIK SUMEDANG</b></span>
        </a>
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul
            class="nav nav-pills nav-sidebar flex-column"
            data-widget="treeview"
            role="menu"
            data-accordion="false"
          >
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
        @if(auth()->user()->role == 'admin')
            <li class="nav-item has-treeview menu-open">
              <a href="#" class="nav-link @yield('dashboard')">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Dashboard
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{url('/datamhs')}}"class="nav-link @yield('1')"><i class="fas fa-users nav-icon"></i><p>Data Mahasiswa Baru</p></a>
                </li>
                <li class="nav-item">
                    <a href="{{url('/beasiswa')}}"class="nav-link @yield('3')" ><i class="far fa-money-bill-alt nav-icon"></i> <p>Beasiswa</p></a>
                </li>
                <li class="nav-item">
                    <a href="{{url('/biayaStudi')}}"class="nav-link @yield('4')"><i class="fas fa-graduation-cap nav-icon"></i> <p>Biaya Studi</p></a>
                </li>
                <li class="nav-item">
                    <a href="{{url('/fasilitas')}}"class="nav-link @yield('5')"><i class="far fa-building nav-icon"></i> <p>Fasilitas</p></a>
                </li>
                <li class="nav-item">
                    <a href="{{url('/ukm')}}"class="nav-link @yield('6')"><i class="fas fa-users nav-icon"></i><p>UKM</p></a>
                </li>
                <li class="nav-item">
                    <a href="{{url('/download')}}"class="nav-link @yield('7')"><i class="fas fa-download nav-icon"></i><p>Downloads</p></a>
                </li>
              </ul>
            </li>
            <li class="nav-item has-treeview menu-open">
              <a href="#" class="nav-link @yield('lainnya')">
                <i class="nav-icon far fa-plus-square"></i>
                <p>
                  Lainnya
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{url('/kelolaAkun')}}"class="nav-link @yield('8')"><i class="far fa-user-circle nav-icon"></i><p>Kelola Akun</p></a>
                </li>
                <li class="nav-item">
                    <a href="{{url('/datasekolah')}}"class="nav-link @yield('9')"><i class="far fa-user-circle nav-icon"></i><p>Data Sekolah</p></a>
                </li>
                <li class="nav-item">
                    <a href=""class="nav-link"><i class="far fa-user-circle nav-icon"></i><p>Testimoni</p></a>
                </li>

                <li class="nav-item">
                    <a href=""class="nav-link"><i class="far fa-user-circle nav-icon"></i><p>FAQ</p></a>
                </li>


              </ul>
            </li>
            @endif
          </ul>
        </nav>
      </div>
    </aside>



  @yield('contain')

  <footer class="main-footer" style="background-color: #23427F;border-top:5px solid #FFB400">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 1.0.0
    </div>
    <strong>Copyright &copy; 2021. STMIK SUMEDANG.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->





<!-- jQuery -->
<script src="{{asset('AdminLTE/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<script src="{{asset('AdminLTE/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('AdminLTE/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('AdminLTE/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('AdminLTE/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>


{{-- filterizr --}}
<script src="{{asset('AdminLTE/plugins/ekko-lightbox/ekko-lightbox.min.js')}}"></script>
<script src="{{asset('AdminLTE/plugins/filterizr/jquery.filterizr.min.js')}}"></script>


<!-- AdminLTE App -->
<script src="{{asset('AdminLTE/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('AdminLTE/dist/js/demo.js')}}"></script>
<!-- Summernote -->
<script src="{{asset('AdminLTE/plugins/summernote/summernote-bs4.min.js')}}"></script>

<script>
  $(function () {
    // Summernote
    $('.textarea').summernote()
  })
// </script>

<script>
    $(function () {
      $("#example").DataTable({
        "responsive": true,
        "autoWidth": false,
      });
    });
  </script>




</body>
</html>







