<?php 

/*require 'vendor/autoload.php';
use Auth0\SDK\Auth0;*/

$arrayUrl = explode('/', $_SERVER['REQUEST_URI']);

$numUrl = count($arrayUrl) - 2;

$parametro = end($arrayUrl);

if($arrayUrl[$numUrl] == 'logout' ) 
	$parametro = $arrayUrl[$numUrl];


switch ($parametro) {
	case '':		
		require 'public/index.php';
		break;
	case 'register':
		require 'public/register.php';
		break;
	case 'search':
		require 'public/search.php';
		break;
	case 'find':
		require 'public/find.php';
		break;	
	case 'logout':
		require 'public/logout.php';
		break;
	default:
		echo "<h1>Url No disponible</h1>";
		break;
}