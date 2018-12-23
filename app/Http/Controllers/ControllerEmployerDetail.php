<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller as Controller;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Validator;
use Illuminate\Http\Request;
use App\emmployer_detail;
use App\Http\Requests\EmployerDetailRequest;

class ControllerEmployerDetail extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    

    public function getEmployerDetails(){
        $emmployer_detail = emmployer_detail::all();
        return view('viewAdmin.admin_employer_detail',['emmployer_detail' => $emmployer_detail]);
    }
    public function getEmployerDetailsAPI(){
        $emmployer_detail = emmployer_detail::all();
        return $emmployer_detail;
    }

    public function getAddEmployerDetail(){
        return view('viewAdmin.addEmployerDetail');
    }

    public function postAddEmployerDetail(EmployerDetailRequest $req){
        $emmployer_detail=new emmployer_detail;
        $emmployer_detail->id_employer=$req->txt_IDEmployer;
        $emmployer_detail->address=$req->txt_Address;
        $emmployer_detail->employees=$req->txt_Employees;
        $emmployer_detail->country=$req->txt_Country;
        $emmployer_detail->woking_time=$req->txt_WokingTime;
        $emmployer_detail->overview=$req->txt_Overview;
        $emmployer_detail->website=$req->txt_Website;
        $emmployer_detail->link_facebook=$req->txt_LinkFacebook;
        $emmployer_detail->save();
        return redirect()->action('ControllerEmployerDetail@getEmployerDetails')->with(['flash_level'=>'success','flash_message'=>'Success !! Complete add Employer Detail']);
    }

    public function getDeleteEmployerDetail($id){
        $emmployer_detail=emmployer_detail::find($id);
        $emmployer_detail->delete($id);
        return redirect()->action('ControllerEmployerDetail@getEmployerDetails')->with(['flash_level'=>'success','flash_message'=>'Success !! Complete delete Employer Detail']);
    }

    public function getEditEmployerDetail($id){
        $data=emmployer_detail::find($id);
        $parent=emmployer_detail::select('id','id_employer','address','employees','country','woking_time','overview','website','link_facebook')->get()->toArray();
        return view('viewAdmin.editEmployerDetail',compact('data','parent','id'));
    }

    public function postEditEmployerDetail(EmployerDetailRequest $req,$id){
        $emmployer_detail=emmployer_detail::find($id);
        $emmployer_detail->id_employer=$req->txt_IDEmployer;
        $emmployer_detail->address=$req->txt_Address;
        $emmployer_detail->employees=$req->txt_Employees;
        $emmployer_detail->country=$req->txt_Country;
        $emmployer_detail->woking_time=$req->txt_WokingTime;
        $emmployer_detail->overview=$req->txt_Overview;
        $emmployer_detail->website=$req->txt_Website;
        $emmployer_detail->link_facebook=$req->txt_LinkFacebook;
        $emmployer_detail->save();
        return redirect()->action('ControllerEmployerDetail@getEmployerDetails')->with(['flash_level'=>'success','flash_message'=>'Success !! Complete update Employer Detail']);

    }
}
