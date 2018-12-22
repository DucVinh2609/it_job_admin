<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller as Controller;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Validator;
use Illuminate\Http\Request;
use App\location;
use App\Http\Requests\LocationRequest;

class ControllerLocation extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    

    public function getLocation(){
        $location = location::all();
      return view('viewAdmin.admin_location',['location' => $location]);
    }
    public function getLocationAPI(){
        $location = location::all();
        return $location;
    }


    public function getAddLocation(){
        return view('viewAdmin.addLocation');
    }

    public function postAddLocation(LocationRequest $req){
        $location=new location;
        $location->name=$req->txtNameLocation;
        
        $location->save();
        return redirect()->action('ControllerLocation@getLocation')->with(['flash_level'=>'success','flash_message'=>'Success !! Complete add Location']);
    }

    public function getDeleteLocation($id){
        $location=location::find($id);
        $location->delete($id);
        return redirect()->action('ControllerLocation@getLocation')->with(['flash_level'=>'success','flash_message'=>'Success !! Complete delete Location']);
    }

    public function getEditLocation($id){
        $data=location::find($id);
        $parent=location::select('id','name')->get()->toArray();
        return view('viewAdmin.editLocation',compact('data','parent','id'));
    }

    public function postEditLocation(LocationRequest $req,$id){
        $location=location::find($id);
        $location->name=$req->get('txtNameLocation');
        
        $location->save();
        return redirect()->action('ControllerLocation@getLocation')->with(['flash_level'=>'success','flash_message'=>'Success !! Complete update location']);

    }
}
