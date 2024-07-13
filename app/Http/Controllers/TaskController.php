<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('tasks');
    }

    public function setProjectId(Request $request)
    {
        $project_id = $request->input('project_id');
        session(['project_id' => $project_id]);
        return redirect()->route('tasks.create');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $project_id = session('project_id');

        if (!$project_id) {
            return redirect()->route('projects.index')->with('error', 'No project selected.');
        }
        try{     
            $project = Project::findOrFail($project_id);
            $members = $project->users;
            //send members data from create
            return view('create-task',compact('project_id','members'));
        }catch (\Exception $e) {
            // Handle other exceptions or errors
            return redirect()->route('projects.index')->with('error', 'Failed to fetch project details.');
        }

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'start_date' => 'required|date',
            'due_date' => 'date|after_or_equal:start_date',
            'priority' => 'required|string|in:low,medium,high,urgent',
            'status' => 'required|string|in:Not Assigned,Assigned,Ongoing,Completed',
            'user_id'=> 'exists:users,id',
            'project_id'=> 'required|exists:projects,id',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        try {

            // Create the project
            $task = new Task();
            $task->name = $request->name;
            $task->description = $request->description;
            $task->start_date = $request->start_date;
            $task->due_date = $request->due_date;
            $task->priority = $request->priority;
            $task->status = $request->status;
            $task->user_id = $request->user_id;
            $task->project_id = $request->project_id;

            // add project id here
            
            $task->save();
            session()->forget('project_id');
            // Handle successful creation
            return redirect()->route('project.index')->with('success', 'Task created successfully!');
        } catch (\Exception $e) {

            // Handle failure
            return redirect()->back()->with('error', 'Failed to create task: ' . $e->getMessage())->withInput();
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        return view('show.task', compact('task'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task)
    {
        //   return edit view
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Task $task)
    {
        //samee as store but remove unnecessary parts susch as 
        // "$user=Auth::user();
        // $task = new Task();"
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        $task->delete();
        return redirect()->route('tasks.index')->with('deleted', 'data is deleted');//can be sent with message 
    }
}
