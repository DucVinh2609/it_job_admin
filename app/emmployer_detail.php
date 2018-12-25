<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class emmployer_detail extends Model
{
    protected $table="emmployer_detail";
    public $timestamps=false;
    public function employer()
    {
        return $this->belongsTo('App\employer');
    }
}
