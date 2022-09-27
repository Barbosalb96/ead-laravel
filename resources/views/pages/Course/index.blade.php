@extends('layouts.app')

@section('content-auth')
    <main class="content">
        <div class="container-fluid p-0">
            <div class="row mb-2 mb-xl-3">
                <div class="col-auto d-none d-sm-block">
                    <h3><strong>Painel</strong> Curso</h3>
                </div>
            </div>

            @include('components.message')

            <div class="card pb-3">
                <div class="card-header d-flex justify-content-between">
                    <h3>Cursos</h3>
                    <a href="{{route('course.create')}}" class="btn btn-primary">Cadastrar Curso</a>
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
                    @foreach($courses as $course)
                        <tr>
                            <td>{{$course->id}}</td>
                            <td>{{$course->name}}</td>
                            <td>{{$course->shiftName}}</td>
                            <td>{{$course->modalityName}}</td>
                            <td>{{$course->dateCreate}}</td>
                            <td>R$ {{$course->price}}</td>
                            <td>{{$course->statusName}}</td>
                            <td>
                                @if($course->status == 1)
                                    <a href="" class="btn btn-danger disabled-status-course" data-id="{{$course->id}}"><i class="fas fa-times"></i>Desativar</a>
                                @else
                                    <a href="" class="btn btn-success active-status-course" data-id="{{$course->id}}"><i
                                            class="fas fa-times"></i>Ativar</a>
                                @endif
                                <a href="{{route('course.edit',$course->id)}}" class="btn btn-warning"><i
                                        class="fas fa-exclamation"></i>Editar</a>
                                <a href="{{route('subject.index',$course->id)}}" class="btn btn-flickr"><i
                                        class="fas fa-exclamation"></i>Modulos</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

                <div class="d-flex justify-content-end mx-3">
                    {!! $courses->render()!!}
                </div>
            </div>
        </div>
    </main>

@endsection
