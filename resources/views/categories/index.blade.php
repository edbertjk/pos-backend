<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Categories Page || Admin Only</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="">
  </head>
  <body>
      @include('layout.nav')
      <div class="main">
        <div class="container">
            <h2 class="mt-5">Category List  -> <span class="text-warning">Dapur Nyonya Tien</span></h2>
            <div class="searchdata d-flex mt-5">
                <form action="" method="post" class="d-flex justify-content-between col-12">
                    <input class="col-lg-8 col-md-5 col-sm-12" type="text" class="rounded" placeholder="Search Item By ID">
                    <div class="d-flex">
                      <input class="btn btn-warning" type="button" value="Search ID">
                      </div>
                    
                </form>
            </div>
            <div class="d-flex mt-5">
                <a href="/categories/create"><input class="btn btn-warning" type="submit" value="Add New Category +"></a>
                <a href="/suppliers" ><input class="btn btn-primary me-2 ms-4" type="submit" value="Go Supplier List ->"></input></a>
                <a href="/product" ><input class="btn btn-primary me-2 ms-2" type="submit" value="Go Product List ->"></input></a>
            </div>

            <div class="row row-cols-1 row-cols-md-3 g-4 mt-3">
              @foreach ($category as $categories)
              <div class="col">
                <div class="card h-100">
                  <div class="card-body">
                    <h5 class="card-title">{{ $categories->nama }} [ID: {{ $categories->id }}]</h5>
                    <a href="/categories/{{$categories->id}}/edit"><button class="btn btn-success mt-3 mb-1">Update</button></a>
                    <form action="/categories/{{ $categories->id }}" method="POST" >
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