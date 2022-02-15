<?php

namespace App\Http\Controllers\Course;

use App\Http\Controllers\Controller;
use App\Http\Requests\ShowCourseRequest;
use App\Models\Course;
use App\Models\CourseCustomer;
use App\Models\CourseLesson;
use App\Repository\CourseRepository;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class CourseViewController extends Controller
{
    private CourseRepository $repository;

    public function __construct(CourseRepository $repository)
    {
        $this->repository = $repository;
    }

    public function dashboard(): View
    {
        $getCourses = $this->repository->dashboard();

        return view('course.index', [
            'courses' => $getCourses['courses'],
            'coursesFree' => $getCourses['coursesFree'],
            'coursesPaid' => $getCourses['coursesPaid']
        ]);
    }

    public function listCourse(): View
    {
        $customerCourses = $this->repository->listCourses();
        return view('course.listcourse', compact('customerCourses'));
    }

    public function showCourse(ShowCourseRequest $request, string $slug): View
    {
        $request->merge(['slug' => $slug]);

        $courseInfo = $this->repository->showCourse($request->input('slug'));

        return view('course.showcourse', [
            'course' => $courseInfo['course'],
            'customer' => $courseInfo['customer']
        ]);
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
            'id' => 'required|int|exists:course,id',
        ]);

        $this->repository->subscribe($request->input('id'));

        return redirect()->intended("/curso/meus-cursos");
    }
}
