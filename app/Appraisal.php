<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appraisal extends Model
{
    protected $fillable =
    [
    	'LevelOfExecution',
    	'QualityOfWork',
    	'ConsistencyInImprovement',
    	'ClientAndPeerFeedback',
    	'SalesRevenueGenerated',
    	'ResponsivenessToFeedback',
    	'AbilityToTakeOwnership',
    	'RateOfCompletion'
    ];
    function register()
    {
    	return $this->hasOne('App\registers');
    }
}
