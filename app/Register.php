<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    protected $fillable = 
    [
    	'Name',
    	'Email',
    	'IDnumber',
    	'EmployeeID',
    	'Department'
    ];
    function appraisal()
    {
    	return $this->belongsTo('App\appraisals');
    }
}
