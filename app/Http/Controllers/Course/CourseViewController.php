<?php

namespace App\Http\Controllers\Course;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\CourseCustomer;
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
        $customerCourses = CourseCustomer::where('customer_id', auth()->id())->get();



        return view('course.listcourse', compact('customerCourses'));
    }

    public function showCourse(Request $request, string $slug)
    {
        $course = Course::where('slug', $slug)->first();
        $customer = CourseCustomer::where(['customer_id' => auth()->id(), 'course_id' => $course->id])->first();

        return view('course.showcourse', compact('course', 'customer'));
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

    public function subscribe(Request $request, int $id)
    {
        $request->merge(['id' => $id]);

        $this->validate($request, [
            'id' => 'required|int',
        ]);

        $subscribeCustomer = new CourseCustomer();
        $subscribeCustomer->customer_id = auth()->id();
        $subscribeCustomer->course_id = $request->id;
        $subscribeCustomer->save();

        return redirect()->intended("/curso/meus-cursos");
    }
}
