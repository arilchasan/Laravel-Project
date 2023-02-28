<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    {{-- <title>Navbar</title> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('/css/nav.css') }}">
        <link rel="icon" type="image/png" href="/img/logbg.png" />
</head>


<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	    	<a class="navbar-brand" href="">Bumblebee <span>Trans</span></a>
	    	
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="fa fa-bars"></span> Menu
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav m-auto">
	        	<li class="nav-item"><a href="/home" class="nav-link">Home</a></li>
	        	<li class="nav-item"><a href="/Penumpang/all" class="nav-link">Penumpang</a></li>
	        	<li class="nav-item"><a href="/Tujuan/tampilan" class="nav-link">Tujuan</a></li>
	          <li class="nav-item"><a href="/gerbong/about" class="nav-link">Gerbong</a></li>
	        </ul>
            <form action="#" class="searchform order-sm-start order-lg-last">
          
            </form>
            <ul class="navbar-nav ms-auto">
                @auth
            
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false" type="button">
                            Hi, {{ Auth()->user()->name }}
                        </a>
            
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/dashboard/index">
                                <i class="bi bi-layout-text-sidebar"></i>  Dashboard </a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <form action="/logout" method="post">
                                    @csrf
                                    <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout</button>
                                </form>
                            </li>
                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="/login" class="bi bi-box-arrow-in-right">Login</a>
                            </li>
                        </ul>
                    </li>
            
                @endauth
            </ul>
	      </div>
	    </div>
	  </nav>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>


</html>



{{-- <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark ">
  
      <div class="container-fluid">
        <a class="navbar-brand" href="/home">ATrans</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>        
    
      <div class="collapse navbar-collapse" id="navbarTogglerDemo02" style="text-align: center">
        <ul class="navbar-nav" >
         
          <li class="nav-item active">
            <a class="nav-link" href="/home" >Home <span class="sr-only"></span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/Penumpang/all">Penumpang</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/Tujuan/tampilan">Tujuan</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="/gerbong/about" >Gerbong</a>
          </li>
          {{-- <li class="nav-item">
            <a class="nav-link" href="/dashboard/index" >Dashboard</a>
          </li> --}}
{{-- </ul>


<ul class="navbar-nav ms-auto">
    @auth

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown"
                aria-expanded="false" type="button">
                Hi, {{ Auth()->user()->name }}
            </a>

            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/dashboard/index"><i
                            class="bi bi-layout-text-sidebar-reverse">Dashboard</i></a></li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li>
                    <form action="/logout" method="post">
                        @csrf
                        <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right">Logout</i></button>
                    </form>
                </li>
            @else
                <li class="nav-item">
                    <a class="nav-link" href="/login" class="bi bi-box-arrow-in-right">Login</a>
                </li>
            </ul>
        </li>

    @endauth
</ul>


</div>
</nav> --}} 
