<?php

namespace App\Http\Controllers ;
use App\project;
 

class ProjectController extends Controller
{
      
    public function index(){
        return view('projects.index');
    }
    public function create(){
        return view('projects.projectForm');
    }
    public function store(){
        $project = new project();
        $project->project_name = request('project_name');
        $project->address = request('address');
        $project->budget = request('budget');
        $project->save();
    }
      
}
