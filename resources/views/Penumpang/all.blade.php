@extends('layouts.main')
@section('container')

    <h3 class="text-center" style="margin-top: 10px">Data Penumpang</h3>
     @if (session()->has('succes'))
      <div class="alert alert-success col-lg-12" role="alert">
        {{session ('succes')}}
      </div> 
      
     @endif 
    <table class="table table-light table-striped text-left " >
      {{-- <a href="create" class="btn btn-primary" role="button" style="width:120px,height:20px">Tambah Data</a> --}}
      <br>
    <br>
            <tr class="text-center">
         
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
                    
                    <th>{{$penumpang->id }}</li>
                    <th>{{$penumpang->no_pendaftaran }}</li>
                    <th>{{$penumpang->nama }}</li>
                    <th>{{$penumpang->tanggal }}</li>
                    <th>{{$penumpang->alamat }}</li>
                 

                    <td>
                    <a type="button" class="btn btn-outline-info" href="detail/{{$penumpang->id}}" >Detail</a>
                    
                    {{-- <a type="button" class="btn btn-outline-info" href="detail/{{$penumpang->id}}" >Detail</a>
                    <a type="button" class="btn btn-outline-success" href="edit/{{$penumpang->id}}" >Edit</a>
                    <form action="/Penumpang/delete/{{$penumpang->id}}" method="post" class="d-inline">
                      @method('delete')
                      @csrf
                      <button class="btn btn-outline-danger" onclick="return confirm('Yakin Mau Hapus ?')">Hapus</button>
                    </form>  --}}
                    </tr>  
                                
                    <?php } ?>

@endsection


