<?php if(session()->has('success')): ?>
    <div class="alert alert-success" role="alert">
        <?php echo e(session()->get('success')); ?>

    </div>
<?php endif; ?>

<?php if(session()->has('error')): ?>
    <div class="alert alert-danger" role="alert">
        <?php echo e(session()->get('error')); ?>

    </div>
<?php endif; ?>
<?php /**PATH C:\Users\Lucas Barbosa\Desktop\Projeto-Estudos\EAD-LARAVEL\resources\views/components/message.blade.php ENDPATH**/ ?>