<?php 

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\DB;

class User extends Model {

	public function index()
    {
        $users = DB::table('users')->get();
        return $users;
    }

    /*public function store(EstimateRequest $request){
    	$input = $request->all();
    	print_r($input);

    }*/

    public function nuevo($name, $document, $email, $countrie, $password) {

    		/*DB::table('users')->insert([			    
			    'nombre'    => 'name',
	            'documento' => 'document',
	            'email'     => 'email',
	            'pais'      => 'countrie',
	            'password'  => 'password'
			]);*/

			DB::table('users')->insert(
			     array(
			        'nombre'    => 'name',
		            'documento' => 'document',
		            'email'     => 'email',
		            'pais'      => 'countrie',
		            'password'  => 'password'
			     )
			);

        //try {
            /*$newser = new User;
            print_r($newser);
            die('aca');
            $newser->nombre = $name;
            $newser->documento = $document;
            $newser->email = $email;
            $newser->pais = $countrie;
            $newser->password = $password;
            $newser->save();
            return redirect('index');*/
            //return ($newser->save())?$newser->{$newser->primaryKey}:false;
        /*} catch (\Exception $e) {
            var_dump($e);
            return null;
        }*/
    }

    /*protected function redirectTo($request)
	{
	    return route('login');
	}*/

}