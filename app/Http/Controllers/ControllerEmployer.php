<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller as Controller;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Validator;
use Illuminate\Http\Request;
use App\employer;
use App\Http\Requests\EmployerRequest;

class ControllerEmployer extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    

    public function getEmployers(){
        $employer = employer::all();
      return view('viewAdmin.admin_employer',['employer' => $employer]);
    }
    public function getEmployersAPI(){
        $employer = employer::all();
      return $employer;
    }
    public function getEmployersAPIaccordingID($id){
        $employer = employer::join('emmployer_detail','employers.id', '=','emmployer_detail.id_employer')->where('employers.id',$id)->get();
      return $employer;
    }
    public function getReviewsAPIaccordingID($id){
        $reviews = employer::find($id)->reviews;
      return $reviews;
    }
    public function getPostsAPIaccordingID($id){
        $posts = employer::find($id)->posts;
      return $posts;
    }
    public function getLocation($id){
        $employer = employer::find($id);
        $location = employer::find($id)->location()->where('id',$employer->id_location);
      return $location;
    }
    public function getTotal($id){
       // $posts = posts::find($id);
        $employer = employer::join('location','employers.id_location', '=','location.id')->join('emmployer_detail','employers.id', '=','emmployer_detail.id_employer')->where('employers.id',$id)->get();
        //->select('posts.*','location.name','employers.url_avatar','employers.url_bia')
        

        return $employer;
    }
    public function getAddEmployer(){
        return view('viewAdmin.addEmployer');
    }

    public function postAddEmployer(EmployerRequest $req){
        $file_image_avatar="http://itjob-heroku.herokuapp.com/public/images/employers/".$req->file('EmployerImageAvatar')->getClientOriginalName();
        $file_image_cover="http://itjob-heroku.herokuapp.com/public/images/employers/".$req->file('EmployerImageCover')->getClientOriginalName();
        $employer=new employer;
        $employer->name=$req->txt_EmployerName;
        $employer->Description=$req->txt_EmployerDecription;
        $employer->id_location=$req->txt_EmployerLocation;
        $employer->url_avatar=$file_image_avatar;
        $employer->url_bia=$file_image_cover;
        $req->file('EmployerImageAvatar')->move('images/employers/',$file_image_avatar);
        $req->file('EmployerImageCover')->move('images/employers/',$file_image_cover);
        $employer->save();
        return redirect()->action('ControllerEmployer@getEmployers')->with(['flash_level'=>'success','flash_message'=>'Success !! Complete add employer']);
    }

    public function getDeleteEmployer($id){
        $employer=employer::find($id);
        $employer->delete($id);
        return redirect()->action('ControllerEmployer@getEmployers')->with(['flash_level'=>'success','flash_message'=>'Success !! Complete delete Employer']);
    }

    public function getEditEmployer($id){
        $data=employer::find($id);
        $parent=employer::select('id','name','Description','id_location','url_avatar','url_bia')->get()->toArray();
        return view('viewAdmin.editEmployer',compact('data','parent','id'));
    }

    public function postEditEmployer(EmployerRequest $req,$id){
        $employer=employer::find($id);
        $file_image_avatar=$req->file('EmployerImageAvatar')->getClientOriginalName();
        $file_image_cover=$req->file('EmployerImageCover')->getClientOriginalName();
        $employer=new employer;
        $employer->name=$req->txt_EmployerName;
        $employer->Description=$req->txt_EmployerDecription;
        $employer->id_location=$req->txt_EmployerLocation;
        $employer->url_avatar=$file_image_avatar;
        $employer->url_bia=$file_image_cover;
        $req->file('EmployerImageAvatar')->move('images/',$file_image_avatar);
        $req->file('EmployerImageCover')->move('images/',$file_image_cover);
        $employer->save();
        return redirect()->action('ControllerEmployer@getEmployers')->with(['flash_level'=>'success','flash_message'=>'Success !! Complete edit employer']);

    }
}
