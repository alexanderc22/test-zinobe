<?php 

namespace App\Entities;

class CustomerData {

	public function getCountries()
    {
        $countries = json_decode( file_get_contents('https://restcountries.eu/rest/v2/all?fields=name;alpha2Code'), true );
        return $countries;
    }

    public function getSearchByUser($search, $IdUser)
    {
        $userEN = json_decode( file_get_contents('http://www.mocky.io/v2/5d9f39263000005d005246ae?mocky-delay=10s'), true );

			   	foreach ($userEN['objects'] as $key => $val) {
			   		$band = false;
			       	if (strpos($val['email'], $search) !== FALSE){
			       		
			       		$infoNewUser = Search::create([
							'job_title'    => $val['job_title'],
							'email' 	   => $val['email'],
						    'first_name'   => $val['first_name'],
						    'last_name'    => $val['last_name'],
						    'document'     => $val['document'],
						    'phone_number' => $val['phone_number'],
						    'country' 	   => $val['country'],
						    'state' 	   => $val['state'],
						    'city'         => $val['city'],
						    'date_birth'   => "",
						    'Id_user'      => $IdUser,
						]);
			       		$band = true;
			       	}
			       	if (strpos($val['first_name'], $search) !== FALSE && $band == false){
			       		
			       		$infoNewUser = Search::create([
							'job_title'    => $val['job_title'],
							'email' 	   => $val['email'],
						    'first_name'   => $val['first_name'],
						    'last_name'    => $val['last_name'],
						    'document'     => $val['document'],
						    'phone_number' => $val['phone_number'],
						    'country' 	   => $val['country'],
						    'state' 	   => $val['state'],
						    'city'         => $val['city'],
						    'date_birth'   => "",
						    'Id_user'      => $IdUser,
						]);
						$band = true;
			       	}
			       	if (strpos($val['last_name'], $search) !== FALSE && $band == false){
			       		$infoNewUser = Search::create([
							'job_title'    => $val['job_title'],
							'email' 	   => $val['email'],
						    'first_name'   => $val['first_name'],
						    'last_name'    => $val['last_name'],
						    'document'     => $val['document'],
						    'phone_number' => $val['phone_number'],
						    'country' 	   => $val['country'],
						    'state' 	   => $val['state'],
						    'city'         => $val['city'],
						    'date_birth'   => "",
						    'Id_user'      => $IdUser,
						]);
			       		$band = true;
			       	}			       	
			   }	
		

        $userES = json_decode( file_get_contents('http://www.mocky.io/v2/5d9f38fd3000005b005246ac?mocky-delay=10s'), true );


        		foreach ($userES['objects'] as $key => $val) {
			   		$band = false;
			       	if (strpos($val['correo'], $search) !== FALSE){
			       		
			       		$infoNewUser = Search::create([
							'job_title'    => $val['cargo'],
							'email' 	   => $val['correo'],
						    'first_name'   => $val['primer_nombre'],
						    'last_name'    => $val['apellido'],
						    'document'     => $val['cedula'],
						    'phone_number' => $val['telefono'],
						    'country' 	   => $val['pais'],
						    'state' 	   => $val['departamento'],
						    'city' 		   => $val['ciudad'],
						    'date_birth'   => $val['fecha_nacimiento'],
						    'Id_user'      => $IdUser,
						]);
			       		$band = true;

			       	}
			       	if (strpos($val['primer_nombre'], $search) !== FALSE && $band == false){
			       		
			       		$infoNewUser = Search::create([
							'job_title'    => $val['cargo'],
							'email' 	   => $val['correo'],
						    'first_name'   => $val['primer_nombre'],
						    'last_name'    => $val['apellido'],
						    'document'     => $val['cedula'],
						    'phone_number' => $val['telefono'],
						    'country' 	   => $val['pais'],
						    'state' 	   => $val['departamento'],
						    'city' 		   => $val['ciudad'],
						    'date_birth'   => $val['fecha_nacimiento'],
						    'Id_user'      => $IdUser,
						]);
			       		$band = true;
			       	}
			       	if (strpos($val['apellido'], $search) !== FALSE && $band == false){
			       		
			       		$infoNewUser = Search::create([
							'job_title'    => $val['cargo'],
							'email' 	   => $val['correo'],
						    'first_name'   => $val['primer_nombre'],
						    'last_name'    => $val['apellido'],
						    'document'     => $val['cedula'],
						    'phone_number' => $val['telefono'],
						    'country' 	   => $val['pais'],
						    'state' 	   => $val['departamento'],
						    'city' 		   => $val['ciudad'],
						    'date_birth'   => $val['fecha_nacimiento'],
						    'Id_user'      => $IdUser,
						]);
			       		$band = true;
			       	}			       	
			   }
    }


}
