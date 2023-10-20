@include('Header')
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
</x-app-layout>

<body>
    <div class="container"> 
<div class="row">
    <div class="col-md-4 mt-4 bg-success text-light glowing-card">
<h1 class="fs-1 text-center text-outline-success">Total orders <br></h1>
<h1 class="fs-1 text-center fw-bolder">{{$orders->count()}}
</h1>
    </div>
    
    </div>
    </div>
    <h1 class="text-center fs-1">Order Details</h1>
    <table class="table">
        <tr><th>Product Id</th>
    <th>Product Name</th>
<th>Product Price</th>

</tr>
@foreach ($orders as $order)
<tr>
    <td>{{$order->productid}}</td>
    <td>{{$order->name}}</td>
    <td>{{$order->price}}</td>
</tr>
    
@endforeach
    </table>




</body>
@include('components.Bootstrap.footer')
