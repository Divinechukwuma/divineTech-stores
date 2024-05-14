<?php require view('partials/header.php') ?>
<?php require view('partials/nav.php') ?>

<section class="p-5">
    <h1 class="mb-3"> <strong>Add Admin</strong></h1>

    <form method="POST" action="/webapps/divineTech-store/authorized">
        <div class="mb-3">
            <label for="name" class="form-label">Your name</label>
            <input type="name" class="form-control" id="name"  name="name" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Your Email</label>
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email" required>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name='password' required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</section>

<?php require view('partials/footer.php') ?>