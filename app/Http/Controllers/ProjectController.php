<?php

namespace App\Http\Controllers ;
use App\project;
 

class ProjectController extends Controller
{
      
    public function index(){
        return view('projects.index');
    }
    public function projectForm(){
        return view('projects.projectForm');
    }
    public function projectStore(){
        $project = new project();
        $project->first_name = request('first_name');
        $project->second_name = request('second_name');
        $project->last_name = request('last_name');
        $project->save();
    }
      
}
