<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller as Controller;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Validator;
use Illuminate\Http\Request;
use App\posts;
use App\Http\Requests\PostRequest;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    

    public function getPosts(){
        $posts = posts::all();
        return view('viewAdmin.admin_post',['posts' => $posts]);
    //    return $posts;
    }
    public function getPostsAPI(){
        $posts = posts::all();
        return $posts;
    }
    public function getPostsAPIaccordingID($id){
       // $posts = posts::find($id);
        $post = posts::join('employers','employers.id', '=','posts.id_employer')->where('posts.id',$id)->get();

        return $post;
    }
    

    public function getAddPost(){
        return view('viewAdmin.addPosts');
    }

    public function postAddPost(PostRequest $req){
        $post=new posts;
        $post->Title=$req->txtTitle;
        $post->Description=$req->txtDescription;
        $post->requirement=$req->txtRequirement;
        $post->Salary=$req->txtSalary;
        $post->Amount_of_people=$req->txtAmount_of_people;
        $post->Start_day=$req->dateStart_day;
        $post->End_day=$req->dateEnd_day;
        $post->id_skill=$req->txtIDSkill;
        $post->id_employer=$req->txtIDEmployer;
        $post->post_time=$req->post_time;
        $post->save();
        return redirect()->action('PostController@getPosts')->with(['flash_level'=>'success','flash_message'=>'Success !! Complete add Post']);
    }

    public function getDeletePost($id){
        $post=posts::find($id);
        $post->delete($id);
        return redirect()->action('PostController@getPosts')->with(['flash_level'=>'success','flash_message'=>'Success !! Complete delete Post']);
    }

    public function getEditPost($id){
        $data=posts::find($id);
        $parent=posts::select('id','Title','Description','requirement','Salary','Amount_of_people','Start_day','End_day','id_skill','id_employer','post_time')->get()->toArray();
        return view('viewAdmin.editPost',compact('data','parent','id'));
    }

    public function postEditPost(PostRequest $req,$id){
        $post=posts::find($id);
        $post->Title=$req->get('txtTitle');
        $post->Description=$req->get('txtDescription');
        $post->requirement=$req->get('txtRequirement');
        $post->Salary=$req->get('txtSalary');
        $post->Amount_of_people=$req->get('txtAmount_of_people');
        $post->Start_day=$req->get('dateStart_day');
        $post->End_day=$req->get('dateEnd_day');
        $post->id_skill=$req->get('txtIDSkill');
        $post->id_employer=$req->get('txtIDEmployer');
        $post->post_time=$req->get('post_time');
        $post->save();
        return redirect()->action('PostController@getPosts')->with(['flash_level'=>'success','flash_message'=>'Success !! Complete update Post']);

    }
}
