@extends('layouts.main')

@section('container')

    <!doctype html>
    <html lang="en">
       
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Hugo 0.108.0">
        <title>Signin Template · Bootstrap v5.3</title>

        <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sign-in/">




        <link href="{{ asset('/css/register.css') }}" rel="stylesheet">
        <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

        


        <!-- Custom styles for this template -->
        <link href="sign-in.css" rel="stylesheet">
    </head>

    <body class="text-center">

        <main class="form-signin w-100 m-auto">
            <form method="post" action="/register/add">
                @csrf
                <h1 class="h3 mt-5 mb-3 fw-normal">Register</h1>
                <p>Sudah Memiliki Akun?<a  href="/login" class="text-decoration-none text-blue"> Login</a></p>
                <div class="form-floating">
                    <input type="name" class="form-control" id="floatingPassword" placeholder="Nama" name="name"
                        value="{{ old('name') }}">
                    <label for="floatingPassword">Nama</label>
                </div>
                <div class="form-floating">
                    <input type="email" class="form-control" id="floatingPassword" placeholder="name@example.com"
                        name="email" value="{{ old('email') }}">
                    <label for="floatingPassword">Email</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password"
                        value="{{ old('password') }}">
                    <label for="floatingPassword">Password</label>
                </div>
                <hr>
                <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
               
            </form>
        </main>



    </body>

    </html>
@endsection
