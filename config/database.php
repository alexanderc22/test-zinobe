<?php 
use Illuminate\Database\Capsule\Manager as Capsule;

define('URL_HOME', 'https://localhost/test-zinobe/');

$conexion = new Capsule;

$conexion->addConnection([
	'driver'    => 'mysql',
	'host'      => 'localhost',
	'database'  => 'dbzinobe',
	'username'  => 'root',
	'password'  => '',
	'charset'   => 'utf8',
	'collation' => 'utf8_unicode_ci',
	'prefix'    => '',
]);

$conexion->bootEloquent();