<?php require view('partials/header.php') ?>
<?php require view('partials/nav.php') ?>

<section class="p-5">
    <h1 class="mb-3"> <strong>Admin</strong></h1>

    <td> <a href="/webapps/divineTech-store/create-admin"><button class="bg-success text-light text-center mb-4 rounded">Add Admin</button></a></td>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Password</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>@mdo</td>
                <td><button class="bg-success text-light text-center rounded">Update Admin</button></td>
                <td><button class="bg-danger text-light text-center rounded">Delete Admin</button></td>
            </tr>

            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td><button class="bg-success text-light text-center rounded">Update Admin</button></td>
                <td><button class="bg-danger text-light text-center rounded">Delete Admin</button></td>
            </tr>

            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td><button class="bg-success text-light text-center rounded">Update Admin</button></td>
                <td><button class="bg-danger text-light text-center rounded">Delete Admin</button></td>
            </tr>
        </tbody>
    </table>

</section>

<?php require view('partials/footer.php') ?>