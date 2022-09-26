@extends('layouts.app')

@section('content-auth')
    <main class="content">
        <div class="container-fluid p-0">
            <div class="row mb-2 mb-xl-3">
                <div class="col-auto d-none d-sm-block">
                    <h3><strong>Criar</strong> Disciplina</h3>
                </div>
            </div>

            <table class="table table-striped table-hover">
                <thead>
                <tr>
                    <th>Codigo</th>
                    <th>Nome</th>
                    <th>Modulo</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>

                @foreach($course->Subject as $subject)
                    <tr>
                        <td>{{$subject->id}}</td>
                        <td>{{$subject->name}}</td>
                        <td>Modulo - {{$subject->module_id}}</td>
                        <td>
                            @if($course->name == 1)
                                <a href="" class="btn btn-danger"><i class="fas fa-times"></i>Desativar</a>
                            @else
                                <a href="" class="btn btn-success active-aluno" data-id="{{$course->id}}"><i
                                        class="fas fa-times"></i>Ativar</a>
                            @endif
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

            <a href="{{route('subject.create',$course->id)}}" class="btn btn-vimeo">Cadastrar Disciplina</a>

        </div>
    </main>
@endsection
