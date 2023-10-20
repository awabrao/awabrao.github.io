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
    <style>
        /* Custom CSS for glowing cards */
        .glowing-card {
            position: relative;
            border: none;
            border-radius: 10px;
            padding: 20px;
            background: #ffffff;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            transition: transform 0.2s, box-shadow 0.2s, opacity 0.2s;
        }

        .glowing-card:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
        }

        /* Glowing effect */
        @keyframes glowing {
            0% {
                box-shadow: 0 0 5px 0 rgba(0, 0, 0, 0.2);
            }
            50% {
                box-shadow: 0 0 20px 10px rgba(255, 223, 186, 0.5);
            }
            100% {
                box-shadow: 0 0 5px 0 rgba(0, 0, 0, 0.2);
            }
        }

        .glowing-card:hover {
            animation: glowing 1s infinite;
        }
    </style>

</head>
<body class="bg-dark">
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
<x-app-layout>
</x-app-layout>
<div class="container mt-5">
  <div class="row">
    <div class="col-md-4 bg-success text-light glowing-card">
<h1 class="fs-1 text-center text-outline-success">Total Products <br></h1>
<h1 class="fs-1 text-center fw-bolder">{{$products->count()}}</h1>
    </div>
    <div class="col-md-4  ms-5 bg-success text-light glowing-card ">
      <h1 class="fs-1 text-center">Total Orders <br></h1>
      <h1 class="fs-1 text-center">{{$orders->count()}}</h1>
          </div>
          
  </div>
  <div class="row">
  <div class="mt-4 col-md-4  bg-success text-light glowing-card">
    <h1 class="fs-1 text-center">Total Users <br></h1>
    <h1 class="fs-1 text-center">{{$user->count()}}</h1>
        </div>
        <div class="  mt-4 ms-5 col-md-4 bg-success text-light glowing-card">
    <h1 class="fs-1 text-center">Custom Orders <br></h1>
    <h1 class="fs-1 text-center">{{$customorders->count()}}</h1>
        </div>
  </div>
</div>
</div>



<!-- Bootstrap JavaScript Libraries -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
</script>
</body>

</html>
