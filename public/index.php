<?php 

require 'vendor/autoload.php';
require 'config/database.php';
require 'config/login.php';

$usuarios = App\Entities\User::get();
include "resources/views/login.php";