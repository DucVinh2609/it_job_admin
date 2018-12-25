<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class employer extends Model
{
   	protected $table="employers";
    public $timestamps=false;
    public function location()
    {
        return $this->belongsTo('App\location');
    }
    public function  reviews(){
        return $this->hasMany('App\reviews','id_employer','id');
    }
    public function  posts(){
        return $this->hasMany('App\posts','id_employer','id');
    }
    public function  emmployer_detail(){
        return $this->hasOne('App\emmployer_detail','id_employer','id');
    }
}
