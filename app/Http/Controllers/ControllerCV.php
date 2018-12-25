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
        $file_cv=$req->file('CV')->getClientOriginalName();
        $cv=new cv;
        $cv->name=$req->txt_Name;
        $cv->id_user=$req->txt_Candidate;
        $cv->id_employer=$req->txt_Employer;
        $cv->cv=$file_cv;
        $req->file('CV')->move('CV/',$file_cv);
        $cv->save();
        return redirect()->action('ControllerCV@getCV')->with(['flash_level'=>'success','flash_message'=>'Success !! Complete add CV']);
    }
    public function postAddCVAPI($name,$id_user,$id_employer,$cv){
        $file_cv=$req->file($cv)->getClientOriginalName();
        $cv=new cv;
        $cv->name=$name;
        $cv->id_user=$id_user;
        $cv->id_employer=$id_employer;
        $cv->cv=$file_cv;
        $req->file($cv)->move('CV/',$file_cv);
        $cv->save();
         return back();
    }

}
