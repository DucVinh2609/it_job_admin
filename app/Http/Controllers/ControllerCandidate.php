<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller as Controller;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Validator;
use Illuminate\Http\Request;
use App\users;
use App\Http\Requests\CandidateRequest;

class ControllerCandidate extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    

    public function getCandidates(){
        $users = users::all();
      return view('viewAdmin.admin_candidate',['users' => $users]);
    }
    public function getCandidatesAPI(){
        $users = users::all();
      return $users;
    }
    public function getAddCandidate(){
        return view('viewAdmin.addCandidate');
    }

    public function postAddCandidate(CandidateRequest $req){
        $file_image=$req->file('CandidateImage')->getClientOriginalName();
        $file_cv=$req->file('CandidateCV')->getClientOriginalName();
        $users=new users;
        $users->name=$req->txt_CandidateName;
        $users->CV=$file_cv;
        $users->cover_letter=$req->txt_CandidateCoverLetter;
        $users->image=$file_image;
        $req->file('CandidateImage')->move('images/users/',$file_image);
        $req->file('CandidateCV')->move('CV/',$file_cv);
        $users->save();
        return redirect()->action('ControllerCandidate@getCandidates')->with(['flash_level'=>'success','flash_message'=>'Success !! Complete add Candidate']);
    }

    public function getDeleteCandidate($id){
        $users=users::find($id);
        $users->delete($id);
        return redirect()->action('ControllerCandidate@getCandidates')->with(['flash_level'=>'success','flash_message'=>'Success !! Complete delete Candidate']);
    }

    public function getEditCandidate($id){
        $data=users::find($id);
        $parent=users::select('id','name','CV','cover_letter','image')->get()->toArray();
        return view('viewAdmin.editCandidate',compact('data','parent','id'));
    }

    public function postEditCandidate(CandidateRequest $req,$id){
        $users=users::find($id);
        $file_image="http://itjob-heroku.herokuapp.com/public/images/users/".$req->file('CandidateImage')->getClientOriginalName();
        $file_cv=$req->file('CandidateCV')->getClientOriginalName();
        $users->name=$req->txt_CandidateName;
        $users->CV=$file_cv;
        $users->cover_letter=$req->txt_CandidateCoverLetter;
        $users->image=$file_image;
        $req->file('CandidateImage')->move('images/users/',$file_image);
        $req->file('CandidateCV')->move('CV',$file_cv);
        $users->save();
        return redirect()->action('ControllerCandidate@getCandidates')->with(['flash_level'=>'success','flash_message'=>'Success !! Complete edit Candidate']);

    }
}
