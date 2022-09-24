<?php $__env->startSection('content-auth'); ?>
    <main class="content">
        <div class="container-fluid p-0">
            <div class="row mb-2 mb-xl-3">
                <div class="col-auto d-none d-sm-block">
                    <h3><strong>Editar</strong> Aluno</h3>
                </div>
            </div>

            <form action="" method="post">
                <?php echo csrf_field(); ?>
                <?php echo $__env->make('components.form-aluno', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <button type="submit" class="btn btn-success">Editar</button>
            </form>

        </div>
    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Lucas Barbosa\Desktop\Projeto-Estudos\EAD-LARAVEL\resources\views/pages/Aluno/edit.blade.php ENDPATH**/ ?>