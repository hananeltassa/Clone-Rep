<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function createProject(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $project = Project::create([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return response()->json($project, 201); 
    }

    public function getProjects()
    {
        $projects = Project::all();
        return response()->json($projects);
    }

    public function getProject($id)
    {
        $project = Project::find($id);

        if (!$project) {
            return response()->json(['message' => 'Project not found'], 404);
        }

        return response()->json($project);
    }

    public function updateProject(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $project = Project::find($id);

        if (!$project) {
            return response()->json(['message' => 'Project not found'], 404);
        }

        $project->name = $request->name;
        $project->description = $request->description;
        $project->save(); 

        return response()->json($project);
    }

    public function deleteProject($id)
    {
        $project = Project::find($id);

        if (!$project) {
            return response()->json(['message' => 'Project is not found'], 404);
        }

        $project->delete();

        return response()->json(['message' => 'Project deleted success']);
    }
}
