<?php

namespace App;

use App\classes\Register;

require_once __DIR__."/vendor/autoload.php";

$regitration = new Register($_POST['name'], $_POST['email'], $_POST['password'], $_POST['confirm_password']);

$regitration->register();