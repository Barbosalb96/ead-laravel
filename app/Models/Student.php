<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'cpf',
        'telefone',
        'telefone-cel',
        'email',
        'status',
        'apelido',
    ];

    public function Address()
    {
        return $this->hasOne(Address::class, 'student_id', 'id');
    }

    public function Course()
    {
        return $this->belongsToMany(Course::class, StudentCourse::class, 'students_id', 'course_id');
    }

    public function MetaData()
    {
        return $this->hasMany(UserMetaData::class, 'student_id', 'id');
    }

    public function getStatusAttribute($value)
    {
        return $value == 1 ? 'Ativo' : 'Desativado';
    }

    public function scopeTenRecent($query)
    {
        return $query->orderBy('id', 'desc')
            ->simplePaginate(10);
    }

}
