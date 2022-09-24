@extends('layouts.app')

@section('content-auth')
    <main class="content">
        <div class="container-fluid p-0">
            <div class="row mb-2 mb-xl-3">
                <div class="col-auto d-none d-sm-block">
                    <h3><strong>Painel</strong> Aluno</h3>
                </div>
            </div>

            @if(session()->has('success'))
                <div class="alert alert-success" role="alert">
                    {{session()->get('success')}}
                </div>
            @endif
            <div class="card pb-3">
                <div class="card-header d-flex justify-content-between">
                    <h3>Cursos</h3>
                    <a href="{{route('curso.create')}}" class="btn btn-primary">Cadastrar Curso</a>
                </div>
                <table class="table table-striped table-hover">
                    <thead>
                    <tr>
                        <th>Codigo</th>
                        <th>Nome</th>
                        <th>Turno</th>
                        <th>Tipo</th>
                        <th>Periodos</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
{{--                    @foreach($alunos as $aluno)--}}
{{--                        <tr>--}}
{{--                            <td>{{$aluno->id}}</td>--}}
{{--                            <td>{{$aluno->nome}}</td>--}}
{{--                            <td>{{$aluno->Curso[0]->time}}</td>--}}
{{--                            <td>{{$aluno->Curso[0]->name}}</td>--}}
{{--                            <td>{{ explode(' ',$aluno->created_at)[0] }}</td>--}}
{{--                            <td>{{$aluno->status}}</td>--}}
{{--                            <td>--}}
{{--                                @if($aluno->status == 'Ativo')--}}
{{--                                    <a href="" class="btn btn-danger"><i class="fas fa-times"></i>Desativar</a>--}}
{{--                                @else--}}
{{--                                    <a href="" class="btn btn-success active-aluno" data-id="{{$aluno->id}}"><i--}}
{{--                                            class="fas fa-times"></i>Ativar</a>--}}
{{--                                @endif--}}
{{--                                <a href="{{route('alunos.edit',$aluno->id)}}" class="btn btn-warning"><i--}}
{{--                                        class="fas fa-exclamation"></i>Editar</a>--}}
{{--                            </td>--}}
{{--                        </tr>--}}
{{--                    @endforeach--}}
                    </tbody>
                </table>
                <div class="d-flex justify-content-end mx-3">
{{--                    {!! $alunos->render()!!}--}}
                </div>
            </div>
        </div>
    </main>
@endsection
