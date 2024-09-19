<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container text-center" style="max-width: 600px">
        <h1 class="h3 mt-5 mb-3">Register</h1>
        <form action="_actions/create.php" method="POST" class="mb-2">
            <input type="text" class="form-control mb-2" name="name" placeholder="Name" required>
            <input type="email" class="form-control mb-2" name="email" placeholder="Email" required>
            <input type="number" class="form-control mb-2" name="phone" placeholder="Phone" required>
            <textarea name="address" rows="5" class="form-control mb-2" placeholder="Address" required></textarea>
            <input type="password" class="form-control mb-3" name="password" placeholder="Password" required>
            <button class="btn btn-primary w-100">Register</button>
        </form>
        <a href="index.php">Login</a>
    </div>
</body>

</html>