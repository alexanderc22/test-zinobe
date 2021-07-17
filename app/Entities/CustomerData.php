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

	public function getCountries()
    {
        $countries = json_decode( file_get_contents('https://restcountries.eu/rest/v2/all?fields=name;alpha2Code'), true );
        return $countries;
    }

    public function getAllUsers()
    {
        $userEN = json_decode( file_get_contents('http://www.mocky.io/v2/5d9f39263000005d005246ae?mocky-delay=10s'), true );
        $userES = json_decode( file_get_contents('http://www.mocky.io/v2/5d9f38fd3000005b005246ac?mocky-delay=10s'), true );
        //return $countries;
    }    

}

/*

$userEN = json_decode( file_get_contents('http://www.mocky.io/v2/5d9f39263000005d005246ae?mocky-delay=10s'), true );

$userES = json_decode( file_get_contents('http://www.mocky.io/v2/5d9f38fd3000005b005246ac?mocky-delay=10s'), true );*/