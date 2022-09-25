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
        return Curso::create($curso);
        return true;
    }

    public function update($cursoId, $cursoData)
    {
        $curso = Curso::find($cursoId);
        $curso = $curso->update($cursoData);
        return $curso;
    }


}
