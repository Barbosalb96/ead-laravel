<?php

namespace App\Http\Controllers;

use App\Http\Requests\AlunoRequest;
use App\Models\Aluno;
use App\Models\Curso;
use App\Services\AlunoService\AlunoService;
use Illuminate\Http\Request;
use function redirect;
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
        (new AlunoService())->store($request->all());
        return redirect()->route('alunos.index')->with(['success' => 'Novo aluno cadastrado com sucesso']);
    }

    public function alterStatus(Request $request)
    {
        return response()->json((new AlunoService())->statusAluno($request->id));
    }
}
