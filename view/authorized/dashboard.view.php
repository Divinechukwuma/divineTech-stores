<?php require view('partials/header.php') ?>
<?php require view('partials/nav.php') ?>

  <section class="p-5">
    <h1> <strong>Dashboard</strong></h1>

    <div class="container m-5 ">
      <div class="row text-center">
        <div class="col-md mb-5">
          <div class="card bg-secondary text-light shadow">
            <div class="card-body text-center">
              <div class="h1 mb-3"><i class="bi bi-laptop"></i></div>
              <h3 class="card-title mb-3">Categories</h3>
              <p class="card-text"></p>
            </div>
          </div>
        </div>

        <div class="col-md mb-5">
          <div class="card bg-secondary text-light shadow">
            <div class="card-body text-center">
              <div class="h1 mb-3"><i class="bi bi-bag-fill"></i></div>
              <h3 class="card-title mb-3">Products</h3>
              <p class="card-text"></p>
            </div>
          </div>
        </div>

        <div class="col-md mb-5">
          <div class="card bg-secondary text-light shadow">
            <div class="card-body text-center">
              <div class="h1 mb-3"><i class="bi bi-cart"></i></div>
              <h3 class="card-title mb-3">Orders</h3>
              <p class="card-text"></p>
            </div>
          </div>
        </div>

        <div class="col-md mb-5">
          <div class="card bg-secondary text-light shadow">
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

<?php require view('partials/footer.php') ?>