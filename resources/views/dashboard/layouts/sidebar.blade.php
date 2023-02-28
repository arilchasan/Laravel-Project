<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
<link rel="stylesheet" href="{{ asset('/css/side.css') }}">

<aside id="sidebar" class="sidebar">

  <ul class="sidebar-nav" id="sidebar-nav">
    <li class="nav-item" style="display: d-blok p-sm-5">
            @auth
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false" type="button">
                <i class="bi bi-list"></i> Menu
              </a>
              
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/" style="font-weight:bold">
                  <i class="bi bi-house" style="width: 50px;margin-right:10px"></i>
                    <span  class="align-text-bottom" style="font-weight:bold"></span>
                    Home               
                </a>
              </li>
              </ul> 
            @endauth
          </li> 
    <li class="nav-item">
      <a class="nav-link collapsed" href="/dashboard/index">
        <i class="bi bi-grid"></i>
        <span>Dashboard</span>
      </a>
    </li><!-- End Dashboard Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" href="/dashboard/p">
        <i class="bi bi-person-workspace"></i><span>Penumpang</span>
      </a>
      
    </li><!-- End Components Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed"  href="/dashboard/t">
        <i class="bi bi-bus-front-fill"></i><span>Tujuan</span>          
      </a>                                      
    </li><!-- End Forms Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed"  href="/dashboard/g">
        <i class="bi bi-train-front"></i><span>Gerbong</span>
      </a>
    </li><!-- End Tables Nav -->

  </ul>
</aside>
