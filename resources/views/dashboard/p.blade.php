@extends('dashboard.layouts.main')
@section('container')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&family=Poppins:wght@500&display=swap"
        rel="stylesheet">
    <br>
    <h3 class="text-center" style="font-family: 'Poppins';"><b>Daftar Penumpang</b></h3>
    @if (session()->has('succes'))
        <div class="alert alert-success col-lg-12" role="alert">
            {{ session('succes') }}
        </div>
    @endif
    <table class="table table-light table-striped text-left ">

        <div class="row">
            <div class="col-md-2">
                <a href="/dashboard/penumpang/create" class="btn btn-outline-primary" role="button"
                    style="width:120px,height:20px;font-family: 'Montserrat';">Tambah Data</a>
            </div>


            <div class="col-md-10">
                <div class="row">
                    <form action="/dashboard/p" method="GET">
                        <div class="col-md-4">
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

                        <div class="col-md-6">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search...." name="search"
                                    value="{{ request('search') }}">

                                <div class="col-md-2"><button class="btn btn-dark" type="submit" style="margin-left: 2px"
                                        id="button-addon2">Search</button></div>
                            </div>
                        </div>
                    </form>
                 
                        <div class="col-md-2" >
                            <a class="btn btn-outline-success" type="button" href="/dashboard/p" >
                                <i class="fa fa-refresh " aria-hidden="true"></i>
                            </a>
                        </div>
              

                </div>
            </div>
        </div>
            <br>
            <tr class="text-center" style="font-family: 'Poppins';">

                <th>
                    <h5>ID</h5>
                </th>
                <th>
                    <h5>No Pendaftaran</h5>
                </th>
                <th>
                    <h5>Nama</h5>
                </th>
                <th>
                    <h5>Tanggal Keberangkatan</h5>
                </th>
                <th>
                    <h5>Alamat</h5>
                </th>
                <th>
                    <h5>QR CODE</h5>
                </th>
                <th>
                    <h5>Action</h5>
                </th>

            </tr>
            @if ($daftar_penumpang->count())
                <tbody> 


                    <?php foreach($daftar_penumpang as $penumpang) { ?>
                    <tr class="text-center">

                        <th style="font-family: 'Montserrat';">{{ $penumpang->id }}</li>
                        <th style="font-family: 'Montserrat';">{{ $penumpang->no_pendaftaran }}</li>
                        <th style="font-family: 'Montserrat';">{{ $penumpang->nama }}</li>
                        <th style="font-family: 'Montserrat';">{{ $penumpang->tanggal }}</li>
                        <th style="font-family: 'Montserrat';">{{ $penumpang->alamat }}</li>
                        <th >{!! QrCode::size(60)->generate('{{$penumpang->nama}}') !!}</li>


                        <td>
                            <a type="button" style="font-family: 'Poppins';" class="btn btn-outline-info"
                                href="/dashboard/penumpang/detail/{{ $penumpang->id }}">Detail</a>
                            <a type="button" style="font-family: 'Poppins';" class="btn btn-outline-success"
                                href="/dashboard/penumpang/edit/{{ $penumpang->id }}">Edit</a>
                            <form action="/dashboard/penumpang/delete/{{ $penumpang->id }}" method="post"
                                class="d-inline">
                                @method('delete')
                                @csrf
                                <button style="font-family: 'Poppins';" class="btn btn-outline-danger"
                                    onclick="return confirm('Yakin Mau Hapus ?')">Hapus</button>
                            </form>
                    </tr>

                    <?php } ?>
                </tbody>
            @else
                <tbody> 
                    <tr>
                        <td colspan="8" align="center">Data tidak ditemukan</td>
                    </tr>
                </tbody>
            @endif
    </table>
    {{ $daftar_penumpang->links('pagination::bootstrap-5') }}
@endsection
