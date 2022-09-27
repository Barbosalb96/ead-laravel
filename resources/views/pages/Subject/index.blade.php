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
                    <th>Carga Horaria</th>
                    <th>Modulo</th>
                </tr>
                </thead>
                <tbody>

                @foreach($course->Subject as $subject)
                    <tr>
                        <td>{{$subject->id}}</td>
                        <td>{{$subject->name}}</td>
                        <td>{{$subject->workload}}h</td>
                        <td>Modulo - {{$subject->module_id}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>

            <a href="{{route('subject.create',$course->id)}}" class="btn btn-vimeo">Cadastrar Disciplina</a>

        </div>
    </main>
@endsection
