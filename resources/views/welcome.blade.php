@include('Header')
    <body class="antialiased " style="background-image: url(ggg.png); background-size:cover; background-attachment: fixed; ">
      


        @include('components.Bootstrap.navbar')
       
        @extends('shop')
        @section('content') @endsection  
        {{-- @include('slider')    --}}
        <div class="container mt-5 mb-5"> 
            <div class="row">@foreach ($products as $product)
              
                <div class="col-md-3 mt-5" >
                    <div class="card glowing-card  " style="width: 16rem;">
                    
                   
                    <div id="p{{$product->id}}" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" >
      <a href="productdetails/{{$product->id}}"><img src="{{$product->ProductImage}}" class="d-block w-100 " height="150px"  alt="..."></a>
    </div>
    <div class="carousel-item">
    <a href="productdetails/{{$product->id}}"> <img src="{{$product->ProductImage2}}" class="d-block w-100 " height="150px"  alt="..."></a>
    </div>
    <div class="carousel-item">
    <a href="productdetails/{{$product->id}}"><img src="{{$product->ProductImage3}}" class="d-block w-100 " height="150px"  alt="..."></a>
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

  
                        <div class="card-body">
                        <div class="fixed-text-container">
  <p class="bold fs-5" style="height:100px"><a href="productdetails/{{$product->id}}" style="text-decoration:none; color:black">{{$product->ProductName}}</a></p>
</div>
                          <h5><a href="productdetails/{{$product->id}}" style="text-decoration:none; color:black">Price:{{$product->ProductPrice}}</a></h5>
                          
                          <a href="{{ route('addProduct.to.cart', $product->id) }}" class="btn btn-outline-success">Add to cart</a>
                        </div>
                      </div>
                </div>@endforeach
             
            </div>
        </div>
        <div class="row"><div class="col-md-6">@if (!isset($search))
        {{$products->links('pagination::bootstrap-5')}}
        @endif </div></div>
        
        @include('components.Bootstrap.footer')
       
        
        
            
        
       

       
