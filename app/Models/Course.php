<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'semester_id',
        'code',
        'name',
        'day'
    ];

    public function semester()
    {
        return $this->belongsTo(Semester::class);
    }

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }
}