@extends('layouts.app')

@section('content-auth')
    <main class="content">
        <div class="container-fluid p-0">
            <div class="row mb-2 mb-xl-3">
                <div class="col-auto d-none d-sm-block">
                    <h3>Informações do aluno</h3>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs pull-right" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" data-bs-toggle="tab" href="#tab-1" aria-selected="true"
                               role="tab">Informações pessoais</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" data-bs-toggle="tab" href="#tab-2" aria-selected="false" tabindex="-1"
                               role="tab">Meu Curso</a>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="tab-1" role="tabpanel">
                            <div class="info-aluno d-flex align-items-center">
                                <img src="https://cdn-icons-png.flaticon.com/512/149/149071.png" width="80px"
                                     style="margin-right: 10px" alt="">
                                <div class="d-flex flex-column">
                                    <h3 class="card-title">{{$info['nome']}}</h3>
                                    <h5>Curso : </h5>
                                </div>
                            </div>
                            <hr>

                            <div class="row">
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="nome">APELIDO<span
                                            class="text-danger">*</span></label>
                                    <input required="" type="text" class="form-control" name="name"
                                           value="{{$info['apelido']}}" id="name">
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="cpf">E-mail <span
                                            class="text-danger">*</span></label>
                                    <input required="" type="text" name="cpf" value="{{$info['telefone']}}"
                                           class="form-control" id="cpf" placeholder="000.000.000-00">
                                </div>
                            </div>

                            <div class="row">
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="nome">Telefone celular *<span
                                            class="text-danger">*</span></label>
                                    <input required="" type="text" class="form-control" name="name"
                                           value="{{$info['telefone']}}" id="name">
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="cpf">Outro telefone<span class="text-danger">*</span></label>
                                    <input required="" type="text" name="cpf" value="612.300.603-75"
                                           class="form-control" id="cpf" placeholder="000.000.000-00">
                                </div>
                            </div>


                            <div class="row">
                                <H3 class="card-title">ENDEREÇO</H3>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="nome">CEP<span
                                            class="text-danger">*</span></label>
                                    <input required="" type="text" class="form-control" name="name"
                                           value="Lucas Barbosa Silva" id="name">
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="cpf">Complemento<span
                                            class="text-danger">*</span></label>
                                    <input required="" type="text" name="cpf" value="612.300.603-75"
                                           class="form-control" id="cpf" placeholder="000.000.000-00">
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="nome">Bairro<span
                                            class="text-danger">*</span></label>
                                    <input required="" type="text" class="form-control" name="name"
                                           value="Lucas Barbosa Silva" id="name">
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="cpf">Cidade<span class="text-danger">*</span></label>
                                    <input required="" type="text" name="cpf" value="612.300.603-75"
                                           class="form-control" id="cpf" placeholder="000.000.000-00">
                                </div>
                            </div>
                        </div>

                        {{dd($info)}}

                        <div class="tab-pane fade text-center" id="tab-2" role="tabpanel">
                            <table class="table table-striped table-hover">
                                <thead>
                                <tr>
                                    <th>Situação</th>
                                    <th>Nome da Disciplina</th>
                                    <th>Carga Horaria</th>
                                    <th>Período Letivo</th>
                                    <th>Média</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($info['course'][0]['subject'] as $subject)
                                    @foreach($info['course_student'][0]['subject'] as $subject)

                                        <tr>
                                            <td>{{$subject['name']}}</td>
                                            <td>{{$subject['name']}}</td>
                                            <td>{{$subject['name']}}</td>
                                            <td>{{$subject['name']}}</td>
                                            <td>{{$subject['workload']}}</td>
                                        </tr>
                                    @endforeach
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>
@endsection
