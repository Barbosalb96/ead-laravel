<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeCourse extends Model
{
    const Type = ['Graduação', 'Tecnico', 'Licenciatura'];

    use HasFactory;

    protected $fillable = ['name'];
}
