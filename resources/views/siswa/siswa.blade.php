@extends('layouts.app')

@section('title,dashboard')
  
@yield('breadchrumbs')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li class="active"><i class="fa fa-dashboard"></i></li>
                </ol>
            </div>
        </div>
    </div>
</div>

@endsection
@section('content')
<div class="content mt-0">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Raport Karakter</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" >
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="home">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Jabatan
              </a>
              <div class="dropdown-menu bg-dark " aria-labelledby="navbarDropdown">
                <a class="dropdown-item text-light" href="#">Guru</a>
                <a class="dropdown-item  text-light" href="#">Pembina</a>
                
                <a class="dropdown-item text-light" href="#">Walikelas</a>
                <a class="dropdown-item text-light" href="#">Kepala Sekolah</a>
                <a class="dropdown-item  text-light" href="#">Yayasan</a>
                <a class="dropdown-item  text-light" href="#">BK</a>
                
              </div>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="siswa">siswa <span class="sr-only">(current)</span></a>
              </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </div>
      

   
</div>
</div> 
<body>
  <div class="container">
  
<div class="container">
  <h2>Daftar nama siswa</h2>
  <hr />
  <a class="btn btn-lg btn-success" href="siswa/tambah">tambah siswa</a> <br /><br />
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nama siswa Pemorgraman</th>
      </tr>
    </thead>
    <tbody>
      <table class="table">
        <thead class="thead-dark">
         <tr>
           <th scope="col">No. Absen</th>
           <th scope="col">Nama</th>
           <th scope="col">Kelas</th>
           <th scope="col">JK</th>
           <th scope="col">BERBUDI</th>
           <th scope="col">BERKUALITAS</th>
           <th scope="col">BEDAYA</th>
           <th scope="col">BERHASIL</th>
           <th scope="col">KETERANGAN</th>
           <th>
         </tr>
       </thead>
    @php
    $i=1;
    @endphp
      @foreach($siswa as $data)
      <tr>
        <th scope="row">{{$i++}}</th>
        <td>{{$data->absen}}</td>
        <td>{{$data->nama}}</td>
        <td>{{$data->kelas}}</td>
        <td>{{$data->jk}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
@endsection
