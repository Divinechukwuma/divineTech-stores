<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" integrity="sha384-4LISF5TTJX/fLmGSxO53rV4miRxdg84mZsxmO8Rx5jGtp/LbrixFETvWa5a6sESd" crossorigin="anonymous">
  <link rel="stylesheet" href="style/style.css">
</head>

<body class='scroll-smooth'>
  <nav class="navbar navbar-expand-md  navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand text-light" href="#"><span class='logo'>DivineTech</span>Stores</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarScroll">
        <ul class="navbar-nav  ms-auto" style="--bs-scroll-height: 100px;">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#dashboard">Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#admin">Admin</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#products" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Products
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#categories">Categories</a></li>
              <li><a class="dropdown-item" href="#cart">Cart</a></li>
              <li><a class="dropdown-item" href="#order">Order</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">LogOut</a>
          </li>

        </ul>
      </div>
    </div>
  </nav>

  <section class="p-5">
    <h1> <strong>Dashboard</strong></h1>

    <div class="container m-5">
      <div class="row text-center">
        <div class="col-md mb-5">
          <div class="card bg-secondary text-light">
            <div class="card-body text-center">
              <div class="h1 mb-3"><i class="bi bi-laptop"></i></div>
              <h3 class="card-title mb-3">Categories</h3>
              <p class="card-text"></p>
            </div>
          </div>
        </div>

        <div class="col-md mb-5">
          <div class="card bg-secondary text-light">
            <div class="card-body text-center">
              <div class="h1 mb-3"><i class="bi bi-bag-fill"></i></div>
              <h3 class="card-title mb-3">Products</h3>
              <p class="card-text"></p>
            </div>
          </div>
        </div>

        <div class="col-md mb-5">
          <div class="card bg-secondary text-light">
            <div class="card-body text-center">
              <div class="h1 mb-3"><i class="bi bi-cart"></i></div>
              <h3 class="card-title mb-3">Orders</h3>
              <p class="card-text"></p>
            </div>
          </div>
        </div>

        <div class="col-md mb-5">
          <div class="card bg-secondary text-light">
            <div class="card-body text-center">
              <div class="h1 mb-3"><i class="bi bi-bar-chart-fill"></i></div>
              <h3 class="card-title mb-3">Revenue Generated</h3>
              <p class="card-text"></p>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>

    <footer class="p-5 bg-dark text-white text-center position-relative">
      <div class="container-fluid">
        <p class="lead"> copyright &copy; 2024 <span class="logo">DivineTech</span>Store </p>
        <a href="#" class="position-absolute bottom-0 end-0 p-5"><i class="bi bi-arrow-up-circle h1"></i>
        </a>
      </div>
    </footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
  </script>
</body>

</html>