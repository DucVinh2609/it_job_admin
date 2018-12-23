<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class employer extends Model
{
   	protected $table="employer";
    public $timestamps=false;
    public function  location(){
        return $this->hasMany('App\location','id_Location','id');
    }
    public function  reviews(){
        return $this->hasMany('App\reviews','id_employer','id');
    }
}
