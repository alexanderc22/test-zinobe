<?php 

require 'vendor/autoload.php';
require 'config/database.php';

$infoUserOld = App\Entities\User::where('email', '=', $_POST['email'])->where('password', '=', md5($_POST['password']))->get();

foreach($infoUserOld as $item) {
	$idUser    = $item->Id;
	$emailUser = $item->email;
	$passUser  = $item->password;
	$nameUser  = $item->nombre;
    $docUser   = $item->documento;
    $tokenUser = $item->remember_token;
}

if($emailUser === $_POST['email'] && $passUser === md5($_POST['password']))
{

    $token = App\Entities\Auth::SignIn([
	        'id' => $idUser,
	        'name' => $nameUser
	    ]);
	if($token != $tokenUser){
		App\Entities\User::where('Id', $idUser)->update(['remember_token'=>$token]);	
	}

	$consultas = App\Entities\Search::where('Id_user', '=', $idUser)->get();


	include "resources/views/header.php";
	include "resources/views/search.php";
} else {
	header("Location: ".URL_HOME);
	die();
}
