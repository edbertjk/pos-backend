<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="{{ asset("css/style.css") }}" rel="stylesheet">
  </head>
  <body>
    <section class="vh-100 bg-dark">
      <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-12 col-md-8 col-lg-6 col-xl-5">
            <div class="card shadow-2-strong" style="border-radius: 1rem;">
              <div class="card-body p-5 text-center">
                <form action="/regist" method="post">
                  @csrf
                <h3 class="mb-1">Hello There!!!</h3>
    
                <h3 class="mb-5">[ Database Login System ]</h3>
                  <div class="form-outline mb-4">
                    <label class="form-label">Username</label>
                    <input type="text" class="form-control form-control-lg" name="name" />
                  </div>
                  <div class="form-outline mb-4">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control form-control-lg" name="email" />
                  </div>
                  <div class="form-outline mb-4">
                    <label class="form-label">Role</label>
                    <input type="text" class="form-control form-control-lg" name="role" />
                  </div>
                  <div class="form-outline mb-4">
                    <label class="form-label" for="typePasswordX-2">Password</label>
                    <input type="password" id="typePasswordX-2" class="form-control form-control-lg" name="password" />
                  </div>
                  <button class="btn btn-lg btn-warning btn-block" type="submit">Register</button>
                </form>
                

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>