<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
  
    <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item" style="display: d-blok p-sm-5">
            @auth
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false" type="button">
                Selamat Datang, {{ Auth()->user()->name }}
              </a>
              
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/">
                  <i class="fa fa-home" style="width: 30px"></i>
                    <span data-feather="home" class="align-text-bottom" style="font-weight:700"></span>
                    Home
                
                </a>
              </li>
              </ul> 
            @endauth
          </li>  
            <li class="nav-item">
                <div class="flex-row" style="display:inline-flex">
                  
                  <a class="nav-link " aria-current="page" href="/dashboard/index">
                    <i class="fa-solid fa-table-columns" style="width: 30px"></i>
                    <span data-feather="home" class="align-text-bottom"></span>
                    Dashboard
                </a>
              </div>
                
            </li>
            <li class="nav-item">
              <div class="flex-row" style="display:inline-flex">
                
                <a class="nav-link  " aria-current="page" href="/dashboard/p">
                  <i class="fa-solid fa-arrows-down-to-people" style="width: 30px"></i>
                  <span data-feather="home" class="align-text-bottom" ></span>
                  Penumpang
              </a>
            </div>
            </li>
            <li class="nav-item">
              <div class="flex-row" style="display:inline-flex">               
                <a class="nav-link  " aria-current="page" href="/dashboard/t">
                  <i class="fa-solid fa-landmark" style="width: 30px"></i>
                  <span data-feather="home" class="align-text-bottom"></span>
                  Tujuan
              </a>
            </div>
            </li>
            <li class="nav-item">
              <div class="flex-row" style="display:inline-flex">               
                <a class="nav-link  " aria-current="page" href="/dashboard/g">
                  <i class="fa-solid fa-table-columns" style="width: 30px"></i>
                  <span data-feather="home" class="align-text-bottom"></span>
                  Gerbong
              </a>
            </div>
            </li>

           

            <h6
                class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
                <span>LAPORAN</span>
                <a class="link-secondary" href="#" aria-label="Add a new report">
                    <span data-feather="plus-circle" class="align-text-bottom"></span>
                </a>
                <i class="fa-regular fa-file-plus-minus" style="width: 10px"></i>
            </h6>
            <ul class="nav flex-column mb-2">
                <li class="nav-item">
                  <div class="flex-row" style="display:inline-flex">
                    <a class="nav-link" href="#">
                      <i class="fa-sharp fa-solid fa-bug" style="width: 30px"></i>
                        <span data-feather="file-text" class="align-text-bottom"></span>
                        Current month
                    </a>
                    </div>
                </li>
                
                  </ul> 
            {{-- <ul class="nav flex-column mb-2 ms-auto fixed-bottom">
              <li class="nav-item" style="display: d-blok p-sm-5">
                @auth
                <li class="nav-item dropup">
                  <a class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false" type="button">
                    Hi, {{ Auth()->user()->name }}
                  </a>
                  
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="/"><i class="bi bi-layout-text-sidebar-reverse">Home</i></a></li>
                    
                @endauth
              </li>   
                  </ul> --}}
                  
                  
                 
                    
    </div>
</nav>
