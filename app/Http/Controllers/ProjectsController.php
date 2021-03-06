<?php

namespace App\Http\Controllers;

use App\Models\Project;

class ProjectsController extends Controller
{
    public function index()
    {
        $projects = Project::all();

        return view('projects.index', compact('projects'));
    }

    public function store()
    {
        //validate
        $attributes = request()->validate([
            'title' => 'required',
            'description' => 'required',
        ]);
        //persist
        Project::create($attributes);

        //redirect
        return redirect('/projects');
    }

    public function show()
    {
        $project = Project::findOrFail(request()->id);

        return view('projects.show', compact('project'));
    }
}
