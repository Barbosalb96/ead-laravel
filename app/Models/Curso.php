<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'amount_period',
        'time',
    ];

    public function getTimeAttribute($value)
    {
        return strtoupper($value);
    }
}
