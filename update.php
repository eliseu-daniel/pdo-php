<?php

require 'vendor/autoload.php';

use App\Controllers\UserController;

$id = $_GET['id'];

(new UserController)->update($id, $_POST);