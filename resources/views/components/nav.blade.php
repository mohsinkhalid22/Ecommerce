
<nav class="navbar navbar-expand-lg bg-body-tertiary" style="position:sticky;top:0;z-index:222">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img width="50px" src="https://www.iconpacks.net/icons/2/free-store-icon-2017-thumb.png" alt="">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex justify-content-center align-items-center">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          
          @guest
          <li class="nav-item">
            <a class="nav-link" href="/login">LogIn</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/register">SignUp</a>
          </li>
          @endguest
          
          
          @auth
          <li class="nav-item d-flex">
            <img style="clip-path: circle()" width="40px" src="{{asset('storage/' . auth()->user()->image)}}" alt="">
              <a class="nav-link text-capitalize fw-bold" href="#">Welcome <span style="color:rgb(222, 81, 81)">
                {{ auth()->user()->name}} 
                    </span>
              </a>
          </li>
          <form class="d-flex justify-content-center" action="/logout" method="POST">
            @csrf
            <button style="background:transparent; border:none" class="d-flex justify-content-center" type="submit">
              <i class="bi bi-clipboard2-x-fill fs-1"></i>
            </button>
          </form>
          @endauth

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Update Details</a></li>
              {{-- <li><a class="dropdown-item" href="#">Another action</a></li> --}}
              <li>
                <hr class="dropdown-divider">
              </li>
              {{-- <li><a class="dropdown-item" href="#">Something else here</a></li> --}}
            </ul>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
        <i class="bi bi-cart4" style="cursor: pointer"></i>
        <i class="menu bi bi-list fs-3 ms-5" style="cursor: pointer"></i>
      </div>
    </div>
  </nav>

 