<?php

namespace App\Http\Controllers;

use App\Http\Helpers\RedirectHelper;
use App\Models\Curso;
use App\Services\SubjectService\SubjectService;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function index(int $curso)
    {
        return view('pages.Modulos.index',
            [
                'curso' => Curso::with('Subject')->find($curso),

            ]
        );
    }

    public function create(int $curso)
    {
        return view('pages.Modulos.create', ['curso' => Curso::find($curso)]);
    }

    public function store(Request $request)
    {
        $response = (new SubjectService())->store($request->all());

        if ($response) {
            return RedirectHelper::redirectRoute(['modulo.index', $request->course_id], RedirectHelper::SUCCESS);
        }

        return RedirectHelper::redirectRoute(['modulo.index', $request->course_id], RedirectHelper::ERROR);
    }
}
