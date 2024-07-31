<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Project extends Model
{
    use HasFactory;

    protected $guarded=[
        'id',
        'created_at',
        'updated_at',
    ];

    public function tasks() :HasMany{
        return $this->hasMany(Task::class, 'project_id','id');
    }

    public function projectmember() :HasMany{
        return $this->hasMany(ProjectMember::class, 'project_id','id');
    }

    public function admin() :BelongsTo
    {
        return $this->belongsTo(User::class, 'admin_id', 'id');//admin
    } 
    public function users() : BelongsToMany
    {
        return $this->belongsToMany(User::class, 'project_members', 'project_id', 'user_id')->withPivot('id');
    }
    
    // public function isMember(User $user): bool
    // {
    //     return $this->hasOneThrough(User::class, ProjectMember::class, 'project_id', 'id')
    //                 ->where('user_id', $user->id)
    //                 ->exists();
    // }
    public function isMember(User $user): bool
    {
        return $this->users->contains($user->id);
    }
}
