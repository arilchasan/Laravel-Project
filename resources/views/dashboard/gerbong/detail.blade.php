@extends('dashboard.layouts.main')

@section('container')

<h4 align="left" style="margin-top: 2cm">Detail Data Gerbong</h4>

<form class="row g-3">
  <div class="col-md-6">
    <label for="" class="form-label">Kode</label>
    <input type="text" class="form-control" id="id" value="{{$gerbong->kode}}" readonly>
  </div>
    <div class="col-md-6">
      <label for="" class="form-label">Nama</label>
      <input type="text" class="form-control" id="nama" value=" {{ $gerbong->nama}} " readonly>  
    </div>
    <div class="col-12">
      <label for="" class="form-label">Jumlah Kursi</label>
      <input type="text" class="form-control" id="jumlah_kursi" value="{{$gerbong->jumlah_kursi }}" readonly>
    </div>
    
   

</form>
<a href="/dashboard/g" class="btn btn-outline-dark m-3" >Kembali</a>
<div class="modal-footer">
@endsection