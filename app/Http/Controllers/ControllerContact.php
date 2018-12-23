<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller as Controller;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Validator;
use Illuminate\Http\Request;
use App\contact;
use App\Http\Requests\ContactRequest;

class ControllerContact extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    

    public function getContact(){
        $contact = contact::all();
      return view('viewAdmin.admin_contact',['contact' => $contact]);
    }
    public function getContactAPI(){
        $contact = contact::all();
        return $contact;
    }

    public function getEditContact($id){
        $data=contact::find($id);
        $parent=contact::select('id','email','phone','address')->get()->toArray();
        return view('viewAdmin.editContact',compact('data','parent','id'));
    }

    public function postEditContact(ContactRequest $req,$id){
        $contact=contact::find($id);
        $contact->email=$req->get('txtEmail');
        $contact->phone=$req->get('txtPhone');
        $contact->address=$req->get('txtAddress');
        
        $contact->save();
        return redirect()->action('ControllerContact@getContact')->with(['flash_level'=>'success','flash_message'=>'Success !! Complete update contact']);

    }
}
