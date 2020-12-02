<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable=['name','batch_id'];

    public function result(){
    	return $this->hasMany('App\Result','st_id');
    }

    public function ditrict(){
    	return $this->blongsTo('App\District');
    }

}
