<?php

namespace App\Services\CursoService;

use App\Models\Curso;
use App\Models\CursoAluno;

class CursoService
{
    public function createCursoAluno(array $data, int $aluno)
    {
        $curso = [
            'curso_id' => $data['curso'],
            'aluno_id' => $aluno,
        ];
        CursoAluno::create($curso);
    }

    public function Store(array $curso)
    {
        Curso::create($curso);
        return true;
    }


}
