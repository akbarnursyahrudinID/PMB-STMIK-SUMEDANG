@extends('admin.main')
@section('title','UKM|STMIK Sumedang')
@section('dashboard','active')
@section('6','active')
@section('contain')
<!-- Content Wrapper. Contains page content -->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Unit Kegiatan Mahasiswa (UKM)</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/home')}}">Home</a></li>
              <li class="breadcrumb-item"><a href="{{url('/ukm')}}">UKM</a></li>
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
              <div class="card-header">
                {{-- <h3 class="card-title mt-3">Data Mahasiswa Baru</h3> --}}
              </div>
              <!-- /.card-header -->
              <div class="card-body" style="overflow-x:auto;">
            <center>
                <img src="{{asset('img/ukm/'.$ukm->logo)}}" alt="" style="width:200px;height:200px">
                <h1>{{$ukm->nama_ukm}}</h1>
                <div class="col-sm-10">
                    <p style="text-align:justify"><?php
                echo "{$ukm->tentang}";
                ?></p>
                </div>

            <div class="col-md-10">
                <iframe width="100%" height="315" style="border-radius:15px" src="https://{{$ukm->video}}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </center>





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
