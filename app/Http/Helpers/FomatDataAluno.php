<?php

namespace App\Http\Helpers;

class FomatDataAluno
{
    public static function formatDataAlunoHelper(array $data): array
    {
        return [
            "nome" => $data['name'],
            "cpf" => $data['cpf'],
            "telefone-cel" => $data['telefone'],
            "telefone" => $data['telefone-outro'],
            "email" => $data['email'],
        ];
    }

}
