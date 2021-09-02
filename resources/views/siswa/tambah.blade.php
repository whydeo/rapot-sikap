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
              <a class="nav-link" href="/home">Home <span class="sr-only">(current)</span></a>
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
                <a class="nav-link" href="/siswa">siswa <span class="sr-only">(current)</span></a>
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
  
      

 <form action="/siswa/simpan" method="post">
  {{ csrf_field() }}
  <div class="field_wrapper">
  <div class="form-group">
      <div class="row">
      <div class="col-md-10">
             <table>
               <td>
                 <th> <input class="form-control" placeholder="nama" type="text" name="absen[]" value=""/>
                 </th>
                 <th> <input class="form-control" placeholder="nama" type="text" name="nama[]" value=""/>
                 </th>
                 <th> <input class="form-control" placeholder="nama" type="text" name="kelas[]" value=""/>
                 </th>
                 <th> <input class="form-control" placeholder="nama" type="text" name="jk[]" value=""/>
                 </th>
                
               </td>
             </table>
      </div>
      <div class="col-md-2">
              <a class="btn btn-success" href="javascript:void(0);" id="add_button" title="Add field">TAMBAH</a>
      </div>           
      </div>
      </div>
  </div>
  <button class="btn btn-lg btn-primary" type="submit">SIMPAN</a>

    
  <script type="text/javascript">
  $(document).ready(function(){
      var maxField = 10; //Input fields increment limitation
      var addButton = $('#add_button'); //Add button selector
      var wrapper = $('.field_wrapper'); //Input field wrapper
      var fieldHTML = '<div class="form-group add"><div class="row">';
      fieldHTML=fieldHTML + '<div class="col-md-10"><input class="form-control" placeholder="Bahasa Pemrograman" type="text" name="nama[]" /></div>';
      fieldHTML=fieldHTML + '<div class="col-md-2"><a href="javascript:void(0);" class="remove_button btn btn-danger">HAPUS</a></div>';
      fieldHTML=fieldHTML + '</div></div>'; 
      var x = 1; //Initial field counter is 1
       
      //Once add button is clicked
      $(addButton).click(function(){
          //Check maximum number of input fields
          if(x < maxField){ 
              x++; //Increment field counter
              $(wrapper).append(fieldHTML); //Add field html
          }
      });
       
      //Once remove button is clicked
      $(wrapper).on('click', '.remove_button', function(e){
          e.preventDefault();
          $(this).parent('').parent('').remove(); //Remove field html
          x--; //Decrement field counter
      });
  });
  </script>
  </div>
@endsection
