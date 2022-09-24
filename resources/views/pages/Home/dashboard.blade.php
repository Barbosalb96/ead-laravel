@extends('layouts.app')

@section('content-auth')
    <main class="content">
        <div class="container-fluid p-0">
            <div class="row mb-2 mb-xl-3">
                <div class="col-auto d-none d-sm-block">
                    <h3><strong>Painel</strong> Dashboard</h3>
                </div>
            </div>


            <div class="card flex-fill w-100">
                <div class="card-header">

                    <h5 class="card-title mb-0">Movimentação</h5>
                </div>
                <div class="card-body py-3">
                    <div class="chart chart-sm"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                        <canvas id="chartjs-dashboard-line" style="display: block; width: 852px; height: 252px;" width="852" height="252" class="chartjs-render-monitor"></canvas>
                    </div>
                </div>
            </div>

            {{-- table de alunos --}}

            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h3>Lista de Alunos</h3>
                    <a href="" class="btn btn-primary">Matricular novo aluno</a>
                </div>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Matricula</th>
                            <th>Nome</th>
                            <th>Turno</th>
                            <th>Data</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>8641343</td>
                            <td>Lucas Barbosa Silva</td>
                            <td>Matutino</td>
                            <td>{{ date('d-m-Y') }}</td>
                            <td>Ativo</td>
                            <td>
                                <a href="" class="btn btn-danger"><i class="fas fa-times"></i>Desativar</a>
                                <a href="" class="btn btn-warning"><i class="fas fa-exclamation"></i>Editar</a>
                            </td>
                        </tr>
                        <tr>
                            <td>8641343</td>
                            <td>Lucas Barbosa Silva</td>
                            <td>Matutino</td>
                            <td>{{ date('d-m-Y') }}</td>
                            <td>Ativo</td>
                            <td>
                                <a href="" class="btn btn-danger"><i class="fas fa-times"></i>Desativar</a>
                                <a href="" class="btn btn-warning"><i class="fas fa-exclamation"></i>Editar</a>
                            </td>
                        </tr>

                        <tr>
                            <td>8641343</td>
                            <td>Lucas Barbosa Silva</td>
                            <td>Matutino</td>
                            <td>{{ date('d-m-Y') }}</td>
                            <td>Ativo</td>
                            <td>
                                <a href="" class="btn btn-danger"><i class="fas fa-times"></i>Desativar</a>
                                <a href="" class="btn btn-warning"><i class="fas fa-exclamation"></i>Editar</a>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>


        </div>
    </main>
@endsection
