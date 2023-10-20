@include('Header')
@include('components.Bootstrap.navbar')
<body style="background-image: url(ggg.png); background-size:cover; background-attachment: fixed;">

<form action="customordering" method="POST">
    @csrf
    <div class="mt-5 container mb-5">
        <h1 class="text-center">Order Custom PC</h1>
        <p class="text-center">Enter details for Custom PC and send query</p>
        <div class="row ">
            <div class="col-md-12 input-group">
                <span class="input-group-text border border-success">Processor</span>
                <input type="text" required name="processor" class=" border border-success form-control">
                <span class="input-group-text border border-success">Generation</span>
                <input type="number" requireds name="generation" class="border border-success form-control">
              </div>
              <div class=" mt-2 col-md-12 input-group">
                <span class="input-group-text border border-success">Ram</span>
                <input type="number" required name="ram" class="form-control border border-success">
                <span class="input-group-text border border-success">Hard</span>
                <input type="number" required name="hard" class="form-control border border-success">
              </div>
              <div class=" mt-2 col-md-12 input-group">
                <span class="input-group-text border border-success">Hard Disk Type</span>
                <input type="text" required name="harddisktype" class="form-control border border-success">
                <span class="input-group-text border border-success">Graphics Card</span>
                <input type="text"  name="graphicscard" class="form-control border border-success">
              </div>
              <div class=" mt-2 col-md-12 input-group">
                <span class="input-group-text border border-success">Case</span>
                <input type="text" name="case" class="form-control border border-success">
                <span class="input-group-text border border-light">Extras</span>
                <input type="text" name="extras" class="form-control border border-success">
              </div>
              <div class="col-md-12 d-grid gap-2 mt-2"><input class="btn btn-primary" type="submit" value="Send"></div>
        </div>
    </div>
    
</form>
@if (\Session::has('success'))
    <script>
      alert("{!! session::get('success') !!}");
    </script>
    
      
    @endif
  </body>
  @include('components.Bootstrap.footer')