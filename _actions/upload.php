<?php

require "../vendor/autoload.php";

use Libs\Database\MySQL;
use Libs\Database\UsersTable;
use Helpers\HTTP;
use Helpers\Auth;

$auth = Auth::check();

$name = $_FILES['photo']['name'];
$tmp_name = $_FILES['photo']['tmp_name'];
$type = $_FILES['photo']['type'];
$error = $_FILES['photo']['error'];


if ($error) {
    HTTP::redirect("/profile.php", "error=file");
}

if ($type === "image/jpeg" or $type === "image/png") {
    move_uploaded_file($tmp_name, "photos/$name");
    $table = new UsersTable(new MySQL());
    $table->uploadPhoto($name, $auth->id);

    $auth->photo = $name;
    HTTP::redirect("/profile.php");
} else {
    HTTP::redirect("/profile.php", "error=type");
}
