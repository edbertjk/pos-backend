<nav class="navbar navbar-expand-lg bg-dark">
    <div class="container">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/product" style="color: white">Dapur Nyonya Tien</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/toko2/product" style="color: white">Bubur Madura Putri Ayu</a>
          </li>
        </ul>
        <form class="d-flex" role="search" action="logout" method="post">
          @csrf
            <button class="btn btn-danger me-2" type="submit" ata-bs-toggle="modal" data-bs-target="#exampleModal">Logout Account</button>
          
        </form>
      </div>
    </div>
  </nav>