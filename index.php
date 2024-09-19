<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container text-center" style="max-width: 600px;">
        <h1 class="h3 mt-5 mb-3">Login</h1>

        <?php if (isset($_GET['incorrect'])) : ?>
            <div class="alert alert-warning">
                Incorrect email or password
            </div>
        <?php endif ?>

        <?php if (isset($_GET['suspended'])) : ?>
            <div class="alert alert-danger">
                Account suspended
            </div>
        <?php endif ?>

        <?php if (isset($_GET['created'])) : ?>
            <div class="alert alert-success">
                Account created
            </div>
        <?php endif ?>

        <form action="_actions/login.php" method="POST" class="mb-2">
            <input class="form-control mb-2" type="email" name="email" placeholder="Email" required>
            <input class="form-control mb-3" type="password" name="password" placeholder="Password" required>
            <button class="btn btn-primary w-100">Login</button>
        </form>
        <a href="register.php">Register</a>
    </div>
</body>

</html>