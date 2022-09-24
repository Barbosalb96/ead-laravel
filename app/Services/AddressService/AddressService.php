<?php

namespace App\Services\AddressService;

use App\Models\Aluno;

class AddressService
{
    public static function createAddress(array $data, int $aluno)
    {
        $aluno = Aluno::where('id', $aluno)->first();
        return $aluno->Address()->create([
            "cep" => $data['cep'],
            "endereco" => $data['endereco'],
            "complemento" => $data['complemento'],
            "bairro" => $data['bairro'],
            "uf" => $data['uf'],
        ]);

    }

}
