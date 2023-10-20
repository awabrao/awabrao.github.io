<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Checkout
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Checkout</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <label for="address" class="form-label">Enter Address</label>
    <input type="text" required name="address" class="form-control" id="address" >
    <label for="number" class="form-label">Enter Mobile Number</label>
    <input type="text" required name="number" class="form-control" id="number" >
    @php
    $sum = 0;
    $name="";
    $brand="";
    $idd="";
    if(session('cart')){
    foreach(session('cart') as $id => $details) {
      if($details['id']>1){
   $sum+=$details['price'];
   
   $name.=$details['name'];
   $name.="+";
   $brand.=$details['brand'];
   $brand.="+";
   $idd.=$details['id'];
   $idd.="+";}
   else{
    $name=$details['name'];
    $brand=$details['brand'];
    $idd=$details['id'];
    $sum=$details['price'];
   }

   
                
               }
} @endphp
      
<input type="hidden" name="productmodel" value="{{$brand}}">
<input type="hidden" name="productname" value="{{$name}}">
<input type="hidden" name="productprice" value="{{$sum}}">
<input type="hidden" name="productid" value="{{ $idd }} ">
                
     
      <p class="text-center fs-1">Total: {{ $sum }}  RS</p> 
      <p class="fs-3 text-center"> Cash On Delivery</p>
      <input type="submit" class="btn btn-danger" value="Checkout">
</div>
      </div>
      
    </div>
  </div>
</div>