<?php 

require 'vendor/autoload.php';
require 'config/database.php';

$usuarios = App\Entities\User::get();

$usuario  = 'eduardo';
$password = '123456';
if($usuario === 'eduardo' && $password === '123456')
{
    $test = App\Entities\Auth::SignIn([
        'id' => 1,
        'name' => 'Eduardo'
    ]);
}
//echo $test;

$token = $test;

var_dump(
    App\Entities\Auth::GetData(
        $token
    )
);

include "resources/views/login.php";