<?php

namespace App\Services\AddressService;

use App\Models\Student;

class AddressService
{
    public static function createAddress(array $data, int $aluno)
    {
        $aluno = Student::where('id', $aluno)->first();
        return $aluno->Address()->create([
            "zip" => $data['zip'],
            "address" => $data['address'],
            "complement" => $data['complement'],
            "neighborhood" => $data['neighborhood'],
            "uf" => $data['uf'],
        ]);

    }

}
