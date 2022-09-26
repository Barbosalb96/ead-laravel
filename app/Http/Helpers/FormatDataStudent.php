<?php

namespace App\Http\Helpers;

class FormatDataStudent
{
    public static function formatDataStudentHelper(array $data): array
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
