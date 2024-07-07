<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class ProjectMember extends Model
{
    use HasFactory;

    protected $guarded=[
        'id',
        'created_at',
        'updated_at',
    ];

    // public function project() :BelongsTo{
    //     return $this->belongsTo(Project::class, 'project_id','id');
    // }
    
    // public function user() :BelongsTo{
    //     return $this->belongsTo(User::class, 'user_id','id');
    // }
    public function users() : BelongsToMany {
        return $this->belongsToMany(User::class, 'project_members', 'project_id', 'user_id');
    }
    
    public function projects() : BelongsToMany {
        return $this->belongsToMany(Project::class, 'project_members', 'user_id', 'project_id');
    }
    
}
