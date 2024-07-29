<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\ProjectMember;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Validator;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $Projects = $user->myProject;
        return view('my-projects', compact('Projects'));
    }
    public function joined(){
        $user =Auth::user();
        $Projects = $user->joinedProject;
        return view('my-projects', compact('Projects'));
    }
    public function completed(){
        $user =Auth::user();
        $Projects = $user->myProject()->whereStatus('Completed')->get();
        return view('my-projects', compact('Projects'));
    }
    public function failed(){
        $user =Auth::user();
        $Projects = $user->myProject()->whereStatus('Dropped')->get();
        return view('my-projects', compact('Projects'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create-project');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request data
        $validator = Validator::make($request->all(),[
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'start_date' => 'required|date',
            'due_date' => 'required|date|after_or_equal:start_date', 
            'status' => 'required|string|in:Not-Started,Ongoing,Completed,Dropped',
            // 'admin_id' => 'required|exists:users,id', // Validate that admin_id exists in users table
        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }

        try {

            // Create the project
            $user=Auth::user();
            $project = new Project();
            $project->name = $request->name;
            $project->description = $request->description;
            $project->start_date = $request->start_date;
            $project->due_date = $request->due_date;
            $project->status = $request->status;
            $project->admin_id = $user->id;
    
            $project->save();
    
            // Handle successful creation
            notify()->success('Project created successfully!');
            return redirect()->route('projects.create')->with('success', 'Project created successfully!');
        } catch (\Exception $e) {

            // Handle failure
            notify()->error('Failed to create project: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Failed to create project: ' . $e->getMessage())->withInput();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        // Gate::authorize('view', $project);
        $members =$project->users;
        $tasks =$project->tasks;
        
        return view('project-description', compact('project','members','tasks'));
    }

    /**
     * Show the form for editing the specified resource.
     */
   public function edit(Project $project)
    {
        Gate::authorize('update', $project);
        return view('project-edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        Gate::authorize('update', $project);
        // Validate the request data
        $validator = Validator::make($request->all(),[
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'start_date' => 'required|date',
            'due_date' => 'required|date|after_or_equal:start_date', 
            'status' => 'required|string|in:Not-Started,Ongoing,Completed,Dropped',
        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }

        try {

            $project->name = $request->name;
            $project->description = $request->description;
            $project->start_date = $request->start_date;
            $project->due_date = $request->due_date;
            $project->status = $request->status;
    
            $project->save();
    
            // Handle successful creation
            return redirect()->back()->with('success', 'Project updated successfully!');
        } catch (\Exception $e) {

            // Handle failure
            return redirect()->back()->with('error', 'Failed to update project: ' . $e->getMessage())->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        Gate::authorize('update', $project);
        try {
            $project->delete();
            $project->projectmember()->delete();
            return redirect()->route('index')->with('success', 'Project deleted successfully!');  
        } catch (\Exception $e) {

            // Handle failure
            return redirect()->back()->with('error', 'Failed to delete project: ' . $e->getMessage());
        }
    }

    public function removeMember(ProjectMember $projectMember)
    {

        // Gate::authorize('update', $project);
        try {
            $projectMember->tasks()->delete();
            $projectMember->delete();
            return redirect()->back()->with('success', 'member removed sucessfully');  
        } catch (\Exception $e) {

            // Handle failure
            return redirect()->back()->with('error', 'Failed to remove member: ' . $e->getMessage());
        }
    }
}
