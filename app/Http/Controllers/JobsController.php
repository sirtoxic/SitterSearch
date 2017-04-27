<?php

namespace App\Http\Controllers;

use App\Jobs;

class JobsController extends Controller{
    public function index(){
      $jobs = Jobs::all();

      return view('jobs.jobs',compact('jobs'));
    }

    public function show($id){
      $job = Jobs::find($id);

      return view('jobs.show',compact('job'));
    }
}
