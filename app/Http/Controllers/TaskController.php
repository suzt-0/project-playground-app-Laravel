<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Project;
use App\Models\Task;
use App\Models\User;
use Illuminate\Auth\Middleware\Authorize;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Validator;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function setProjectId(Request $request)
    {
        return redirect()->route('tasks.create');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Project $project)
    {
        // dd($project->id);
        Gate::authorize('view', $project);
        $members = $project->users;
        try {
            $project = Project::findOrFail($project->id);
            $members = $project->users;
            //send members data from create
            return view('create-task', compact('project', 'members'));
            // return view('create-task',compact('project_id','members'));
        } catch (\Exception $e) {
            // Handle other exceptions or errors
            return redirect()->route('projects.index')->with('error', 'Failed to fetch project details.');
        }

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Project $project)
    {
        // dd($project->id);
        Gate::authorize('view', $project);
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'start_date' => 'required|date',
            'due_date' => 'date|after_or_equal:start_date',
            'priority' => 'required|string|in:low,medium,high,urgent',
            'status' => 'required|string|in:Not Assigned,Assigned,Ongoing,Completed',
            'user_id' => 'exists:users,id',
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
            $task->project_id = $project->id;

            // add project id here

            $task->save();
            notify()->success('Task created successfully!');
            return redirect()->route('projects.show', compact('project'));
            // return redirect()->back()->with('success', 'Task created successfully!');
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
        // dd($task->id);
        $comments = $task->comment;
        $suggestions = $comments->where('comment_type', 'suggestion');
        $issues = $comments->where('comment_type', 'issue');
        // dd($issues);
        // dd($suggestions);
        return view('task-description', compact('task','suggestions','issues'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task)
    {
        $project = $task->project;
        Gate::authorize('update', $project);
        return view('task-edit', compact('task'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Task $task)
    {
        $project = $task->project;
        Gate::authorize('update', $project);
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'start_date' => 'required|date',
            'due_date' => 'date|after_or_equal:start_date',
            'priority' => 'required|string|in:low,medium,high,urgent',
            'status' => 'required|string|in:Not Assigned,Assigned,Ongoing,Completed',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        try {

            // Create the project
            $task->name = $request->name;
            $task->description = $request->description;
            $task->start_date = $request->start_date;
            $task->due_date = $request->due_date;
            $task->priority = $request->priority;
            $task->status = $request->status;
            $task->user_id = $request->user_id;

            $task->save();

            // Handle successful creation
            notify()->success('Task updated successfully!');
            return redirect()->back()->with('success', 'Task edited successfully!');
        } catch (\Exception $e) {

            // Handle failure
            notify()->error('Task could not be updated!');
            return redirect()->back()->with('error', 'Failed to edit task: ' . $e->getMessage())->withInput();
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        $project = $task->project;
        Gate::authorize('delete', $project);
        try {
            $task->delete();
            notify()->success('Task deleted successfully!');
            return redirect()->route('projects.show', compact('project'));//can be sent with message 
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to delete task: ' . $e->getMessage());
        }
    }

    // add comment
    public function commentStore(Request $request, Task $task)
    {
        // dd($project->id);
        $project = $task->project;
        // Gate::authorize('view', $project);
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'comment_text' => 'required|string',
            'comment_type' => 'required|string|in:suggestion,issue',
            'user_id' => 'exists:users,id',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        try {

            // Create the project
            $comment = new Comment();
            $comment->comment_text = $request->comment_text;
            $comment->comment_type = $request->comment_type;
            $comment->user_id = $request->user_id;
            $comment->task_id = $task->id;
            // add project id here

            $comment->save();
            notify()->success('task sucessfull!!');
            return redirect()->route('tasks.show', compact('task'));
            // return redirect()->back()->with('success', 'Task created successfully!');
        } catch (\Exception $e) {
            // Handle failure
            notify()->error('task failed!!');
            return redirect()->back()->with('error', 'Failed to create task: ' . $e->getMessage())->withInput();
        }

    } 
    
}
