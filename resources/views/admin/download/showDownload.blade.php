@extends('admin.main')
@section('title','Downloads|STMIK Sumedang')
@section('dashboard','active')
@section('7','active')
@section('contain')
<!-- Content Wrapper. Contains page content -->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Downloads</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/home')}}">Home</a></li>
              <li class="breadcrumb-item"><a href="{{url('/download')}}"">Downloads</a></li>
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
                <h3 class="ml-3">{{$download->nama_file}}</h3>
                <h6 class="ml-3"> By admin / In /{{$download->created_at}}</h6>
              </div>
              <!-- /.card-header   -->
              <div class="card-body"style="overflow-x:auto;">
                <table class="table table-bordered table-hover" >
                  <tbody>
                    <tr>
                        <th>File Name</th>
                        <td>{{$download->nama_file}}</td>
                    </tr>
                    <tr>
                        <th>File Type</th>
                        <td>{{$download->type}}</td>
                    </tr>
                    <tr>
                        <th>Categories</th>
                        <td>{{$download->kategori}}</td>
                    </tr>
                    <tr>
                        <th>Create Date</th>
                        <td>{{$download->created_at}}</td>
                    </tr>
                    <tr>
                        <th>Last Update</th>
                        <td>{{$download->updated_at}}</td>
                    </tr>


                  </tbody>
                </table>
                <center>
                <a href="{{asset('img/download/'.$download->file)}}" target="_blank" class="btn btn-primary mt-3"><i class="fas fa-download"></i> Download File</a>
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
