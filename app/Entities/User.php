<?php 

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
//use Illuminate\Support\Facades\DB;

class User extends Model {

	public function index()
    {
        $users = DB::table('users')->get();
        return $users;
    }

}