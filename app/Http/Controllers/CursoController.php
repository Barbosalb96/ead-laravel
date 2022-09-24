<?php

namespace App\Http\Controllers;

use App\Models\TipoCurso;
use function view;

class CursoController extends Controller
{
    public function index()
    {
        return view('pages.Curso.index');
    }

    public function create()
    {
        return view('pages.Curso.create',
            [
                'tipo_curso' => TipoCurso::all()
            ]);
    }
}
