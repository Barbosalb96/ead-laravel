<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
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
        return $this->hasOne(Address::class, 'aluno_id', 'id');
    }

    public function Curso()
    {
        return $this->belongsToMany(Curso::class, CursoAluno::class, 'aluno_id', 'curso_id');
    }

    public function MetaData()
    {
        return $this->hasMany(UsuarioMetaData::class, 'id_aluno', 'id');
    }

    public function getStatusAttribute($value)
    {
        return $value == 1 ? 'Ativo' : 'Desativado';
    }

    public function scopeTenRecent($query)
    {
        return $query->orderBy('id', 'desc')->
            simplePaginate(10);
    }
}
