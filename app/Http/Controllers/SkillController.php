<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller as Controller;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Validator;
use Illuminate\Http\Request;
use App\Skill;
use App\Http\Requests\SkillRequest;

class SkillController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    

    public function getSkill(){
        $Skill = Skill::all();
      return view('viewAdmin.admin_skill',['Skill' => $Skill]);
    }
    public function getSkillAPI(){
        $Skill = Skill::all();
        return $Skill;
    }
    public function getSkillaccordingID($id){
        $Skill = Skill::find($id)->name;
        return $Skill;
    }


    public function getAddSkill(){
        return view('viewAdmin.addSkill');
    }

    public function postAddSkill(SkillRequest $req){
        $Skill=new skill;
        $Skill->name=$req->txtNameSkill;
        
        $Skill->save();
        return redirect()->action('SkillController@getSkill')->with(['flash_level'=>'success','flash_message'=>'Success !! Complete add Post']);
    }

    public function getDeleteSkill($id){
        $Skill=Skill::find($id);
        $Skill->delete($id);
        return redirect()->action('SkillController@getSkill')->with(['flash_level'=>'success','flash_message'=>'Success !! Complete delete Skill']);
    }

    public function getEditSkill($id){
        $data=Skill::find($id);
        $parent=Skill::select('id','name')->get()->toArray();
        return view('viewAdmin.editSkill',compact('data','parent','id'));
    }

    public function postEditSkill(SkillRequest $req,$id){
        $Skill=Skill::find($id);
        $Skill->name=$req->get('txtNameSkill');
        
        $Skill->save();
        return redirect()->action('SkillController@getSkill')->with(['flash_level'=>'success','flash_message'=>'Success !! Complete update Skill']);

    }
}
