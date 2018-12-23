<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller as Controller;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Validator;
use Illuminate\Http\Request;
use App\reviews;

class ControllerReviews extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    

    public function getReviews(){
        $reviews = reviews::all();
      return view('viewAdmin.admin_reviews',['reviews' => $reviews]);
    }
    public function getReviewsAPI(){
        $reviews = reviews::all();
      return $reviews;
    }
    public function getReviewsAPIaccordingID($id){
        $reviews = reviews::find($id);
      return $reviews;
    }

    
}
