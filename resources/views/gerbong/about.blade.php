@extends('layouts.main')
@section('container')

    <h3 class="text-center" style="margin-top: 5px">Daftar Gerbong</h3>
    
    <table class="table table-light table-striped text-left " >

      <br>
    <br>
            <tr class="text-center"> 
                <th><h5>Kode</h5></th>
                <th><h5>Nama</h5></th>
                <th><h5>Jumlah Kursi</h5></th>
      
                <th><h5>Action</h5></th>
                
                
            </tr>
        </thead>
        <tbody >
        
           <?php foreach($data as $gerbong) { ?>
                <tr class="text-center">
                    
                    <th>{{$gerbong->kode}}</li>
                    <th>{{$gerbong->nama }}</li>
                    <th>{{$gerbong->jumlah_kursi }}</li>
                    
                   
                    <td>
                   <a type="button" class="btn btn-outline-info" href="detail/{{$gerbong->kode}}" >Detail</a>
                   {{-- <a type="button" class="btn btn-outline-info" href="detail/{{$gerbong->kode}}" >Detail</a> --}}
                    {{-- <a type="button" class="btn btn-outline-success" href="" >Edit</a>
                    <form action="" method="post" class="d-inline">
                      @method('delete')
                      @csrf
                      <button class="btn btn-outline-danger" onclick="return confirm('Apakah anda yakin ?')">Hapus</button>
                    </form> 
                    </tr>   --}}
                                
                    <?php } ?> 

@endsection


