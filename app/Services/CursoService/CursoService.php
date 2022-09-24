<?php

namespace App\Services\CursoService;

use App\Models\CursoAluno;

class CursoService
{
    public static function createCursoAluno(array $data, int $aluno)
    {
        $curso = [
            'curso_id' => $data['curso'],
            'aluno_id' => $aluno,
        ];
        CursoAluno::create($curso);

    }
}
