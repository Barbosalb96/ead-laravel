<?php

namespace App\Http\Controllers;

use App\Http\Helpers\RedirectHelper;
use App\Http\Requests\AlunoRequest;
use App\Models\Curso;
use App\Services\AlunoService\AlunoService;
use Illuminate\Http\Request;
use function response;
use function view;

class AlunoController extends Controller
{
    public function index()
    {
        return view('pages.Aluno.index', [
            'alunos' => (new AlunoService())->alunoRecent()
        ]);
    }

    public function create()
    {
        return view('pages.Aluno.create',
            [
                'cursos' => Curso::all()
            ]);
    }

    public function edit(int $aluno_id)
    {
        return view('pages.Aluno.edit',
            [
                'aluno' => AlunoService::findAluno($aluno_id),
                'cursos' => Curso::all()
            ]);
    }

    public function store(AlunoRequest $request)
    {
        $aluno = (new AlunoService())->store($request->all());

        if ($aluno) {
            return RedirectHelper::redirectRoute(['alunos.index', ''], RedirectHelper::SUCCESS);
        }

        return RedirectHelper::redirectRoute(['alunos.index', ''], RedirectHelper::ERROR);
    }

    public function alterStatus(Request $request)
    {
        return response()->json((new AlunoService())->statusAluno($request->id));
    }
}
