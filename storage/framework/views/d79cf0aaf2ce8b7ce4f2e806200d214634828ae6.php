<?php $__env->startSection('content-auth'); ?>
    <main class="content">
        <div class="container-fluid p-0">
            <div class="row mb-2 mb-xl-3">
                <div class="col-auto d-none d-sm-block">
                    <h3><strong>Editar</strong> Curso</h3>
                </div>
            </div>
            <?php if($errors->any()): ?>
                <div class="alert alert-danger" role="alert">
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            <?php endif; ?>

            <form action="<?php echo e(route('curso.update')); ?>" method="post">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>
                <input type="hidden" name="id" value="<?php if(isset($curso->id)): ?> <?php echo e($curso->id); ?> <?php endif; ?>">
                <?php echo $__env->make('components.form-curso', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <button type="submit" class="btn btn-success">Editar</button>
            </form>

        </div>
    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Lucas Barbosa\Desktop\Projeto-Estudos\EAD-LARAVEL\resources\views/pages/Curso/edit.blade.php ENDPATH**/ ?>