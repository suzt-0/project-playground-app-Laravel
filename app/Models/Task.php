<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Task extends Model
{
    use HasFactory;
    public function project() :BelongsTo{
        return $this->belongsTo(Project::class, 'project_id','id');
    }
    public function comment() :HasMany{
        return $this->hasMany(Comment::class, 'task_id','id');
    }
}
