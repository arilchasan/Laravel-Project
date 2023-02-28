@extends('dashboard.layouts.main')
@section('container')
<style>
   
    
    
        .d .h {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            display: grid;
            align-items: center;
            justify-content: center;       
            font-size: 50px;
            font-weight: 500;
            margin-top: 200px
     
        
    }
    </style>

    <div class="d">
        <h1 class="h"> Selamat Datang di Dashboard Admin , <br>
            <center>{{ Auth()->user()->name }}</center></h1>
    </div>
@endsection