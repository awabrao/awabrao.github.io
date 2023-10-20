@include('Header')
<nav class="navbar navbar-expand-lg navbar-light  bg-light  " >
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
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 border rounded border-outline-success"><li class="nav-item dropdown">
          <a class="nav-link btn  dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Categories
          </a>
          <ul class="dropdown-menu border border-success" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item fs-5" href="laptop">Laptop</a></li>
            <li><a class="dropdown-item fs-5" href="pc">PC</a></li>
            <li><a class="dropdown-item fs-5 " href="accessories">Accessories</a></li>
          </ul>
        </li></ul>
        <input class="form-control ms-2 me-2 border border-success" name="search" type="text"    placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
      
      <div class="ms-5">
        @if (Route::has('login'))
            <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                @auth
                    <a href="{{ url('/home') }}" class="font-semibold  btn btn-outline-success ">Dashboard</a>
                    
                      <a class="btn btn-outline-success" href="{{ route('shopping.cart') }}">
                          <i class="fa-solid fa-cart-shopping"></i> Cart <span class="badge text-bg-danger">{{ count((array) session('cart')) }}</span>
                      </a>
                 
                @else
                    <a href="{{ route('login') }}" class="btn btn-outline-success ">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="btn  btn-outline-success">Register</a>
                    @endif
                @endauth
            </div>
            
       
    </div>@endif
   
    
    </div>
  </div>
  
</nav>




<body>
  <div class="container">
    <div class="row">        
        
        @foreach ($products as $product )
        <div class="col-md-4"><div id="p{{$product->id}}" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" >
      <img src="{{$product->ProductImage}}" class="d-block w-100 "   alt="...">
    </div>
    <div class="carousel-item">
     <img src="{{$product->ProductImage2}}" class="d-block w-100 "   alt="...">
    </div>
    <div class="carousel-item">
    <img src="{{$product->ProductImage3}}" class="d-block w-100 "   alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#p{{$product->id}}" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#p{{$product->id}}" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>
<div class="col-md-6 mb-5"><h1>{{$product->ProductName}}</h1>
<h2>Brand:{{$product->ProductBrand}}</h2>
<p>Ram:{{$product->Ram}}</p>
<p>Hard:{{$product->Hard}} {{$product->HardDiskType}}</p>
<p>Description:{{$product->ProductDescription}}</p>
<h2>Price:{{$product->ProductPrice}}</h2>
<a href="{{ route('addProduct.to.cart', $product->id) }}" class="btn btn-outline-success">Add to cart</a></div>

@endforeach
    </div>
</div>



</body>
@include('components.Bootstrap.footer')