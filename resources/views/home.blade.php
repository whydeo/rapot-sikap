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
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
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
<head>
  <link rel="stylesheet" type="text/css" href="{!! asset('assets/css/style.css') !!}">
</head> 
<style>
  body {
      background-color:#B8DFD8;
}

*{margin: 0px auto;}
html,body{
    height: 100%;
}

#container{
    min-height: 100%;
    position: relative;
}

.header{
    background: #0cf;
    padding: 10px;
}

.content{
    padding: 10px;
}

.footer{
    width: 100%;
    height: 50px;
    padding-left: 10px;
    line-height: 50px;
    background: rgb(12, 11, 11);
    color: #fff;
    position: absolute;
    bottom: 0px;
}
</style>  
<body>
  <nav>
    <div class="wrapper">

    </div>
  </nav>
  <div class="wrapper">
    <section id="home">
      <img src="img1"/>
      <div class="kolom">
        <p class="deskripsi"><h2>Welcome</h2></p>
        <div class="h2"><h1>Website Penilaian Karakter Siswa</h1></div>
        <p><h6>SMK BAGIMU NEGERIKU SEMARANG</h6></p>
      </div>
        
      </div>
    </section>
  </div>
  <div class="footer mt-0">
    <center>Copyright by Deo Gabriel Delila</center>
 </div>
</body>

@endsection
