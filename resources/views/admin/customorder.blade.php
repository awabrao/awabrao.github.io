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
                    <th scope="col">Processor</th>
                    <th scope="col">Generation</th>
                    <th scope="col">Ram</th>
                    <th scope="col">Hard</th>
                    <th scope="col">Hard Disk</th>
                    <th scope="col">Graphics Card</th>
                    <th scope="col">Case</th>
                    <th scope="col">Extras</th>
                    <th scope="col">User ID</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $order )
                  <tr>
                   
                    <td>{{$order->processor}}</td>
                    <td>{{$order->generation}}</td>
                    <td>{{$order->ram}}</td>
                    <td>{{$order->hard}}</td>
                    <td>{{$order->harddisktype}}</td>
                    <td>{{$order->graphicscard}}</td>
                    <td>{{$order->case}}</td>
                    <td>{{$order->extras}}</td>
                    <td>{{$order->user}}</td>
                  </tr>
                  @endforeach
                  
                  
                </tbody>
              </table>
   
</body>
</html>