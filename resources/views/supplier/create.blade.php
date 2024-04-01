<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create Categories || Admin Only</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="{{ asset("css/style.css") }}" rel="stylesheet">
  </head>
  <body>
    <section class="bg-dark">
      <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-12 col-md-8 col-lg-6 col-xl-5">
            <div class="card shadow-2-strong" style="border-radius: 1rem;">
              <div class="card-body p-5 text-center">
                
                  <h3 class="mb-5">Create Product</h3>

                  <form action="/suppliers" method="POST">
                    @csrf
                    <div class="form-outline mb-4">
                    <label class="form-label">Nama Supplier</label>
                    <input type="text" class="form-control form-control-lg" name="name" />
                    </div>
                    <div class="form-outline mb-4">
                      <label class="form-label">Perusahaan Supplier</label>
                      <input type="text" class="form-control form-control-lg" name="perusahaan" />
                    </div>

                    <div class="form-outline mb-4">
                      <label class="form-label">Nomor Telp Supplier</label>
                      <input type="text" class="form-control form-control-lg" name="nomortelp" />
                    </div>

                    <div class="form-outline mb-4">
                        <label class="form-label">Kategori Barang</label>
                          
                        <div class="list-group col-lg-12">
                          <select class="btn btn-warning" style="height: 50px" name="kategori">
                            @foreach ($categories as $category)
                            <option name="kategori" value="{{ $category->nama }}">{{ $category->nama }}</option>
                            @endforeach
                          </select>
                        </div>
                    </div>

                    <div class="form-outline mb-4">
                      <label class="form-label">Alamat Supplier</label>
                      <input type="text" class="form-control form-control-lg" name="alamat" />
                    </div>

                  <br>
                  <br>

                  <input class="btn btn-lg btn-warning btn-block" value="Create +" type="submit"></input>
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
      <br>
    <br>
    <br>
    </section>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>