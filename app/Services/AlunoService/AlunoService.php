<?php

namespace App\Services\AlunoService;

use App\Http\Helpers\FomatDataAluno;
use App\Http\Helpers\FomatMetaData;
use App\Models\Aluno;
use App\Services\AddressService\AddressService;
use App\Services\CursoService\CursoService;
use Illuminate\Support\Facades\Log;

class AlunoService
{
    public function alunoRecent()
    {
        return Aluno::with(['Curso', 'MetaData'])
            ->tenRecent();
    }


    public function statusAluno($id)
    {
        try {
            $aluno = Aluno::where('id', $id)->first();

            if (isset($aluno) && $aluno->status == 'Desativado') {
                $aluno->update(['status' => 1]);
                return $aluno;
            }

            $aluno->update(['status' => 0]);

        } catch (\Throwable $e) {
            return $e->getMessage();
        }

    }

    public static function findAluno(int $aluno)
    {
        return Aluno::with(['address', 'curso', "MetaData"])
            ->where('alunos.id', $aluno)->first();
    }

    public function store(array $data): bool
    {

        try {
            $aluno = Aluno::create(FomatDataAluno::formatDataAlunoHelper($data));

            CursoService::createCursoAluno($data, $aluno->id);

            foreach (FomatMetaData::formatMetaDataHelper($data) as $key => $meta) {
                $aluno->MetaData()->create([
                    'key' => $key,
                    'value' => $meta
                ]);
            }

            AddressService::createAddress($data, $aluno->id);

            return true;

        } catch (\Throwable $e) {
            Log::debug($e->getMessage());
            return false;
        }
    }


}

