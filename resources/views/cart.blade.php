@extends('shop')
@include('Header')
@include('components.Bootstrap.navbar')
<body style="background-image: url(ggg.png); background-size:cover; background-attachment: fixed;">
    
  
@section('content')
<table id="cart" class="table table-bordered">
    <thead>
        <tr>
            <th> Image</th>
            <th>Name</th>
            <th>Ram (GB)</th>
            <th>Hard Disk (GB)</th>
            <th>Hard Disk Type</th>
            <th>Model</th>
            <th>Price</th>
            <th>Total</th>
            <th>Del</th>
        </tr>
    </thead>
    <tbody>
        @php $total = 0 @endphp
        @if(session('cart'))
        <form action="checkout" method="POST">
            @foreach(session('cart') as $id => $details)
                
                <tr rowId="{{ $id }}">
                    <td data-th="Product">
                        <div class="row">
                            <div class="col-sm-12">
                              <img src="{{ $details['image'] }}" height="100px" width="100%" alt="">  
                            </div>
                        </div>
                    </td>
                    <td data-th="Product">
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="nomargin">{{ $details['name'] }} 
                                </h4>
                            </div>
                        </div>
                    </td>
                    <td data-th="Product">
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="nomargin">{{ $details['ram'] }}</h4>
                        </div>
                    </td>
                    <td data-th="Product">
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="nomargin">{{ $details['Hard'] }}</h4>
                            </div>
                        </div>
                    </td>
                    <td data-th="Product">
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="nomargin">{{ $details['harddisktype'] }}</h4>
                            </div>
                        </div>
                    </td>
                    <td data-th="Product">
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="nomargin">{{ $details['brand'] }}</h4>
                            </div>
                        </div>
                    </td>
                    <td data-th="Price">PKR{{ $details['price'] }}</td>
                   
                    <td data-th="Subtotal" class="text-center">{{$details['price']}}</td>
                    <td class="actions">
                        <a class="btn btn-outline-danger btn-sm delete-product"><i class="fa-solid fa-trash"></i></a>
                    </td>
                </tr>
                <input type="hidden" name="productid" value="{{ $details['id'] }} ">
                
                <input type="hidden" name="productmodel" value="{{$details['brand']}}">
                
                
            @endforeach
        @endif
    </tbody>
    <tfoot>
        <tr> <!-- =================================Checkout Button -->
            <td colspan="9" class="text-right">
                <a href="{{ url('/') }}" class="btn btn-primary"><i class="fa fa-angle-left"></i> Continue Shopping</a>
                
             @csrf
                
             

             @include('modale')
            </td>
            
            
        </tr>
    </tfoot>
</form>
</table>
@endsection

@section('scripts')
<script type="text/javascript">
  
    $(".edit-cart-info").change(function (e) {
        e.preventDefault();
        var ele = $(this);
        $.ajax({
            url: '{{ route('update.sopping.cart') }}',
            method: "patch",
            data: {
                _token: '{{ csrf_token() }}', 
                id: ele.parents("tr").attr("rowId"), 
            },
            success: function (response) {
               window.location.reload();
            }
        });
    });
  
    $(".delete-product").click(function (e) {
        e.preventDefault();
  
        var ele = $(this);
  
        if(confirm("Do you really want to delete?")) {
            $.ajax({
                url: '{{ route('delete.cart.product') }}',
                method: "DELETE",
                data: {
                    _token: '{{ csrf_token() }}', 
                    id: ele.parents("tr").attr("rowId")
                },
                success: function (response) {
                    window.location.reload();
                }
            });
        }
    });
  
</script>
@include('components.Bootstrap.footer')
@endsection


