<div class="card">
    <div class="card-body">
        <div class="d-flex flex-column">
            <h3>Dados pessoais</h3>
            <div class="row">
                <div class="mb-3 col-md-6">
                    <label class="form-label" for="name">NOME<span class="text-danger">*</span></label>
                    <input required type="text" class="form-control" name="name"
                           id="name">
                </div>
                <div class="mb-3 col-md-6">
                    <label class="form-label" for="type_course">TIPO CURSO<span
                            class="text-danger">*</span></label>

                    <select name="type_course" class="form-control" id="">
                        <option value="">Selecione o tipo do curso</option>
                        <?php $__currentLoopData = $tipo_curso; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tipo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($tipo->id); ?>"><?php echo e($tipo->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>

                </div>

            </div>
            <div class="row">
                <div class="mb-3 col-md-3">
                    <label class="form-label" for="modality">Modalidade<span
                            class="text-danger">*</span></label>

                    <select name="modality" class="form-control" id="">
                        <option value="">Selecione a modalidade</option>
                        <option value="1">Presencial</option>
                        <option value="2">Distancia</option>
                        <option value='3'>Semi-Presencial</option>

                    </select>

                </div>
                <div class="mb-3 col-md-3">
                    <label class="form-label" for="shift">Turno</label>
                    <select name="shift" class="form-control" id="shift">
                        <option value="">Selecione o horario</option>
                        <option value="1">Matutino</option>
                        <option value="2">Vespertino</option>
                        <option value="3">Noturno</option>

                    </select>
                </div>
                <div class="mb-3 col-md-3">
                    <label class="form-label" for="price">Valor</label>
                    <input type="text" class="form-control" name="price" id="price" placeholder="">
                </div>
                <div class="mb-3 col-md-3">
                    <label class="form-label" for="amount_period">Quantidade de periodos</label>
                    <input type="text" class="form-control" name="amount_period" id="amount_period" placeholder="">
                </div>
            </div>
            <div class="mb-3 col-md-3">
                <label class="form-label" for="description">Descrição</label>
                <textarea name="description" id="" class="form-control" style="width: 78.2vw" rows="10"></textarea>
            </div>
        </div>

    </div>
</div>
<?php /**PATH C:\Users\Lucas Barbosa\Desktop\Projeto-Estudos\EAD-LARAVEL\resources\views/components/form-curso.blade.php ENDPATH**/ ?>