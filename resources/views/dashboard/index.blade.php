@extends('dashboard.layouts.main')
@section('container')
<style>
   
    
    
        .d .h {
            font-family: 'Poppins';
            display: grid;
            align-items: center;
            justify-content: center;       
            font-size: 50px;
            font-weight: 500;
     
        
    }
    </style>

    <div class="d">
        <h1 class="h"> Selamat Datang, {{ Auth()->user()->name }}</h1>
    </div>
@endsection