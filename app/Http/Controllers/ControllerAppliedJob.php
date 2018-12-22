<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller as Controller;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Validator;
use Illuminate\Http\Request;
use App\AppliedJob;

class ControllerAppliedJob extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    

    public function getAppliedJob(){
        $AppliedJob = AppliedJob::all();
      return view('viewAdmin.admin_applied_job',['AppliedJob' => $AppliedJob]);
    }
    public function getAppliedJobAPI(){
        $AppliedJob = AppliedJob::all();
      return $AppliedJob;
    }

    
}
