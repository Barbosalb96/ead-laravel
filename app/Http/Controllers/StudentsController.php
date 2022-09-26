<?php

namespace App\Http\Controllers;

use App\Http\Helpers\RedirectHelper;
use App\Http\Requests\StudentsRequest;
use App\Models\Course;
use App\Services\StudentsService\StudentsService;
use Illuminate\Http\Request;
use function response;
use function view;

class StudentsController extends Controller
{
    public function index()
    {
        return view('pages.Student.index', [
            'students' => (new StudentsService())->alunoRecent()
        ]);
    }

    public function create()
    {
        return view('pages.Student.create',
            [
                'courses' => Course::all()
            ]);
    }

    public function edit(int $student_id)
    {
        return view('pages.Student.edit',
            [
                'students' => StudentsService::findStudent($student_id),
                'courses' => Course::all()
            ]);
    }

    public function store(StudentsRequest $request)
    {
        $student = (new StudentsService())->store($request->all());


        dd($student);
        if ($student) {
            return RedirectHelper::redirectRoute(['students.index', ''], RedirectHelper::SUCCESS);
        }

        return RedirectHelper::redirectRoute(['students.index', ''], RedirectHelper::ERROR);
    }

    public function alterStatus(Request $request)
    {
        return response()->json((new StudentsService())->statusAluno($request->id));
    }
}
