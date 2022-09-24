<?php $__env->startSection('content-auth'); ?>
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
                            <h1 class="mt-1 mb-3"><?php echo e(count(\App\Models\Aluno::all())); ?></h1>
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
                            <h1 class="mt-1 mb-3"><?php echo e(count(\App\Models\Aluno::where('status',1)->get())); ?></h1>
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
                            <h1 class="mt-1 mb-3"><?php echo e(count(\App\Models\Aluno::where('status',0)->get())); ?></h1>
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
            

            <?php if(session()->has('success')): ?>
                <div class="alert alert-success" role="alert">
                    <?php echo e(session()->get('success')); ?>

                </div>
            <?php endif; ?>
            <div class="card pb-3">
                <div class="card-header d-flex justify-content-between">
                    <h3>Alunos matriculados</h3>
                    <a href="<?php echo e(route('alunos.create')); ?>" class="btn btn-primary">Matricular novo aluno</a>
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
                    <?php $__currentLoopData = $alunos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $aluno): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($aluno->id); ?></td>
                            <td><?php echo e($aluno->nome); ?></td>
                            <td><?php echo e($aluno->Curso[0]->time); ?></td>
                            <td><?php echo e($aluno->Curso[0]->name); ?></td>
                            <td><?php echo e(explode(' ',$aluno->created_at)[0]); ?></td>
                            <td><?php echo e($aluno->status); ?></td>
                            <td>
                                <?php if($aluno->status == 'Ativo'): ?>
                                    <a href="" class="btn btn-danger disable-aluno" data-id="<?php echo e($aluno->id); ?>"><i
                                            class="fas fa-times"></i>Desativar</a>
                                <?php else: ?>
                                    <a href="" class="btn btn-success active-aluno" data-id="<?php echo e($aluno->id); ?>"><i
                                            class="fas fa-times"></i>Ativar</a>
                                <?php endif; ?>
                                <a href="<?php echo e(route('alunos.edit',$aluno->id)); ?>" class="btn btn-warning"><i
                                        class="fas fa-exclamation"></i>Editar</a>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
                <div class="d-flex justify-content-end mx-3">
                    <?php echo $alunos->render(); ?>

                </div>
            </div>


        </div>
    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Lucas Barbosa\Desktop\Projeto-Estudos\EAD-LARAVEL\resources\views/pages/Aluno/index.blade.php ENDPATH**/ ?>