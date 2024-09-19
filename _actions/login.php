<?php

require "../vendor/autoload.php";

use Libs\Database\MySQL;
use Libs\Database\UsersTable;
use Helpers\HTTP;

$email = $_POST['email'];
$password = $_POST['password'];

$table = new UsersTable(new MySQL());
$user = $table->check($email, $password);

if ($user) {
    session_start();
    if ($user->suspended) {
        HTTP::redirect("/index.php", "suspended=account");
    }
    $_SESSION['user'] = $user;
    HTTP::redirect("/profile.php", "login=true");
} else {
    HTTP::redirect("/index.php", "incorrect=login");
}
