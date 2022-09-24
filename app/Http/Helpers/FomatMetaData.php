<?php

namespace App\Http\Helpers;

class FomatMetaData
{
    public static function formatMetaDataHelper(array $data) :array
    {
        return [
            "deficiencia_type" => isset($data['deficiencia_type']) ?? 0,
            "receber_email" => isset($data['receber_email']) ?? 0,
            "receber_celular" => isset($data['receber_celular']) ?? 0,
            "experiencia_portal" => isset($data['experiencia_portal']) ?? 0,
        ];
    }

}
