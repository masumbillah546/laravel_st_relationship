<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable=['name','batch_id'];

    public function result(){
    	return $this->hasOne('App\Result','st_id');
    }

}
