<?php

namespace App\Http\Controllers;

use App\Http\Helpers\RedirectHelper;
use App\Http\Requests\CourseRequest;
use App\Models\Course;
use App\Models\TypeCourse;
use App\Services\CourseService\CourseService;
use function view;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::simplePaginate(10);
        return view('pages.Course.index', ['courses' => $courses]);
    }

    public function create()
    {
        return view('pages.Course.create',
            ['typeCourses' => TypeCourse::all()]);
    }

    public function edit(Course $course)
    {
        return view('pages.Course.edit',
            [
                'typeCourses' => TypeCourse::all(),
                'course' => $course
            ]);
    }

    public function store(CourseRequest $request)
    {
        $course = (new CourseService())->Store($request->all());

        if ($course) {
            return RedirectHelper::redirectRoute(['course.index', ''], RedirectHelper::SUCCESS);
        }

        return RedirectHelper::redirectRoute(['course.index', ''], RedirectHelper::ERROR);
    }

    public function update(CourseRequest $request)
    {
        $course = (new CourseService())->update($request->id, $request->except('id'));

        if ($course) {
            return RedirectHelper::redirectRoute(['course.index', ''], RedirectHelper::SUCCESS);
        }

        return RedirectHelper::redirectRoute(['course.index', ''], RedirectHelper::ERROR);
    }
}
