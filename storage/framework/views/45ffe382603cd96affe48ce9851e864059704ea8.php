<div class="card">
    <div class="card-body">
        <div class="d-flex flex-column">
            <h3>Dados pessoais</h3>

            <div class="row">
                <div class="mb-3 col-md-6">
                    <label class="form-label" for="name">NOME<span class="text-danger">*</span></label>
                    <input required type="text" class="form-control" name="name"
                           value="<?php if(isset($curso->name)): ?> <?php echo e($curso->name); ?> <?php endif; ?>"
                           id="name">
                </div>
                <div class="mb-3 col-md-6">
                    <label class="form-label" for="type_course">TIPO CURSO<span
                            class="text-danger">*</span></label>
                    <select name="type_course" class="form-control" id="">
                        <option value="">Selecione o tipo do curso</option>
                        <?php $__currentLoopData = $tipo_curso; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tipo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($tipo->id); ?>"
                                    <?php if(isset($curso->type_course) &&  $curso->type_course == $tipo->id): ?> selected <?php endif; ?>><?php echo e($tipo->name); ?></option>
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
                        <option value="1" <?php if(isset($curso->modality) &&  $curso->modality == 1): ?> selected <?php endif; ?>>
                            Presencial
                        </option>
                        <option value="2" <?php if(isset($curso->modality) &&  $curso->modality == 2): ?> selected <?php endif; ?>>
                            Distancia
                        </option>
                        <option value='3' <?php if(isset($curso->modality) &&  $curso->modality == 3): ?> selected <?php endif; ?>>
                            Semi-Presencial
                        </option>

                    </select>

                </div>
                <div class="mb-3 col-md-3">
                    <label class="form-label" for="shift">Turno</label>
                    <select name="shift" class="form-control" id="shift">
                        <option value="">Selecione o horario</option>
                        <option value="1" <?php if(isset($curso->shift) &&  $curso->shift == 1): ?> selected <?php endif; ?>>Matutino
                        </option>
                        <option value="2" <?php if(isset($curso->shift) &&  $curso->shift == 2): ?> selected <?php endif; ?>>Vespertino
                        </option>
                        <option value="3" <?php if(isset($curso->shift) &&  $curso->shift == 3): ?> selected <?php endif; ?>>Noturno
                        </option>

                    </select>
                </div>
                <div class="mb-3 col-md-3">
                    <label class="form-label" for="price">Valor</label>
                    <input type="text" class="form-control" name="price" id="price"
                           value="<?php if(isset($curso->price)): ?> <?php echo e($curso->price); ?> <?php endif; ?>" placeholder="">
                </div>
                <div class="mb-3 col-md-3">
                    <label class="form-label" for="amount_period">Quantidade de periodos</label>
                    <input type="text" class="form-control" name="amount_period"
                           value="<?php if(isset($curso->amount_period)): ?> <?php echo e($curso->amount_period); ?> <?php endif; ?>" id="amount_period"
                           placeholder="">
                </div>
            </div>
            <div class="mb-3 col-md-3">
                <label class="form-label" for="description">Descrição</label>
                <textarea name="description" id="" class="form-control" style="width: 78.2vw" rows="10"><?php if(isset($curso->description)): ?><?php echo e($curso->description); ?><?php endif; ?></textarea>
            </div>
        </div>

    </div>
</div>
<?php /**PATH C:\Users\Lucas Barbosa\Desktop\Projeto-Estudos\EAD-LARAVEL\resources\views/components/form-curso.blade.php ENDPATH**/ ?>