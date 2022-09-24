<?php

namespace App\Http\Controllers;

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

    public function store(CursoRequest $request)
    {
        (new CursoService())->Store($request->all());
        return redirect()->route('curso.index');
    }
}
