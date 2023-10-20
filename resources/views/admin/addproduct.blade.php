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
    <!-- ------------ Add Product -->
    @if (\Session::has('msg'))
    <script>
      alert("{!! session::get('msg') !!}");
    </script>
    
      
    @endif
  @include('components.Bootstrap.addprod')
  
  
  
    <!-- ------------ Add Product -->
    
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
      integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
      integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
  </body>
  
  </html>