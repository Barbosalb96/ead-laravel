<?php

namespace App\Http\Controllers;

use App\Http\Helpers\RedirectHelper;
use App\Models\Course;
use App\Services\SubjectService\SubjectService;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function index(int $course)
    {
        $course = (new SubjectService())->getSubjectCourse($course);
        return view('pages.Subject.index',
            ['course' => $course]
        );
    }

    public function create(int $course)
    {
        return view('pages.Subject.create',
            ['course' => Course::find($course)]
        );
    }

    public function store(Request $request)
    {
        $response = (new SubjectService())->store($request->all());

        if ($response) {
            return RedirectHelper::redirectRoute(['subject.index', $request->course_id], RedirectHelper::SUCCESS);
        }

        return RedirectHelper::redirectRoute(['subject.index', $request->course_id], RedirectHelper::ERROR);
    }
}
