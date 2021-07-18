<?php 

require 'vendor/autoload.php';
require 'config/database.php';

$usuarios = App\Entities\User::get();

$arrayCountries = App\Entities\CustomerData::getCountries();
$error = '';

include "resources/views/header.php";
include "resources/views/login.php";