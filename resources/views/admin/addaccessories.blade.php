<form class="form-control" action="addaccessories" method="post" enctype="multipart/form-data">
    @csrf
    <div class="mt-5 container">
    <h1 class="text-center">Enter Accesories Details</h1>
    <p class="text-center">Add Accesories</p>
    <div class="row ">
        <div class="col-md-12 input-group">
            <span class="input-group-text border border-success">Product Name</span>
            <input type="text" name="productname" id="Pname" class="border border-success form-control">
            
            <span class="input-group-text border border-success">Quantity</span>
            <input type="number" name="quantity" id="Pbrand" class="border border-success form-control">
          </div>
          <div class=" mt-2 col-md-12 input-group">
            <span class="input-group-text border border-success">Type</span>
                    <input type="text" name="type" id="Pram" class="form-control border border-success">
                    <span class="input-group-text border border-success">Description</span>
            <input type="text" name="pdescription" id="Pdescription" class="form-control border border-success">
                             
          </div>
          <div class=" mt-2 col-md-12 input-group">
            <span class="input-group-text border border-success">Product Price</span>
            <input type="number" name="productprice" id="Pprice" class="form-control border border-success">
            <span class="input-group-text border border-success">Product Image</span>
            <input type="file" name="productimage" id="Pimage" class=" form-control border border-success">            
          </div>
          <div class="col-md-12 d-grid gap-2 mt-2"><input class="btn btn-outline-success" type="submit" value="Send"></div>
    </div>
</div>
</form>