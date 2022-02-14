<?php

namespace App\Http\Controllers\Course;

use App\Http\Controllers\Controller;
use GuzzleHttp\Psr7\Request;

class CourseViewController extends Controller
{
    public function index()
    {
        return view('course.index');
    }

    public function listCourse()
    {
        return view('course.listcourse');
    }

    public function showCourse()
    {
        return view('course.showcourse');
    }

    public function showCourseLesson()
    {
        return view('course.showcourselesson');
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
