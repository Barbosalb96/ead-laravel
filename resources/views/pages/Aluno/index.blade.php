@extends('layouts.app')

@section('content-auth')
    <main class="content">
        <div class="container-fluid p-0">
            <div class="row mb-2 mb-xl-3">
                <div class="col-auto d-none d-sm-block">
                    <h3><strong>Painel</strong> Aluno</h3>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col mt-0">
                                    <h5 class="card-title">Total de Alunos</h5>
                                </div>
                            </div>
                            <h1 class="mt-1 mb-3">{{count(\App\Models\Aluno::all())}}</h1>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col mt-0">
                                    <h5 class="card-title">Alunos Ativos</h5>
                                </div>
                            </div>
                            <h1 class="mt-1 mb-3">{{count(\App\Models\Aluno::where('status',1)->get())}}</h1>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col mt-0">
                                    <h5 class="card-title">Alunos Inativos</h5>
                                </div>
                            </div>
                            <h1 class="mt-1 mb-3">{{count(\App\Models\Aluno::where('status',0)->get())}}</h1>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col mt-0">
                                    <h5 class="card-title">Alunos Inadimplentes</h5>
                                </div>
                            </div>
                            <h1 class="mt-1 mb-3">52</h1>
                        </div>
                    </div>
                </div>
            </div>

            @include('components.message')

            <div class="card pb-3">
                <div class="card-header d-flex justify-content-between">
                    <h3>Alunos matriculados</h3>
                    <a href="{{route('alunos.create')}}" class="btn btn-primary">Matricular novo aluno</a>
                </div>
                <table class="table table-striped table-hover">
                    <thead>
                    <tr>
                        <th>Matricula</th>
                        <th>Nome</th>
                        <th>Turno</th>
                        <th>Curso</th>
                        <th>Data criação</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($alunos as $aluno)
                        <tr>
                            <td>{{$aluno->id}}</td>
                            <td>{{$aluno->nome}}</td>
                            <td>{{$aluno->Curso[0]->time}}</td>
                            <td>{{$aluno->Curso[0]->name}}</td>
                            <td>{{ explode(' ',$aluno->created_at)[0] }}</td>
                            <td>{{$aluno->status}}</td>
                            <td>
                                @if($aluno->status == 'Ativo')
                                    <a href="" class="btn btn-danger disable-aluno" data-id="{{$aluno->id}}"><i
                                            class="fas fa-times"></i>Desativar</a>
                                @else
                                    <a href="" class="btn btn-success active-aluno" data-id="{{$aluno->id}}"><i
                                            class="fas fa-times"></i>Ativar</a>
                                @endif
                                <a href="{{route('alunos.edit',$aluno->id)}}" class="btn btn-warning"><i
                                        class="fas fa-exclamation"></i>Editar</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="d-flex justify-content-end mx-3">
                    {!! $alunos->render()!!}
                </div>
            </div>


        </div>
    </main>
@endsection
