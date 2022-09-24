<?php

namespace Database\Factories;

use App\Models\Curso;
use Illuminate\Database\Eloquent\Factories\Factory;

class CursoFactory extends Factory
{

    protected $model = Curso::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'amount_period' => 10,
            'shift' => 1,
            'modality' => 1,
            'description' => $this->faker->text(),
            'price' => 10.0,
            'status' => 1,
            'type_course' => 1
        ];
    }
}
