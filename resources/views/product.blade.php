<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Product Page || Admin Only</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="">
  </head>
  <body>
      @include('layout.nav')
      <div class="main">
        <div class="container">
            <h2 class="mt-5">Product List  -> <span class="text-warning">Dapur Nyonya Tien</span></h2>
            <div class="searchdata d-flex mt-5">
                <form action="" method="post" class="d-flex justify-content-between col-12">
                    <input class="col-lg-8 col-md-5 col-sm-12" type="text" class="rounded" placeholder="Search Item By ID">
                    <div class="d-flex">
                      <input class="btn btn-warning" type="button" value="Search ID">
                      </div>
                    
                </form>
            </div>
            <div class="d-flex mt-5">
              <a href="/product/create"><input class="btn btn-warning" type="submit" value="Add New Product +"></a>
              <a href="/suppliers" ><input class="btn btn-primary me-2 ms-4" type="submit" value="Go Supplier List ->"></input></a>
              <a href="/categories" ><input class="btn btn-primary me-2 ms-2" type="submit" value="Go Category List ->"></input></a>
            </div>
                    
            <div class="row row-cols-1 row-cols-md-3 g-4 mt-3">
              @foreach ($products as $product)
              <div class="col">
                <div class="card h-100">
                  <div class="card-body">
                    <h5 class="card-title">{{ $product->nama }} [ID: {{ $product->id }}]</h5>
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item"><span class="text-primary" style="font-weight: bold">Kategori : </span> {{ $product->kategori }}</li>
                      <li class="list-group-item"><span class="text-primary" style="font-weight: bold">Jumlah Yang Tersedia : </span> {{ $product->jumlah }}</li>
                      <li class="list-group-item"><span class="text-primary" style="font-weight: bold">Harga Beli : </span>Rp. {{ $product->harga_beli }}</li>
                      <li class="list-group-item"><span class="text-primary" style="font-weight: bold">Harga Jual : </span>Rp. {{ $product->harga_jual }}</li>
                      <li class="list-group-item"><span class="text-primary" style="font-weight: bold">Supplier : </span> {{ $product->supplier_name }}</li>
                      <li class="list-group-item"><span class="text-primary" style="font-weight: bold">Total Keuntungan : </span>Rp. {{ ( (int) $product->harga_jual - (int) $product->harga_beli)  }}</li>
                    </ul>
                    
                    
                    <a href="/product/{{$product->id}}/edit"><button class="btn btn-success mt-3 mb-1">Update</button></a>
                    <form action="/product/{{ $product->id }}" method="POST" >
                      @csrf
                      @method("DELETE")
                    <button class="btn btn-danger">Delete</button>
                    </form>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
        </div>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>