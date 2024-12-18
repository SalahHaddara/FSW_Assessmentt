<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::all();
        return response()->json($projects);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $project = new Project;
        $project->name = $request->name;
        $project->description = $request->description;
        $project->save();

        return response()->json([
            'message' => 'Project created',
            'project' => $project
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $project = Project::findOrFail($id);
        return response()->json($project);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $project = Project::findOrFail($id);

        $project->name = $request->name ?? $project->name;
        $project->description = $request->description ?? $project->description;
        $project->save();

        return response()->json([
            'message' => 'Project updated',
            'project' => $project
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $project = Project::findOrFail($id);
        
        $project->delete();

        return response()->json([
            'message' => 'Project deleted'
        ]);
    }
}
