<nav class="navbar navbar-expand-lg navbar-dark  bg-transparent  " >
  <div class="container-fluid">
    <a class="navbar-brand" href="/">AHSAN COMPUTERS</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link fs-5 " aria-current="page" href="/">Home</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link fs-5 " href="ca">Custom Ordering</a>
        </li> 
      </ul>
      
      
      
      
      <form class="d-flex" action="/" method="get">
        @csrf
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 border rounded border-outline-light"><li class="nav-item dropdown">
          <a class="nav-link btn  dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Categories
          </a>
          <ul class="dropdown-menu border border-light" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item fs-5" href="laptop">Laptop</a></li>
            <li><a class="dropdown-item fs-5" href="pc">PC</a></li>
            <li><a class="dropdown-item fs-5 " href="accessories">Accessories</a></li>
          </ul>
        </li></ul>
        <input class="form-control ms-2 me-2 border border-light" name="search" type="text"    placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-light" type="submit">Search</button>
      </form>
      
      <div class="ms-5 navbar-nav">
        @if (Route::has('login'))
            <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                @auth
               
                    
                    <ul class="navbar-nav"><li><a href="{{ url('/home') }}" class="font-semibold nav-link btn ">Dashboard</a></li><li class="nav-item"><a class="nav-link btn" href="{{ route('shopping.cart') }}">
                      <i class="fa-solid fa-cart-shopping"></i> Cart <span class="badge text-bg-danger">{{ count((array) session('cart')) }}</span>
                  </a></li></ul>
                      
                 
                @else
                    <a href="{{ route('login') }}" class="btn btn-outline-light ">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="btn  btn-outline-light">Register</a>
                    @endif
                @endauth
            </div>
            
       
    </div>@endif
   
    
    </div>
  </div>
  
</nav>
