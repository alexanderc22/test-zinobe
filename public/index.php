<?php 

require '../vendor/autoload.php';
require '../config/database.php';

$usuarios = App\Entities\User::get();
include "../resources/views/login.php";