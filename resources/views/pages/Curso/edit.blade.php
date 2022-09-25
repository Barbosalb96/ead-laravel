@extends('layouts.app')

@section('content-auth')
    <main class="content">
        <div class="container-fluid p-0">
            <div class="row mb-2 mb-xl-3">
                <div class="col-auto d-none d-sm-block">
                    <h3><strong>Editar</strong> Curso</h3>
                </div>
            </div>
            @if($errors->any())
                <div class="alert alert-danger" role="alert">
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </div>
            @endif

            <form action="{{route('curso.update')}}" method="post">
                @csrf
                @method('PUT')
                <input type="hidden" name="id" value="@if(isset($curso->id)) {{$curso->id}} @endif">
                @include('components.form-curso')
                <button type="submit" class="btn btn-success">Editar</button>
            </form>

        </div>
    </main>
@endsection
