@extends('dashboard.layouts.main')

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
      {!! QrCode::size(200)->generate('{{$penumpang->nama}}') !!}
   

</form>
<a href="/dashboard/p" class="btn btn-outline-dark m-3" >Kembali</a>
<div class="modal-footer">
@endsection