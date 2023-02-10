@extends('dashboard.layouts.main')
@section('container')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&family=Poppins:wght@500&display=swap" rel="stylesheet">
    <h3 class="text-center" style="margin-top: 5px;font-family: 'Montserrat';"><b>Daftar Gerbong</b></h3>
    
    <table class="table table-light table-striped text-left " >

      <br>
    <br>
            <tr class="text-center" style="font-family: 'Poppins';"> 
                <th><h5>Kode</h5></th>
                <th><h5>Nama</h5></th>
                <th><h5>Jumlah Kursi</h5></th>
      
                <th><h5>Action</h5></th>
                
                
            </tr>
        </thead>
        <tbody >
        
           <?php foreach($data as $gerbong) { ?>
                <tr class="text-center">
                    
                    <th style="font-family: 'Montserrat';">{{$gerbong->kode}}</li>
                    <th style="font-family: 'Montserrat';">{{$gerbong->nama }}</li>
                    <th style="font-family: 'Montserrat';">{{$gerbong->jumlah_kursi }}</li>
                    
                   
                    <td>
                   <a type="button" style="font-family: 'Poppins';" class="btn btn-outline-info" href="/dashboard/gerbong/detail/{{$gerbong->id}}" >Detail</a>
                    {{-- <a type="button" class="btn btn-outline-success" href="" >Edit</a>
                    <form action="" method="post" class="d-inline">
                      @method('delete')
                      @csrf
                      <button class="btn btn-outline-danger" onclick="return confirm('Apakah anda yakin ?')">Hapus</button>
                    </form> 
                    </tr>   --}}
                                
                    <?php } ?> 
                  </tbody>
                </table>
                {{ $data->links('pagination::bootstrap-5')}}  

@endsection


