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
                        <th>Modalidade</th>
                        <th>Data Criação</th>
                        <th>price</th>
                        <th>status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($cursos as $curso)
                        <tr>
                            <td>{{$curso->id}}</td>
                            <td>{{$curso->name}}</td>
                            <td>{{$curso->shiftName}}</td>
                            <td>{{$curso->modalityName}}</td>
                            <td>{{$curso->dateCreate}}</td>
                            <td>R$ {{$curso->price}}</td>
                            <td>{{$curso->statusName}}</td>
                            <td>
                                @if($curso->status == 1)
                                    <a href="" class="btn btn-danger"><i class="fas fa-times"></i>Desativar</a>
                                @else
                                    <a href="" class="btn btn-success active-aluno" data-id="{{$curso->id}}"><i
                                            class="fas fa-times"></i>Ativar</a>
                                @endif
                                <a href="{{route('alunos.edit',$curso->id)}}" class="btn btn-warning"><i
                                        class="fas fa-exclamation"></i>Editar</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="d-flex justify-content-end mx-3">
                    {!! $cursos->render()!!}
                </div>
            </div>
        </div>
    </main>
@endsection
