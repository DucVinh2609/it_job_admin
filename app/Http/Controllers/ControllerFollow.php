<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller as Controller;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Validator;
use Illuminate\Http\Request;
use App\follow;

class ControllerFollow extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    

    public function getFollows(){
        $follow = follow::all();
      return view('viewAdmin.admin_follow',['follow' => $follow]);
    }
    public function getFollowsAPI(){
        $follow = follow::all();
      return $follow;
    }

    
}
