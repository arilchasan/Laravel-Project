@extends('layouts.main')
@section('container')
<link rel="stylesheet" href="{{ asset('/css/tujuan.css') }}">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&family=Poppins:wght@400&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <h3 class="text-center" style="margin-top: 30px;font-weight:bold">Daftar Tujuan</h3>
    
    {{-- <table class="table table-light table-striped text-left " > --}}
            {{-- <tr class="text-center">
                <th><h5>Kode</h5></th>
                <th><h5>Kereta</h5></th>
                <th><h5>Tujuan</h5></th>
                <th><h5>Penumpang</h5></th>
                <th><h5>Action</h5></th>
                
                
            </tr>
        </thead> --}}
        {{-- <tbody > --}}
        
           <?php foreach($data_tujuan as $tujuan) { ?>
                {{-- <tr class="text-center">
                    
                    <th>{{$tujuan->kode}}</li>
                    <th>{{$tujuan->kereta }}</li>
                    <th>{{$tujuan->tujuan }}</li>
                      <th style="width: 300px"> 
                          @foreach ($tujuan->penumpang as $i)
                          <ul class="list-group">
                              <li class="list-group-item">{{ $i->nama }}</li>
                          </ul>
                      @endforeach</li> 
               
                   
                    <td>
                   <a type="button" class="btn btn-outline-info" href="detail/{{$tujuan->kode}}" >Detail</a>
                    --}}
                    <div class="container" style="padding: 10px">

                    
                    <div class="card">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="text" style="padding: 40px">
                                        <h3>Daftar Nama Penumpang</h3>
                                        @foreach ($tujuan->penumpang as $i)
                                        <ul class="list-group" style="padding: 10px">
                                            <li class="list-group-item">{{ $i->nama }}</li>
                                        </ul>
                                    @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="container">
                                <div class="col text-center">
                                    <br>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="300" height="380" fill="currentColor" class="bi bi-train-front" viewBox="0 0 16 16">
                                        <path d="M5.621 1.485c1.815-.454 2.943-.454 4.758 0 .784.196 1.743.673 2.527 1.119.688.39 1.094 1.148 1.094 1.979V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V4.583c0-.831.406-1.588 1.094-1.98.784-.445 1.744-.922 2.527-1.118Zm5-.97C8.647.02 7.353.02 5.38.515c-.924.23-1.982.766-2.78 1.22C1.566 2.322 1 3.432 1 4.582V13.5A2.5 2.5 0 0 0 3.5 16h9a2.5 2.5 0 0 0 2.5-2.5V4.583c0-1.15-.565-2.26-1.6-2.849-.797-.453-1.855-.988-2.779-1.22ZM5 13a1 1 0 1 1-2 0 1 1 0 0 1 2 0Zm0 0a1 1 0 1 1 2 0 1 1 0 0 1-2 0Zm7 1a1 1 0 1 0-1-1 1 1 0 1 0-2 0 1 1 0 0 0 2 0 1 1 0 0 0 1 1ZM4.5 5a.5.5 0 0 0-.5.5v2a.5.5 0 0 0 .5.5h3V5h-3Zm4 0v3h3a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 0-.5-.5h-3ZM3 5.5A1.5 1.5 0 0 1 4.5 4h7A1.5 1.5 0 0 1 13 5.5v2A1.5 1.5 0 0 1 11.5 9h-7A1.5 1.5 0 0 1 3 7.5v-2ZM6.5 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3Z"/>
                                      </svg>
                                </div>
                                
                                <div class="col text-center">
                                    <h3 class="card-text">{{$tujuan->kereta}}</h3>
                                    <span class="card-text">{{$tujuan->tujuan}}</span>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                  {{-- </tbody> --}}
                  <?php } ?> 
                {{-- </table> --}}
                
                {{ $data_tujuan->links('pagination::bootstrap-5')}}  

                
                                

@endsection


