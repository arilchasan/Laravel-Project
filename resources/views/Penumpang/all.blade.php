@extends('layouts.main')
@section('container')
<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    {{-- <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet"> --}}
    <link rel="stylesheet" href="https://kit.fontawesome.com/76557bdb99.css" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&family=Poppins:wght@400&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="/img/logbg.png" />
    <link rel="stylesheet" href="{{ asset('/css/all.css') }}">
        
    <h3 class="text-center" style="margin-top: 30px;font-weight:bold">Data Penumpang</h3>
     @if (session()->has('succes'))
      <div class="alert alert-success col-lg-12" role="alert">
        {{session ('succes')}}
      </div>       
     @endif 
     <table class="table table-light table-striped text-left " >
     <div class="row">       
        <div class="col-md-12 text-center">
            <div class="row">
                <form action="/Penumpang/all" method="GET">
                    <div class="col-md-3">
                        <select name="tujuan_id" class="form-select">
                            <option selected value="" name="tujuan_id" style="text-align: center" id="tujuan_id">
                                TUJUAN</option>

                            @foreach ($tujuan as $class)
                                @if (request('tujuan_id') == $class->id)
                                    <option name="tujuan_id" value="{{ $class->id }}" selected>{{ $class->tujuan }}
                                    </option>
                                @else
                                    <option name="tujuan_id" value="{{ $class->id }}">{{ $class->tujuan }}</option>
                                @endif
                            @endforeach

                        </select>
                    </div>

                     <div class="col-md-7">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search...." name="search"
                                value="{{ request('search') }}">

                            <div class="col-md-2"><button class="btn btn-dark" type="submit" style="margin-left: 2px"
                                    id="button-addon2">Search</button></div>
                        </div>
                    </div>
                </form>
             
                    <div class="col-md-2" >
                        <a class="btn btn-outline-success" type="button" href="/Penumpang/all" >
                          <i class="fa fa-refresh " aria-hidden="true"></i>
                        </a>
                    </div>
          

            </div>
        </div>
    </div>
    
    @if ($daftar_penumpang->count())
        
    
     <div class="row">
                <?php foreach($daftar_penumpang as $penumpang) { ?>
                    <div class="col-sm-6 col-md-4">
                        <div class="card border-black">
                           <div class="card-img-top" style="text-align: center;padding:20px">{!! QrCode::size(200)->generate('wa.me/6282243460612') !!}</div>
                            <div class="card-body">
                                <h5 class="card-title">{{$penumpang->nama}}</h5>
                                <hr>
                                <div class="row">                          
                                    <div class="col-sm-8">
                                            <p class="card-text">No Pendaftaran: {{$penumpang->no_pendaftaran}}</p>
                                            <span class="card-text">{{$penumpang->tanggal}}</span>
                                        </div>
                                        <div class="col-sm-4">
                                            <a  class="btn btn-outline-warning" align="" href="/Penumpang/detail/ {{$penumpang->id}}" >Detail</a>
                                        </div>
                                    </div>  
                            </div>
                        </div>
                      
                    </div>
                  <?php } ?>
                </div>
                @else
                <div class="alert alert-danger col-lg-12" role="alert" style="margin-top: 10px">
                    Data Tidak Ditemukan
                  </div>
                @endif
                {{ $daftar_penumpang->links('pagination::bootstrap-5')}}  
<script src="https://kit.fontawesome.com/76557bdb99.js" crossorigin="anonymous"></script>
@endsection


