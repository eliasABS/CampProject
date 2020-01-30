<?php

namespace App\Http\Controllers ;
use App\project; 
use App\category;
use App\City;


class ProjectController extends Controller
{
      
    public function index(){
        
        $projects = Project::latest();
        

        $projects->when(request('category_id'), function($q) {
            $q->where('category_id', request('category_id'));
        });


        return view('projects.index', [
            'projects' => project::latest()->get(),
            'categories' => category::all()
        ]);

    }
    public function create(){
        return view('projects.projectForm', [
            'cities' => City::all(),
            'categories' => category::all()
            
            ]
           
    );
    }
    public function store(){
        $project = new project();
        $project->project_name = request('project_name');
        $project->budget = request('budget');
        $project->bio = request('bio');
        $project->phone = request('phone');
        $project->city_id = request('city');
        $project->category_id = request('category');

        $project->save();
        return redirect('/projects');
    }
    public function show($id)
    {
        return view('projects.show', [
            'project' => Project::with('category')->find($id)
        ]);
    }
      
}
