<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class ProjectController extends Controller
{
    public function index() 
    {
    	$projects = Project::all();
    	return view('projects.index', compact('projects'));
    }


    public function create() 
    {
    	return view('projects.create');
    }

    public function show(Project $project) 
    {
        return view('projects.show', compact('project'));
    }

    public function edit($id) 
    {

    	$project = Project::find($id);
    	return view('projects.edit', compact('project'));
    }

    public function update($id) 
    {
        Project::update(request(['title', 'description']));
    	// $project = Project::find($id);

    	// $project->title = request('title');
    	// $project->description = request('description');

    	// $project->save();

    	return redirect('/projects');
    }

    public function destroy($id) 
    {
    	Project::find($id)->delete();
    	return redirect('/projects');
    }

    public function store() 
    {

        Project::create(request(['title', 'description']));

    	// $project = new Project();

    	// $project->title = request('title');
    	// $project->description = request('description');

    	// $project->save();

    	return redirect('/projects');
    }
}
