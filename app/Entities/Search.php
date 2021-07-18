<?php 

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Query\Builder;


class Search extends Model 
{
	protected $fillable = ['job_title', 'email', 'first_name', 'last_name', 'document', 'phone_number', 'country', 'state', 'city', 'date_birth', 'Id_user'];

	public $timestamps = [];


}