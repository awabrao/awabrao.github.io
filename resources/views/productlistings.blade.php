<!doctype html>
<html lang="en">

<head>
  <title>Admin Panel</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>
<body>
    <header>
      <nav class="navbar navbar-expand-sm navbar-light bg-light">
            <div class="container">
              <a class="navbar-brand" href="/home">Dashboard</a>
            <a class="navbar-brand" href="/addproduct">Add Product</a>
            <a class ="navbar-brand" href="productlisting">Product Listings</a>
            <a class="navbar-brand" href="orderlisting">Orders</a>
            <a class="navbar-brand" href="customorderlist">Custom Orders</a>
            <a class="navbar-brand" href="userlisting">Users</a>
              
        </div>
        
      </nav>    
    </header>
    @if (\Session::has('success'))
    <script>
      alert("{!! session::get('success') !!}");
    </script>
    
      
    @endif
    
    <div class="bg-success text-light border border-3 border-success ">
        <h1 class="fs-1 text-center">Total Products <br></h1>
        <h1 class="fs-1 text-center">{{$products->count()}}</h1>
            </div>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Model</th>
                    <th scope="col">Ram</th>
                    <th scope="col">Hard Disk</th>
                    <th scope="col">Hard Disk Type</th>
                    <th scope="col">Price</th>
                    <th scope="col">Update</th>
                    <th scope="col">Delete</th>

                  </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product )
                    <form action="updateproducts" method="POST">
                      @csrf
                  <tr>
                    <td scope="row"><input class="form-control" name="id" type="text" value="{{$product->id}}"></td>
                    <td><input class="form-control" type="text" name="name" value="{{$product->ProductName}}"></td>
                    <td><input class="form-control" type="text" name="brand" value="{{$product->ProductBrand}}"></td>
                    <td><input class="form-control" type="text" name="ram" value="{{$product->Ram}}"></td>
                    <td><input class="form-control" type="text" name="hard" value="{{$product->Hard}}"></td>
                    <td><input class="form-control" type="text" name="harddisktype" value="{{$product->HardDiskType}}"></td>
                    <td><input class="form-control" type="text" name="price" value="{{$product->ProductPrice}}"></td>
                    <td><input class="btn btn-primary" type="submit" value="Update"></td> </form>
                    <td><form action="delete" method="POST">@csrf<input type="hidden" name="id" value="{{$product->id}}"><input class="btn btn-danger" type="submit" value="Delete"></form></td>
                  </tr>
                 
                  @endforeach
                  
                  
                </tbody>
              </table>
   
</body>
</html>