<?php 

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
//use Illuminate\Support\Facades\DB;

class CustomerData extends Model {

	public function index()
    {
        $users = DB::table('users')->get();
        return $users;
    }

}