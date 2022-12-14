@extends('layouts.app')

@section('content-auth')
    <main class="content">
        <div class="container-fluid p-0">
            <div class="row mb-2 mb-xl-3">
                <div class="col-auto d-none d-sm-block">
                    <h3><strong>Criar</strong> Curso</h3>
                </div>
            </div>

            @include('components.message')

            <form action="{{route('course.store')}}" method="post">
                @csrf
                @include('components.form-course')
                <button type="submit" class="btn btn-success col-md-1 m-4">Cadastrar</button>
            </form>

        </div>
    </main>
@endsection
