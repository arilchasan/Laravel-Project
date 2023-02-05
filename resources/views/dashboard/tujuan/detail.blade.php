@extends('dashboard.layouts.main')

@section('container')

<h1 align="center">Daftar Tujuan</h1>

<form class="row g-3">
    <div class="col-md-6">
      <label for="" class="form-label">Kode</label>
      <input type="text" class="form-control" id="kode" name="kode" value="{{$tujuan->kode}}" readonly>
    </div>
    <div class="col-md-6">
      <label for="" class="form-label">Jenis Kereta</label>
      <input type="text" class="form-control" id="kereta" value="{{$tujuan->kereta}}" readonly>
    </div>
    <div class="col-12">
      <label for="" class="form-label">Tujuan</label>
      <input type="text" class="form-control" id="tujuan" value="{{$tujuan->tujuan}}" readonly>
    </div>
    
    <div class="form-group">
      <label for="" class="form-label">Daftar Penumpang</label>
      @foreach ($tujuan->penumpang as $murid)
          <ul class="list-group " style="margin-bottom: 10px">
              <li class="list-group-item col-md-3">{{ $murid->nama }}</li>
          </ul>
      @endforeach
  </div>

</form>
<a href="/dashboard/t" class="btn btn-outline-dark m-3" >Kembali</a>
<div class="modal-footer">
@endsection