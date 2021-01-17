@extends('admin.main')
@section('title','Kelola Akun|STMIK Sumedang')
@section('lainnya','active')
@section('8','active')
@section('contain')
<!-- Content Wrapper. Contains page content -->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Kelola Akun </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/home')}}">Home</a></li>
              <li class="breadcrumb-item active">Data Akun</li>
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
              <div class="card-body" >
                <table id="example" class="table table-bordered table-hover">
                    <thead class="bg-dark">
                        <tr>
                          <th>No.</th>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Role</th>
                          <th>Aksi</th>

                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($user as $data)
                        <tr>
                        <td scope="row">{{$loop->iteration}}</td>
                          <td>{{$data->name}}</td>
                          <td>{{$data->email}}</td>
                          <td>{{$data->role}}</td>
                          <td>
                              {{-- <center>
                                <form action="/beasiswa/{{$data->id_beasiswa}}" method="post" id="delete{{$data->id_beasiswa}}">
                                    @method('delete')
                                    @csrf
                                </form>
                                <button class="btn btn-danger" onclick="deleteConfirmation({{$data->id_beasiswa}})"style="width:100px;border-radius:20px"><i class="fas fa-trash-alt"></i> Delete</button>
                                <form action="/beasiswa/{{$data->id_beasiswa}}/edit" class="d-inline">
                                    <button type="submit"class="btn btn-warning" style="width:100px;border-radius:20px"><i class="fas fa-edit"></i> Ubah</button>
                                </form>
                            </center> --}}

                          </td>
                        </tr>
                        @endforeach



                        </tbody>
                        <tfoot class="bg-dark">
                        <tr>
                            <th>No.</th>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Role</th>
                          <th>Aksi</th>
                        </tr>
                        </tfoot>
                      </table>





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
