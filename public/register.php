<?php 

require 'vendor/autoload.php';
require 'config/database.php';

$usuarios = App\Entities\User::get();

//Array ( [name] => Juan [document] => 654321 [countrie] => Colombia-CO [email] => mail@mail.com [password] => 123456 ) 

$userId = App\Entities\User::nuevo($_POST['name'], $_POST['document'], $_POST['email'], $_POST['countrie'], $_POST['password']);
//$userId = App\Entities\User::store();

if ($userId)
    echo "Nuevo usuario con ID: ".$userId."\n";
else
    echo "No se pudo insertar usuario\n";

include "resources/views/register.php";