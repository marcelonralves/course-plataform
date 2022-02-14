<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $table = 'courses';

    public function showAvaliablesCourses()
    {
        return $this->where('is_active', 1)->orderByDesc('id')->paginate(4);
    }

    public function showCoursesPaid()
    {
        return $this->where('price', '>', 0)->orderByDesc('id')->paginate(4);
    }

    public function showCoursesFree()
    {
        return $this->where('price', '=', 0)->orderByDesc('id')->paginate(4);
    }

    public function lesson()
    {
        return $this->hasMany(CourseLesson::class, 'course_id', 'id');
    }
}
