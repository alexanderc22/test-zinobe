<?php 

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Query\Builder;


class User extends Model 
{
	protected $fillable = ['nombre', 'documento', 'email', 'pais', 'password', 'remember_token'];

	public $timestamps = [];

}