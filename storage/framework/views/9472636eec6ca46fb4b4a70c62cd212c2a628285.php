<?php $__env->startSection('content-auth'); ?>
    <main class="content">
        <div class="container-fluid p-0">
            <div class="row mb-2 mb-xl-3">
                <div class="col-auto d-none d-sm-block">
                    <h3><strong>Painel</strong> Aluno</h3>
                </div>
            </div>

            <?php if(session()->has('success')): ?>
                <div class="alert alert-success" role="alert">
                    <?php echo e(session()->get('success')); ?>

                </div>
            <?php endif; ?>

            <div class="card pb-3">
                <div class="card-header d-flex justify-content-between">
                    <h3>Cursos</h3>
                    <a href="<?php echo e(route('curso.create')); ?>" class="btn btn-primary">Cadastrar Curso</a>
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
                    <?php $__currentLoopData = $cursos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $curso): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($curso->id); ?></td>
                            <td><?php echo e($curso->name); ?></td>
                            <td><?php echo e($curso->shiftName); ?></td>
                            <td><?php echo e($curso->modalityName); ?></td>
                            <td><?php echo e($curso->dateCreate); ?></td>
                            <td>R$ <?php echo e($curso->price); ?></td>
                            <td><?php echo e($curso->statusName); ?></td>
                            <td>
                                <?php if($curso->status == 1): ?>
                                    <a href="" class="btn btn-danger"><i class="fas fa-times"></i>Desativar</a>
                                <?php else: ?>
                                    <a href="" class="btn btn-success active-aluno" data-id="<?php echo e($curso->id); ?>"><i
                                            class="fas fa-times"></i>Ativar</a>
                                <?php endif; ?>
                                <a href="<?php echo e(route('alunos.edit',$curso->id)); ?>" class="btn btn-warning"><i
                                        class="fas fa-exclamation"></i>Editar</a>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
                <div class="d-flex justify-content-end mx-3">
                    <?php echo $cursos->render(); ?>

                </div>
            </div>
        </div>
    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Lucas Barbosa\Desktop\Projeto-Estudos\EAD-LARAVEL\resources\views/pages/Curso/index.blade.php ENDPATH**/ ?>