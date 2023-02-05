@extends('dashboard.layouts.main')

@section('container')
<h4 align="left" style="margin-top: 2cm">Tambah Data Penumpang</h4>

    <div class="col-lg-8">
        <form method="post" action="/dashboard/penumpang/add">
            @csrf
            <div class="mb-3">
                <label for="" class="form-label">No Pendaftaran</label>
                <input type="text" placeholder="Masukkan Nomer Pendaftaran" class="form-control" id="nis"
                    name="no_pendaftaran" value="{{old('no_pendaftaran') }}">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Nama</label>
                <input type="text" placeholder="Masukkan Nama" class="form-control" id="nama" name="nama"
                    value="{{old('nama')}}">
            </div>
            <div class="form-group">
                <label for="" class="form-label">Tanggal Keberangkatan</label>
                <input type="date" class="form-control" id="tanggal" name="tanggal"
                    value="{{ old('tanggal') }}">
            </div>        
            {{-- <label for="tanggal" class="form-label">Tanggal Keberangkatan</label>
        <input class="date form-control" style="width: 250px;" placeholder="YYYY-MM-DD" type="date" >  
            <script type="text/javascript">  
                $('.date').datepicker({  
                format: 'mm-dd-yyyy'  
                });  
            </script>  --}}
            <div class="mb-3">
                <label for="" class="form-label">Tujuan</label>
                <select class="form-select" name="tujuan_id" id="">
                    @foreach ($tujuan as $class)
                        <option name="tujuan_id" value="{{ $class->id }}">{{ $class->tujuan }}></option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" placeholder="Masukkan Alamat" class="form-control" id="alamat" name="alamat"
                    value="{{ old('alamat') }}">
            </div>
            <a  class="btn btn-outline-dark" href="/dashboard/p">Kembali</a>
            <button type="submit" class="btn btn-outline-primary">ADD</button>
        </form>
    </div>
@endsection
