@extends('dashboard.layouts.main')
@section('container')

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&family=Poppins:wght@500&display=swap" rel="stylesheet">
<br>
<h3 class="text-center" style="font-family: 'Montserrat';"><b>Daftar Penumpang</b></h3>
@if (session()->has('succes'))
 <div class="alert alert-success col-lg-12" role="alert">
   {{session ('succes')}}
 </div> 
 
@endif 
<table class="table table-light table-striped text-left " >
    <a href="/dashboard/penumpang/create" class="btn btn-outline-primary" role="button" style="width:120px,height:20px;font-family: 'Montserrat';">Tambah Data</a>
    <br>
  <br>
          <tr class="text-center" style="font-family: 'Poppins';">
       
              <th><h5>ID</h5></th>
              <th><h5>No Pendaftaran</h5></th>
              <th><h5>Nama</h5></th>
              <th><h5>Tanggal Keberangkatan</h5></th>
              <th><h5>Alamat</h5></th>               
              <th><h5>Action</h5></th>
              
          </tr>
      </thead>
      <tbody >
      
          <?php foreach($daftar_penumpang as $penumpang) { ?>
              <tr class="text-center">
                  
                  <th style="font-family: 'Montserrat';">{{$penumpang->id }}</li>
                  <th style="font-family: 'Montserrat';">{{$penumpang->no_pendaftaran }}</li>
                  <th style="font-family: 'Montserrat';">{{$penumpang->nama }}</li>
                  <th style="font-family: 'Montserrat';">{{$penumpang->tanggal }}</li>
                  <th style="font-family: 'Montserrat';">{{$penumpang->alamat }}</li>
               

                  <td>
                  <a type="button" style="font-family: 'Poppins';" class="btn btn-outline-info" href="/dashboard/penumpang/detail/{{$penumpang->id}}" >Detail</a>
                  <a type="button" style="font-family: 'Poppins';" class="btn btn-outline-success" href="/dashboard/penumpang/edit/{{$penumpang->id}}" >Edit</a>
                  <form action="/dashboard/penumpang/delete/{{$penumpang->id}}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button style="font-family: 'Poppins';" class="btn btn-outline-danger" onclick="return confirm('Yakin Mau Hapus ?')">Hapus</button>
                  </form> 
                  </tr>  
                              
                  <?php } ?>
@endsection