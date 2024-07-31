<?php

namespace App\Policies;

use App\Models\Project;
use App\Models\Task;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class TaskPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     */
    // public function viewAny(User $user): bool
    // {
    //     //
    // }

    // /**
    //  * Determine whether the user can view the model.
    //  */
    public function view(User $user, Task $task): bool
    {
        $project=$task->project;
        return $user->id === $project->admin_id || $project->isMember($user);
    }

    // /**
    //  * Determine whether the user can create models.
    //  */
    public function create(User $user, Project $project): bool
    {
        dd('hello');
        return true;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Task $task, Project $project): bool
    {
        dd($project->users->contains($user->id));
        return $project->users->contains($user->id) || $project->admin->contains($user->id);
    }

    /**
     * Determine whether the user can delete the model.
     */
    // public function delete(User $user, Task $task): bool
    // {
    //     //
    // }

    // /**
    //  * Determine whether the user can restore the model.
    //  */
    // public function restore(User $user, Task $task): bool
    // {
    //     //
    // }

    // /**
    //  * Determine whether the user can permanently delete the model.
    //  */
    // public function forceDelete(User $user, Task $task): bool
    // {
    //     //
    // }
}