@extends('layouts.main')


@section('container')
    <!DOCTYPE html>
    <html lang="en">

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>

    <body>
        @if (session()->has('succes'))
            <div class="alert alert-success col-md-5 mt-5 mx-auto" role="alert">
                {{ session('success') }}
            </div>
        @endif
        <h2 align="center" style="margin-top: 8cm">Anwaril Chasan Qodli</h2>
    </body>

    </html>
@endsection
