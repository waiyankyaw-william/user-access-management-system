<?php

require "../vendor/autoload.php";

use Helpers\HTTP;

session_start();
unset($_SESSION['user']);
HTTP::redirect("/index.php", "logout=true");
