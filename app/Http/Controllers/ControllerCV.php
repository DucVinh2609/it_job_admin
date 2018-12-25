<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller as Controller;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Validator;
use Illuminate\Http\Request;
use App\cv;
use App\Http\Requests\CVRequest;

class ControllerCV extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    

    public function getCV(){
        $cv = cv::all();
      return view('viewAdmin.admin_cv',['cv' => $cv]);
    }
    public function getCVAPI(){
        $cv = cv::all();
        return $cv;
    }

    public function getAddCV(){
        return view('viewAdmin.addCV');
    }

    public function postAddCV(CVRequest $req){
        $file_cv=$req->file('cv')->getClientOriginalName();
        $cv=new cv;
        $cv->id_user=$req->user_id;
        $cv->id_post=$req->job_id;
        $cv->cover_letter=$req->cover_letter;
        $cv->cv=$file_cv;
        $req->file('cv')->move('CV/',$file_cv);
        $cv->save();
        return redirect()->action('ControllerCV@getCV')->with(['flash_level'=>'success','flash_message'=>'Success !! Complete add CV']);
    }
    public function postAddCVAPI(CVRequest $req){
        $cv=new cv;
        $cv->id_user=$req->user_id;
        $cv->id_post=$req->job_id;
        $cv->cover_letter=$req->cover_letter;
        $cv->cv=$req->cv;
        $cv->save();
        return redirect()->back();
    }

}
