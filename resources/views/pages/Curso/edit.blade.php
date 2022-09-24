@extends('layouts.app')

@section('content-auth')
    <main class="content">
        <div class="container-fluid p-0">
            <div class="row mb-2 mb-xl-3">
                <div class="col-auto d-none d-sm-block">
                    <h3><strong>Editar</strong> Aluno</h3>
                </div>
            </div>

            <form action="" method="post">
                @csrf
                @include('components.form-aluno')
                <button type="submit" class="btn btn-success">Editar</button>
            </form>

        </div>
    </main>
@endsection
