<?php

namespace App\Http\Helpers;

class FormatDataStudent
{
    public static function formatDataStudentHelper(array $students): array
    {
        return [
            "nome" => $students['name'],
            "cpf" => $students['cpf'],
            "telefone-cel" => $students['telefone'],
            "telefone" => $students['telefone-outro'],
            "email" => $students['email'],
        ];
    }

}
