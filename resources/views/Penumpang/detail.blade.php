@extends('layouts.main')

@section('container')

<h4 align="left" style="margin-top: 2cm">Detail Data Penumpang</h4>

<form class="row g-3">
  <div class="col-md-6">
    <label for="" class="form-label">No Pendaftaran</label>
    <input type="text" class="form-control" id="no_pendaftaran" value="{{$penumpang->no_pendaftaran}}" readonly>
  </div>
    <div class="col-md-6">
      <label for="" class="form-label">Nama</label>
      <input type="text" class="form-control" id="nama" value=" {{ $penumpang->nama}} " readonly>  
    </div>
    <div class="col-12">
      <label for="" class="form-label">Alamat</label>
      <input type="text" class="form-control" id="alamat" value="{{$penumpang["alamat"] }}" readonly>
    </div>
    <div class="col-12">
      <label for="" class="form-label">Tujuan</label>
      <input type="text" class="form-control" id="tujuan" value="{{$penumpang->tujuan->tujuan  }}" readonly>
    </div>
    <div class="col-md-6">
        <label for="" class="form-label">Tanggal Keberangkatan</label>
        <input type="text" class="form-control" id="tanggal" value="{{$penumpang["tanggal"]}}" readonly>
      </div>
  
      {!! QrCode::size(100)->generate('wa.me/6282243460612') !!}
          
      
    
   

</form>
<a href="/Penumpang/all" class="btn btn-primary m-3" >Kembali</a>
<div class="modal-footer">
@endsection