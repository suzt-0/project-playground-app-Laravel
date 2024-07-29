<?php

namespace App\Http\Controllers;

use App\Models\ProjectMember;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ProjectMemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('join-projects');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255|exists:projects,name',
            'project_id' => 'required|exists:projects,id', // Validate that project_id exists in projects table
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        try {
            $user = Auth::user();
            // Check if the user is already a member of the project
            $existingMember = ProjectMember::where('user_id', $user->id)
                ->where('project_id', $request->project_id)
                ->first();

            if ($existingMember) {
                return redirect()->back()->with('error', 'You are already a member of this project')->withInput();
            }
            
            // Create the project
            $projectMember = new ProjectMember();
            $projectMember->user_id = $user->id;
            $projectMember->project_id = $request->project_id;

            $projectMember->save();

            // Handle successful creation
            return redirect()->route('dashboard')->with('success', 'Project created successfully!');
        } catch (\Exception $e) {

            // Handle failure
            return redirect()->back()->with('error', 'Failed to create project: ' . $e->getMessage())->withInput();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(ProjectMember $projectMember)
    {
        return view('projectMembers-show',compact('projectMember'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProjectMember $projectMember)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ProjectMember $projectMember)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProjectMember $projectMember)
    {
        $projectMember->delete();
    } 
}
