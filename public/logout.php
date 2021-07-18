<script>
	localStorage.removeItem('token-z');
</script>
<?php
	require 'vendor/autoload.php';
	require 'config/database.php';

	$arrayToken = explode('logout/', $_SERVER['REQUEST_URI']);

	if($arrayToken[1]){

		$data = App\Entities\Auth::GetData($arrayToken[1]);
		App\Entities\User::where('Id', $data->id)->update(['remember_token'=>'']);
	}
	header("Location: ".URL_HOME);
	die();
