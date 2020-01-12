<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OwnerLicense extends Model
{
     protected $fillable = [
	
		'slno', 'year', 'name', 'fname', 'mname', 'modelno', 'address', 'licenseno', 'licensefee', 'issuedate', 'registerfee', 'incotax', 'vat', 'tinplate', 'nid', 'upjela', 'post'
	];
}
