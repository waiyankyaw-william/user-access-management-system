<?php

require "../vendor/autoload.php";

use Libs\Database\MySQL;
use Libs\Database\UsersTable;
use Helpers\HTTP;

$id = $_GET['id'];
$role = $_GET['role'];

$table = new UsersTable(new MySQL());
$table->updateRole($id, $role);
HTTP::redirect("/admin.php");
