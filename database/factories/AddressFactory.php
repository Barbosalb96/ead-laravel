<?php

namespace Database\Factories;

use App\Models\Aluno;
use Illuminate\Database\Eloquent\Factories\Factory;

class AddressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'aluno_id' => Aluno::factory(),
            'cep' => $this->faker->currencyCode,
            'endereco' => $this->faker->city,
            'complemento' => $this->faker->address,
            'bairro' => $this->faker->streetAddress,
            'uf' => $this->faker->state,
        ];
    }
}
