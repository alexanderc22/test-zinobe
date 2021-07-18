<?php 

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Query\Builder;

//use Illuminate\Http\Request;
//use Illuminate\Support\Facades\DB;

class User extends Model 
{
	protected $fillable = ['nombre', 'documento', 'email', 'pais', 'password', 'remember_token'];

	public $timestamps = [];

	/*public function searchEmail(Request $request){
         $user = User::where('email','like',$request->email)->get();
         return $user;
         //return \View::make('list', compact('movies'));
        
    }*/

    /*protected function redirectTo($request)
	{
	    return route('login');
	}*/

}