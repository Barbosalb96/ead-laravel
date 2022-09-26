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
                            <h1 class="mt-1 mb-3">{{count(\App\Models\Student::all())}}</h1>
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
                            <h1 class="mt-1 mb-3">{{count(\App\Models\Student::where('status',1)->get())}}</h1>
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
                            <h1 class="mt-1 mb-3">{{count(\App\Models\Student::where('status',0)->get())}}</h1>
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
                    <a href="{{route('students.create')}}" class="btn btn-primary">Matricular novo aluno</a>
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
                    @foreach($students as $student)
                        <tr>
                            <td>{{$student->id}}</td>
                            <td>{{$student->nome}}</td>
                            <td>{{$student->Course[0]->shiftName}}</td>
                            <td>{{$student->Course[0]->name}}</td>
                            <td>{{ explode(' ',$student->created_at)[0] }}</td>
                            <td>{{$student->status}}</td>
                            <td>
                                @if($student->status == 'Ativo')
                                    <a href="" class="btn btn-danger disable-aluno" data-id="{{$student->id}}"><i
                                            class="fas fa-times"></i>Desativar</a>
                                @else
                                    <a href="" class="btn btn-success active-aluno" data-id="{{$student->id}}"><i
                                            class="fas fa-times"></i>Ativar</a>
                                @endif
                                <a href="{{route('students.edit',$student->id)}}" class="btn btn-warning"><i
                                        class="fas fa-exclamation"></i>Editar</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="d-flex justify-content-end mx-3">
                    {!! $students->render()!!}
                </div>
            </div>


        </div>
    </main>
@endsection
