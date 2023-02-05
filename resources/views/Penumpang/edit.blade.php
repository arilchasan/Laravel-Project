@extends('Layouts.main')

@section('container')

<h4 align="left" style="margin-top: 2cm">Ubah Data Penumpang</h4>

<div class="col-lg-8" > 
    <form method="post" action="/Penumpang/update/ {{ $penumpang->id }}">
       @csrf        
        <div class="mb-3">
            <label for="no_pendaftaran" class="form-label" >Nomer pendaftaran</label>
            <input type="text"  placeholder="Masukkan No Pendaftaran" class="form-control" id="no_pendaftaran" name="no_pendaftaran" required value="{{old('no_pendaftaran',$penumpang->no_pendaftaran)}} " disabled>
        </div>
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" placeholder="Masukkan Nama" class="form-control" id="nama" name="nama" value="{{old('nama',$penumpang->nama)}}" required>
        </div>
        <div class="form-group">
            <label for="" class="form-label">Tanggal Keberangkatan</label>
            <input type="date" class="form-control" id="tanggal" name="tanggal"
                value="{{ old('tanggal') }}">
        </div>  
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" placeholder="Masukkan Alamat" class="form-control" id="alamat" name="alamat" value="{{old('alamat',$penumpang->alamat)}}" required>
        </div>

        <div class="mb-3">
            <label for="tujuan" class="form-label">Tujuan</label>
           <select class="form-select" name="" id="tujuan_id" >
            @foreach ($tujuan as $class )
                    @if (old('tujuan_id',$penumpang->tujuan_id == $class->id)) 
                    <option name="tujuan_id" value="{{$class->id}}" selected>{{$class->tujuan}}></option>
                    @else
                    <option name="tujuan_id"  value="{{$class->id}}">{{$class->tujuan}}></option>
                    @endif
            @endforeach
           </select>
        </div>
        
        <button type="submit" class="btn btn-primary" >ADD</button>
    </form>
</div>

@endsection