<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.108.0">
    {{-- <title>Latihan Dashboard</title> --}}

    {{-- <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/dashboard/"> --}}

    

    <link rel="stylesheet" href="{{ asset('/css/header.css') }}">  
    {{-- <link href="/css/dashboard.css" rel="stylesheet">     --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">


  </head>

  <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#">Bumblebee <span>Trans</span></a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    {{-- <input class="form-control form-control-dark w-100 rounded-0 border-0" type="text" placeholder="" aria-label="Search"> --}}
    

    <form method="POST" action="/logout">
      @csrf
    <div class="navbar-nav">
      <div class="nav-item text-nowrap">
        <button  class="btn btn-outline-danger" type="submit" style="margin:5px"><b>Logout</b></button>
        
      </div>
    </div>
  </form>
  </header>
  
  
  