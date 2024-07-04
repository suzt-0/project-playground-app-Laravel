<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Project extends Model
{
    use HasFactory;
    public function task() :HasMany{
        return $this->hasMany(Task::class, 'project_id','id');
    }

    public function projectmember() :HasMany{
        return $this->hasMany(ProjectMember::class, 'project_id','id');
    }

    public function user() :BelongsTo
    {
    return $this->belongsTo(User::class);

    }
}
