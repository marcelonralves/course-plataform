<?php

namespace App\Http\Controllers\Course;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\CourseLesson;
use Illuminate\Http\Request;

class CourseViewController extends Controller
{
    public function index()
    {
        $courses = (new Course())->showAvaliablesCourses();
        $coursesFree = (new Course())->showCoursesFree();
        $coursesPaid = (new Course())->showCoursesPaid();
        return view('course.index', compact('courses', 'coursesFree', 'coursesPaid'));
    }

    public function listCourse()
    {
        return view('course.listcourse');
    }

    public function showCourse(Request $request, string $slug)
    {
        $course = Course::where('slug', $slug)->first();

        return view('course.showcourse', compact('course'));
    }

    public function showCourseLesson(Request $request, string $slug, string $slugclass)
    {
        $courselesson = CourseLesson::where('slug', $slugclass)->first();

        return view('course.showcourselesson', compact('courselesson'));
    }

    public function listCertificate()
    {
        return view('course.certificate');
    }

    public function showProfile()
    {
        return view('course.profile');
    }
}
