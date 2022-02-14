<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseLesson extends Model
{
    use HasFactory;

    protected $table = 'course_lessons';

    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id', 'id');
    }
}
