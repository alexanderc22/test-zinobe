<?php 

require 'vendor/autoload.php';
require 'config/database.php';

$usuarios = App\Entities\User::get();

if(!empty($_POST)){
	
	$email = $_POST['email'];
	$infoUserOld = App\Entities\User::where('email', '=', $_POST['email'])->first();

	if($infoUserOld){
		$arrayCountries = App\Entities\CustomerData::getCountries();
		$error = 'El correo '.$_POST['email'].' ya hace parte del sistema';
		include "resources/views/header.php";
		include "resources/views/login.php";
	} else {

		$token = App\Entities\Auth::SignIn([
	        'document' => $_POST['document'],
	        'name' => $_POST['name']
	    ]);

		$infoNewUser = App\Entities\User::create([
			'nombre'    	 => $_POST['name'],
		    'documento' 	 => $_POST['document'],
			'email' 		 => $_POST['email'],
		    'pais'      	 => $_POST['countrie'],
		    'password'  	 => md5($_POST['password']),
		    'remember_token' => $token
		]);
		include "resources/views/header.php";
		//$_POST['token'] = $token;
		?>
		<script>
			localStorage.setItem('token-z', '<?php echo $token; ?>');
		</script>
		<?php

		include "resources/views/search.php";
		
	}
} else {
	
	header("Location: ".URL_HOME);
	die();
}
//print_r($infoNewUser);

//$infoNewUser = json_decode($infoNewUser);


