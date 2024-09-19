<?php

require "vendor/autoload.php";

use Helpers\Auth;

$auth = Auth::check();

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container" style="max-width: 600px">
        <h1 class="h3 mt-5 mb-3">Profile</h1>

        <?php if (isset($_GET['error'])) : ?>
            <div class="alert alert-warning">
                Unable to upload
            </div>
        <?php endif ?>

        <?php if (isset($auth->photo)) : ?>
            <img src="_actions/photos/<?= $auth->photo ?>" alt="Profile picture" class="img-thumbnial mb-2" width="300">
        <?php endif ?>

        <form action="_actions/upload.php" method="POST" enctype="multipart/form-data" class="input-group mb-3">
            <input type="file" name="photo" class="form-control">
            <button class="btn btn-secondary">Upload</button>
        </form>

        <ul class="list-group mb-3">
            <li class="list-group-item">Name: <?= $auth->name ?></li>
            <li class="list-group-item">Email: <?= $auth->email ?></li>
            <li class="list-group-item">Phone: <?= $auth->phone ?></li>
            <li class="list-group-item">Address: <?= $auth->address ?></li>
        </ul>

        <a href="_actions/logout.php" class="text-danger">Logout</a> |
        <a href="admin.php">Admin dashboard &raquo;</a>

        <br><br><br><br><br>
    </div>
</body>

</html>