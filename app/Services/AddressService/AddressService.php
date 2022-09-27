<?php

namespace App\Services\AddressService;

use App\Models\Student;

class AddressService
{
    public static function createAddress(array $address, int $student)
    {
        $student = Student::where('id', $student)->first();
        return $student->Address()->create([
            "zip" => $address['zip'],
            "address" => $address['address'],
            "complement" => $address['complement'],
            "neighborhood" => $address['neighborhood'],
            "uf" => $address['uf'],
        ]);

    }

}
