<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::paginate(10);
        return view('projects.index', [
            'projects' => $projects
        ]);
    }

    public function create()
    {
        return view('projects.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:255',
        ]);

        $projects = Project::query()->create([
            'name' => $request->get('name'),
            'description' => $request->get('description'),
        ]);

        event(new Registered($projects));

        return redirect(route('projects.index', absolute: false));
    }

    public function show(Project $project)
    {
        //
    }

    public function edit($id)
    {
        $project = Project::query()->find($id);
        return view('projects.edit', [
            'project' => $project
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:255',
        ]);

        $project = Project::find($id);
        $project->update([
            'name' => $request->get('name'),
            'description' => $request->get('description'),
        ]);

        return redirect(route('projects.index', absolute: false));
    }

    public function search(Request $request)
    {

        $search = $request->input('search');
        $results = Project::where('name', 'ilike', "%{$search}%")
            ->orWhere('description', 'ilike', "%{$search}%")
            ->get();

        return view('projects.search', [
            'projects' => $results
        ]);
    }

    public function destroy(Project $project)
    {
        //
    }
}
