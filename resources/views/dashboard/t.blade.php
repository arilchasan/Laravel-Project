@extends('dashboard.layouts.main')
@section('container')

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&family=Poppins:wght@500&display=swap" rel="stylesheet">
<br>
<h3 class="text-center" style="margin-top: 5px;font-family: 'Montserrat';"><b>Daftar Tujuan</b></h3>
    
<table class="table table-light table-striped text-left " >

  <br>

        <tr class="text-center" style="font-family: 'Poppins';">
            <th><h5>Kode</h5></th>
            <th><h5>Kereta</h5></th>
            <th><h5>Tujuan</h5></th>
            <th><h5>Penumpang</h5></th>
            <th><h5>Action</h5></th>
            
            
        </tr>
    </thead>
    <tbody >
    
       <?php foreach($data_tujuan as $tujuan) { ?>
            <tr class="text-center">
                
                <th style="font-family: 'Montserrat';">{{$tujuan->kode}}</li>
                <th style="font-family: 'Montserrat';">{{$tujuan->kereta }}</li>
                <th style="font-family: 'Montserrat';">{{$tujuan->tujuan }}</li>
                  <th style="width: 300px" style="font-family: 'Montserrat';"> 
                      @foreach ($tujuan->penumpang as $i)
                      <ul class="list-group" style="font-family: 'Montserrat';font-size:15px">
                          <li class="list-group-item">{{ $i->nama }}</li>
                      </ul>
                  @endforeach</li> 
                {{-- <th>{{$tujuan->penumpang->nama }}</li> --}}
               
                <td>
               <a type="button" style="font-family: 'Poppins';" class="btn btn-outline-info" href="/dashboard/tujuan/detail/{{$tujuan->kode}}" >Detail</a>
                {{-- <a type="button" class="btn btn-outline-success" href="" >Edit</a>
                <form action="" method="post" class="d-inline">
                  @method('delete')
                  @csrf
                  <button class="btn btn-outline-danger" onclick="return confirm('Apakah anda yakin ?')">Hapus</button>
                </form> 
                </tr>   --}}
    </tbody>
    <?php } ?> 
</table>
{{ $data_tujuan->links('pagination::bootstrap-5') }}           
@endsection