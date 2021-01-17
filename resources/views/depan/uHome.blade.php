@extends('depan.master')
@section('title','PMB STMIK Sumedang')
@section('home','active')
@section('home_color','color: #e6a50a')
@section('contain')
<!-- Content Wrapper. Contains page content -->
<!-- Content Wrapper. Contains page content -->

    <div class="jumbotron">
      </div>
      <div class="container">
        <div class="row" style="text-align:center">
          <div class="col-sm-4 mb-4">
              <a href="">
              <img src="{{asset('AdminLTE/dist/img/stmik.png')}}" alt="" width="25%" style="background-color:#1B3058;border:5px solid #1B3058;border-radius:100%;padding:15px;transition:.5s">
            <h4>TEKNIK INFORMATIKA (S1)</h4>
            <h5>TERKAKREDITASI B</h5>
        </a>
          </div>
          <div class="col-sm-4 mb-4">
              <a href="">
            <img src="{{asset('AdminLTE/dist/img/stmik.png')}}" alt="" width="25%" style="background-color:#1B3058;border:5px solid #1B3058;border-radius:100%;padding:15px;transition:.5s">
            <h4>SISTEM INFORMASI (S1)</h4>
            <h5>TERKAKREDITASI B</h5>
        </a>
          </div>
          <div class="col-sm-4 mb-4">
              <a href="">
            <img src="{{asset('AdminLTE/dist/img/stmik.png')}}" alt="" width="25%" style="background-color:#1B3058;border:5px solid #1B3058;border-radius:100%;padding:15px;transition:.5s">
            <h4>MANAJEMEN INFORMATIKA (D3)</h4>
            <h5>TERKAKREDITASI B</h5>
        </a>
          </div>
        </div>
      </div>

      <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel"data-bs-interval="6000">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{asset('AdminLTE/dist/img/Layer-1.png')}}" class="d-block w-100" alt="">
          </div>
          <div class="carousel-item">
            <img src="{{asset('AdminLTE/dist/img/Layer-1.png')}}" class="d-block w-100" alt="">
          </div>
          <div class="carousel-item">
            <img src="{{asset('AdminLTE/dist/img/Layer-1.png')}}" class="d-block w-100" alt="...">
          </div>
        </div>
      </div>














@endsection
