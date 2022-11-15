<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
	//public $table="user"; if model & table name are different 
	//public $primarykey="emp_id";  // if want custom primary key in table
	
	//If don’t want then add :  created_dt and update_dt
	//public $timestamps=false   in user model class

    use HasFactory;
}
