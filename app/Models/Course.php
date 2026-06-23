<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public function area()
    {
        return $this->belongsTo(Area::class);
    }

    public function trainingCenter()
    {
        return $this->belongsTo(TrainingCenter::class);
    }

    public function teachers()
    {
        return $this->belongsToMany(Teacher::class, 'course_teacher', 'curse_id', 'teacher_id');
    }

    public function apprentices()
    {
        return $this->hasMany(Apprentice::class);
    }
}
