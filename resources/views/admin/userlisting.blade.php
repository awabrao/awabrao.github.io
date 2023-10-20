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
        <h1 class="fs-1 text-center">Total Users <br></h1>
        <h1 class="fs-1 text-center">{{$users->count()}}</h1>
            </div>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">User Type</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user )
                  <tr>
                    <th scope="row">{{$user->id}}</th>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->usertype}}</td>
                  </tr>
                  @endforeach
                  
                  
                </tbody>
              </table>
   
</body>
</html>