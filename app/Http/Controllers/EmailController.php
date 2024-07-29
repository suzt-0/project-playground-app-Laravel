<?php

namespace App\Http\Controllers;
use App\Models\Project;
use Illuminate\Auth\Access\Gate;
use Illuminate\Support\Facades\Mail;
use App\Mail\ProjectInvitationEmail;

use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function emailForm(Project $project){
        // Gate::authorize('view', $project);
        // dd($project);
        return view('mail-invite', compact('project'));
    }
    public function sendEmail(Project $project, Request $request) {
        $toEmail = $request->email;
        $subject = 'Invitation to join '.$project->name .' project';
        $projectName = $project->name;
        $projectId = $project->id;

        try {
            Mail::to($toEmail)->send(new ProjectInvitationEmail($projectName, $projectId, $subject));
            notify()->success('Invitation sent successfully!','Mail sent');
            return redirect()->back()->with('success', 'Invitation sent successfully!');
        } catch (\Exception $e) {
            notify()->error('Failed to send Mail');
            return redirect()->back()->with('error', 'Failed to send invitation. Please try again.');
        }

        // Mail::to($toEmail)->send(new ProjectInvitationEmail($projectName, $projectId, $subject));
    }
}
