<?php

namespace Database\Factories;

use App\Models\Aluno;
use App\Models\Curso;
use App\Models\CursoAluno;
use Illuminate\Database\Eloquent\Factories\Factory;

class CursoAlunoFactory extends Factory
{

    protected $model = CursoAluno::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'aluno_id' => Aluno::factory(),
            'curso_id' => Curso::factory(),
        ];
    }
}
