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
        $modality = [1 => 'Distancia', 2 => 'Presencial', 3 => 'Semi-Presencial'];
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


}
