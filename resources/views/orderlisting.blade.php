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
    
    <div class="bg-success text-light border border-3 border-success ">
        <h1 class="fs-1 text-center">Total Orders <br></h1>
        <h1 class="fs-1 text-center">{{$orders->count()}}</h1>
            </div>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Product ID</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Product Model</th>
                    <th scope="col">Product Price</th>
                    <th scope="col">Shipping Address</th>
                    <th scope="col">Mobile Number</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $order )
                  <tr>
                    <th scope="row">{{$order->id}}</th>
                    <td>{{$order->productid}}</td>
                    <td>{{$order->name}}</td>
                    <td>{{$order->model}}</td>
                    <td>{{$order->price}}</td>
                    <td>{{$order->address}}</td>
                    <td>{{$order->number}}</td>
                  </tr>
                  @endforeach
                  
                  
                </tbody>
              </table>
   
</body>
</html>