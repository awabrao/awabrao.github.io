<form class="form-control" action="add" method="post" enctype="multipart/form-data">
    @csrf
    <div class="mt-5 container">
    <h1 class="text-center">Enter Computer Details</h1>
    <p class="text-center">Add Product</p>
    <div class="row ">
        <div class="col-md-12 input-group">
            <span class="input-group-text border border-success">Product Name</span>
            <input type="text" required name="productname" id="Pname" class="border border-success form-control">
            
            <span class="input-group-text border border-success">Brand Name</span>
            <input type="text" name="brandname" id="Pbrand" class="border border-success form-control">
          </div>
          <div class=" mt-2 col-md-12 input-group">
            <span class="input-group-text border border-success">Ram</span>
                    <input type="number" name="pram" id="Pram" class="form-control border border-success">
                    <span class="input-group-text border border-success">Hard</span>
                    <input type="number" name="phard" id="Phard" class="form-control border border-success">
                    <span class="input-group-text border border-success">Hard Disk Type</span>
                    <input type="text" name="phtype" id="Phtype" class="form-control border border-success">            
          </div>
          <div class=" mt-2 col-md-12 input-group">
            <span class="input-group-text border border-success">Product Price</span>
            <input type="number" required name="productprice" id="Pprice" class="form-control border border-success">
            <span class="input-group-text border border-success">Description</span>
            <input type="text" name="pdescription" id="Pdescription" class="form-control border border-success">
            
          </div>
          <div class=" mt-2 col-md-12 input-group h">
            <span class="input-group-text border border-success">Product Image 1</span>
            <input type="file" required name="productimage" id="Pimage1" class=" form-control border border-success" >
            <span class="input-group-text border border-success">Product Image 2</span>
            <input type="file" required name="productimage2" id="Pimage2" class=" form-control border border-success" >
            <span class="input-group-text border border-success">Product Image 3</span>
            <input type="file" required name="productimage3" id="Pimage3" class=" form-control border border-success" >
            
            
          </div>
          <div class=" mt-2 col-md-12 input-group form-check form-switch">
          <span class="input-group-text border border-success">Product Type</span>
            <span class="input-group-text border border-success">Laptop</span>
            <input class="form-check-input" type="radio" name="type" value="Laptop">
            <span class="input-group-text border border-success">PC</span>
            <input class="form-check-input" type="radio" name="type" value="PC">
            <span class="input-group-text border border-success">Accessories</span>
            <input class="form-check-input" type="radio" name="type" value="Accessories">
          </div>
          <div class="col-md-12 d-grid gap-2 mt-2"><input class="btn btn-outline-success" type="submit" value="Send"></div>
    </div>
</div>
</form>