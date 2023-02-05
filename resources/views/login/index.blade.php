@extends('layouts.main')

@section('container')

<!Doctype html>
<html lang="en">
  
  @if (session()->has('succes'))
<div class="alert alert-success col-md-5 mt-5 mx-auto" role="alert">
  {{session ('succes')}}
</div> 
@endif
 
  <head>
    

    <style>
     html,
    body {
      height: 100%;
    }

    body {
      align-items: center;
      padding-bottom: 40px;
      background-color: #f5f5f5;
    }

    .form-signin {
      max-width: 330px;
      padding: 15px;
    }

    .form-signin .form-floating:focus-within {
      z-index: 2;
    }

    .form-signin input[type="name"] {
      border-bottom-right-radius: 0;
      border-bottom-left-radius: 0;
    }

    .form-signin input[type="email"] {
      border-bottom-right-radius: 0;
      border-bottom-left-radius: 0;
    }

    .form-signin input[type="password"] {
      border-top-left-radius: 0;
      border-top-right-radius: 0;
    }
   

      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>

    

  </head>
  <body class="text-center">
    
    <main class="form-signin w-100 m-auto">
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
      </main>



    
  </body>
</html>
@endsection