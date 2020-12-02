<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    protected $fillable =['student_id','exammonth','result'];

    public function student(){
    	return $this->belongsTo('App\Student');
    }
}
