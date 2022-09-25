<?php

namespace Database\Seeders;

use App\Models\Address;
use App\Models\Aluno;
use App\Models\Curso;
use App\Models\CursoAluno;
use App\Models\TypeCourse;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        foreach (TypeCourse::Type as $type) {
            TypeCourse::create(['name' => $type]);
        }
        User::factory(10)->create();
//        Aluno::factory(10)->create();
//        Address::factory(10)->create();
//        Curso::factory(10)->create();
//        CursoAluno::factory(10)->create();


    }
}
