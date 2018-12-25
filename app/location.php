<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class location extends Model
{
    protected $table="location";
    public $timestamps=false;
    public function  employer(){
        return $this->hasOne('App\employer','id_location','id');
    }
}