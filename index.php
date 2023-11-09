<?php

require 'vendor/autoload.php';

use App\Controllers\UserController;

$controller = new UserController();
$controller->index();