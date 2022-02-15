<?php

namespace App\Repository;

use App\Models\Course;
use App\Models\CourseCustomer;

class CourseRepository
{
    public function dashboard()
    {
        $courses = (new Course())->showAvaliablesCourses();
        $coursesFree = (new Course())->showCoursesFree();
        $coursesPaid = (new Course())->showCoursesPaid();

        return compact('courses', 'coursesFree', 'coursesPaid');
    }

    public function listCourses()
    {
         return CourseCustomer::where('customer_id', auth()->id())->get();
    }

    public function showCourse(string $slug): array
    {
        $course = Course::where('slug', $slug)->first();
        $customer = CourseCustomer::where(['customer_id' => auth()->id(), 'course_id' => $course->id])->first();

        return compact('course', 'customer');
    }

    public function subscribe(int $id)
    {
        $subscribeCustomer = new CourseCustomer();
        $subscribeCustomer->customer_id = auth()->id();
        $subscribeCustomer->course_id = $id;
        $subscribeCustomer->save();
    }
}
