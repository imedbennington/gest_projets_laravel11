<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\User;
class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::with('members')->get();
        return view('projects.index', compact('projects'));
    }

    public function create()
    {
        // Get all users to display in the members list
        $users = User::all();

        // Pass users to the view
        return view('projects.create-projects', compact('users'));

    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'status' => 'pending',
        ]);

        $project = Project::create($request->all());
        $project->members()->attach($request->members); // Attach selected members
        return redirect()->route('projects.index');
    }

    public function show(Project $project)
    {
        return view('projects.show', compact('project'));
    }

    public function edit(Project $project)
    {
        return view('projects.edit', compact('project'));
    }

    public function update(Request $request, Project $project)
    {
        $project->update($request->all());
        return redirect()->route('projects.index');
    }

    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('projects.index');
    }
}

