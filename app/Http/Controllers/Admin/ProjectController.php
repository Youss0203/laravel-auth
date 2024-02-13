<?php

namespace App\Http\Controllers\Admin;



use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Composer;


class ProjectController extends Controller
{
    
    public function index()
    {
        $projects = Project::all();
        return view('admin.projects.index', compact('projects'));
    }

    public function create()
    {
        return view('admin.projects.create');
    }


    public function store(Request $request)
    {
        $newProject = Project::create($request->all());
        return redirect()->route('admin.projects.show', $project);
    }



    public function show(Project $project)
    {
        return view('admin.projects.show', compact('project'));
    }



    public function edit(Project $project)
    {
        return view('admin.projects.edit', compact('project'));
    }




    public function update(Request $request, Project $project)
    {
        $project->update($request->all());
        return redirect()->route('admin.projects.show', $project);
    }


    public function destroy(project $project)
    {
        $project->delete();
        return redirect()->route('admin.projects.index');
    }

    public function deletedIndex(){
        $projects = Project::onlyTrashed()->get();
        
        return view('admin.projects.deleted-index', compact('projects'));
    }
}