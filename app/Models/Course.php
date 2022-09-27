<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    const DESATIVADO = 0;
    const ATIVO = 1;

    protected $fillable = [
        'name',
        'amount_period',
        'shift',
        'modality',
        'type_course',
        'description',
        'price',
        'status',
    ];

    public function setPriceAttribute($value)
    {
        return $this->attributes['price'] = explode(',', $value)[0];
    }

    public function getShiftNameAttribute()
    {
        $shift = [1 => 'Matutino', 2 => 'Vespertino', 3 => 'Noturno'];
        return $shift[$this->shift];
    }

    public function getModalityNameAttribute()
    {
        $modality = [1 => 'Presencial', 2 => 'Distancia', 3 => 'Semi-Presencial'];
        return $modality[$this->modality];
    }

    public function getDateCreateAttribute()
    {
        return date('d-m-Y ', strtotime(explode(' ', $this->created_at)[0]));
    }

    public function getStatusNameAttribute()
    {
        $status = [0 => 'desativado', 1 => 'Ativo'];
        return $status[$this->status];
    }

    public function Subject()
    {
        return $this->hasMany(Subject::class, 'course_id', 'id');
    }

    public function scopeActive($query)
    {
        return $query->where('status', self::ATIVO);
    }

}
