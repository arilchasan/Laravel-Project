@extends('layouts.main')
@section('container')

    <h3 class="text-center" style="margin-top: 30px">Daftar Tujuan</h3>
    
    <table class="table table-light table-striped text-left " >

      <br>
    <br>
            <tr class="text-center">
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
                    
                    <th>{{$tujuan->kode}}</li>
                    <th>{{$tujuan->kereta }}</li>
                    <th>{{$tujuan->tujuan }}</li>
                      <th style="width: 300px"> 
                          @foreach ($tujuan->penumpang as $i)
                          <ul class="list-group">
                              <li class="list-group-item">{{ $i->nama }}</li>
                          </ul>
                      @endforeach</li> 
                    {{-- <th>{{$tujuan->penumpang->nama }}</li> --}}
                   
                    <td>
                   <a type="button" class="btn btn-outline-info" href="detail/{{$tujuan->kode}}" >Detail</a>
                   {{-- <a type="button" class="btn btn-outline-info" href="detail/{{$tujuan->kode}}" >Detail</a> --}}
                    {{-- <a type="button" class="btn btn-outline-success" href="" >Edit</a>
                    <form action="" method="post" class="d-inline">
                      @method('delete')
                      @csrf
                      <button class="btn btn-outline-danger" onclick="return confirm('Apakah anda yakin ?')">Hapus</button>
                    </form> 
                    </tr>   --}}
                                
                    <?php } ?> 

@endsection


