<?php

namespace App\Http\Controllers;

use App\Models\License;
use App\Models\Project;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{
    public function index()
    {
        $company = Auth::user()->company_id;
        $users = User::query()->where('company_id', $company)->get();
        $license = License::query()->where('company_id', $company)->first();

        $projects = Project::query()
            ->where('company_id', $company)
            ->paginate(10);

        return view('projects.index', [
            'projects' => $projects,
            'license' => $license,
            'users' => $users,
        ]);
    }

    public function create()
    {
        $users = User::query()->where('company_id', Auth::user()->company_id)->get();
        return view('projects.create',[
            'users' => $users
        ]);
    }

    public function store(Request $request)
    {
        $company_id = Auth::user()->company_id;

        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'adm_project_id' => 'required|integer',
        ]);

        $projects = Project::query()->create([
            'name' => $request->get('name'),
            'description' => $request->get('description'),
            'adm_project_id' => $request->get('adm_project_id'),
            'company_id' => $company_id
        ]);

        event(new Registered($projects));

        return redirect(route('projects.index', absolute: false));
//        dump($request->all());
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
