<?php

namespace Database\Factories;

use App\Models\Aluno;
use Illuminate\Database\Eloquent\Factories\Factory;

class AlunoFactory extends Factory
{
    protected $model = Aluno::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */

    public function definition()
    {
        return [
            'nome' => $this->faker->name,
            'cpf' => $this->faker->creditCardNumber,
            'telefone' => $this->faker->phoneNumber,
            'telefone-cel' => '',
            'email' => $this->faker->unique()->email,
            'apelido' => '',
            'status' => 1,
        ];
    }
}
