@extends('layouts.main')

@section('container')

<!Doctype html>
<html lang="en">
  <link rel="stylesheet" href="{{ asset('/css/log.css') }}">
  @if (session()->has('succes'))
<div class="alert alert-success col-md-5 mt-5 mx-auto" role="alert">
  {{session ('succes')}}
</div> 
@endif
 
  <head>
    

    <style>
     
    </style>

    

  </head>
  <body class="text-center">
    <div class="wrapper">
      <h2>Login</h2>
      <form method="post" action="/login/auth">
       @csrf
        <div class="input-box">
          <input type="email" placeholder="Email" name="email" value="{{ old('email') }}" required>
        </div>
        <div class="input-box">
          <input type="password" placeholder="Create password"  name="password" value="{{ old('password') }}" required>
        </div>
      
        <div class="input-box button">
          <input type="Submit" value="Login">
        </div>
        <div class="text">
          <h3>Belum punya Akun? <a href="/register/all"> Daftar Sekarang</a></h3>
        </div>
      </form>
    </div>
  </body>
  </html>
  @endsection

  {{-- <main class="form-signin w-100 m-auto">
    <form method="post" action="/login/auth">
        @csrf
       
        <h1 class="h3 mt-5 mb-3 fw-normal">Log In</h1>

        <p>Belum Memiliki Akun?<a  href="/register/all" class="text-decoration-none text-blue"> Registrasi</a></p>

        <div class="form-floating">
            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com"
                name="email" value="{{ old('email') }}">
            <label for="floatingInput">Email</label>
        </div>

        <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
            <label for="floatingPassword" value="{{ old('password') }}">Password</label>
        </div>

        <br>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
        

      </form>
    </main>  --}}