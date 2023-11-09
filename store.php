<?php

require 'vendor/autoload.php';

use App\Controllers\UserController;

(new UserController)->store($_POST);
