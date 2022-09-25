<?php

namespace App\Http\Controllers;

use App\Http\Helpers\RedirectHelper;
use App\Http\Requests\CursoRequest;
use App\Models\Curso;
use App\Models\TipoCurso;
use App\Models\TypeCourse;
use App\Services\CursoService\CursoService;
use function view;

class CursoController extends Controller
{
    public function index()
    {
        $cursos = Curso::simplePaginate(10);
        return view('pages.Curso.index', ['cursos' => $cursos]);
    }

    public function create()
    {
        return view('pages.Curso.create',
            ['tipo_curso' => TypeCourse::all()]);
    }

    public function edit(Curso $curso)
    {
        return view('pages.Curso.edit',
            [
                'tipo_curso' => TypeCourse::all(),
                'curso' => $curso
            ]);
    }

    public function store(CursoRequest $request)
    {
        $curso = (new CursoService())->Store($request->all());

        if ($curso) {
            return RedirectHelper::redirectRoute(['curso.index',''], RedirectHelper::SUCCESS);
        }

        return RedirectHelper::redirectRoute(['curso.index',''], RedirectHelper::ERROR);
    }

    public function update(CursoRequest $request)
    {
        $curso = (new CursoService())->update($request->id, $request->except('id'));

        if ($curso) {
            return RedirectHelper::redirectRoute(['curso.index',''], RedirectHelper::SUCCESS);
        }

        return RedirectHelper::redirectRoute(['curso.index',''], RedirectHelper::ERROR);
    }
}
