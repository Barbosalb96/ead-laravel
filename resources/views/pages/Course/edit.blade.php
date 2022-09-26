@extends('layouts.app')

@section('content-auth')
    <main class="content">
        <div class="container-fluid p-0">
            <div class="row mb-2 mb-xl-3">
                <div class="col-auto d-none d-sm-block">
                    <h3><strong>Editar</strong> Curso</h3>
                </div>
            </div>

            @include('components.message')

            <form action="{{route('course.update')}}" method="post">
                @csrf
                @method('PUT')
                <input type="hidden" name="id" value="@if(isset($course->id)) {{$course->id}} @endif">
                @include('components.form-course')
                <button type="submit" class="btn btn-success">Editar</button>
            </form>

        </div>
    </main>
@endsection
