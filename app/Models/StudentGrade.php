<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentGrade extends Model
{
    use HasFactory;

    protected $fillable = [
        'media',
        'note_1',
        'note_2',
        'note_3',
        'note_4',
        'status',
        'course_id',
        'subject_id',
        'student_id'
    ];


    public function subject()
    {
        return $this->hasOne(Subject::class,'id','subject_id');
    }

    public function getStatusAttribute($value)
    {
        $status = [1 => 'Aprovado', 2 => 'Reprovado', 3 => 'Analise'];
        return $status[$value];
    }

}
