<?php

namespace App\Http\Helpers;

class RedirectHelper
{
    const SUCCESS = ['success' => 'EFETUADO COM SUCESSO !!!'];
    const ERROR = ['error' => 'ALGO DEU ERRADO !!'];

    public static function redirectRoute(string $route, array $message = [])
    {
        return redirect()->route($route)->with($message);
    }

}
