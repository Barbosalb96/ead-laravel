<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeCourse extends Model
{
    const Type = ['Graduação', 'Tecnico'];

    use HasFactory;

    protected $fillable = ['name'];
}
