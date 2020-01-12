<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DriverLicense extends Model
{
    protected $fillable = [
	
		'type', 'slno', 'year', 'name', 'fname', 'mname', 'age', 'address', 'licenseno', 'licensefee', 'issuedate', 'nid', 'upjela', 'post'
	];
}
