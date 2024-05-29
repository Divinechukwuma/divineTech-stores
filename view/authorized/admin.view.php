<?php require view('partials/header.php') ?>
<?php require view('partials/nav.php') ?>

<section class="p-5">
    <h1 class="mb-3"> <strong>Admin</strong></h1>

    <td> <a href="/webapps/divineTech-store/authorized"><button class="bg-success text-light text-center mb-4 rounded">Add Admin</button></a></td>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            <tr>
                <?php foreach($posts as $row) : ?>

                <th><?= $sn++ ?></th>
                <td><?php $row['AdminName'] ?></td>
                <td><?php $row['AdminEmail']?></td>
                <td><button class="bg-success text-light text-center rounded">Update Admin</button></td>
                <td><button class="bg-danger text-light text-center rounded">Delete Admin</button></td>

                <?php endforeach; ?>
            </tr>
        </tbody>
    </table>

</section>

<?php require view('partials/footer.php') ?>