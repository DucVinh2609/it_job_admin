<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class reviews extends Model
{
    protected $table="reviews";
    public $timestamps=false;
    public function employer()
    {
        return $this->belongsTo('App\employer');
    }
}