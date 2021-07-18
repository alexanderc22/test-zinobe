<?php
require 'vendor/autoload.php';
require 'config/database.php';

$valToken = App\Entities\Auth::GetData($_POST['token']);

if($valToken->id) {

	$arrayCountries = App\Entities\CustomerData::getSearchByUser($_POST['search'], $valToken->id);

	$consultas = App\Entities\Search::where('Id_user', '=', $valToken->id)->get();
	
	$token =$_POST['token'];

	include "resources/views/header.php";
	include "resources/views/search.php";
	
} else {
	header("Location: ".URL_HOME);
	die();	
}