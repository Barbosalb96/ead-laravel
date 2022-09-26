<div class="card">
    <div class="card-body">
        <div class="d-flex flex-column">
            <h3>Cadastrar Disciplina</h3>

            <div class="row">
                <div class="mb-3 col-md-6">
                    <label class="form-label" for="name">NOME<span class="text-danger">*</span></label>
                    <input required type="text" class="form-control" name="name"
                           id="name">
                </div>
                <div class="mb-3 col-md-6">
                    <label class="form-label" for="module_id">Modulo<span
                            class="text-danger">*</span></label>
                    <select name="module_id" class="form-control" id="">
                        <option value="">Selecione o modulo</option>

                        @php
                            $quantity =  $course->amount_period;
                             for($course->amount_period = 1;$course->amount_period <= $quantity;$course->amount_period ++){
                                echo ' <option value="'.$course->amount_period.'">Modulo '.$course->amount_period.'</option>';
                             }
                        @endphp
                    </select>

                </div>

            </div>
            <div class="mb-3 col-md-3">
                <label class="form-label" for="description">Descrição</label>
                <textarea name="description" id="" class="form-control" style="width: 78.2vw" rows="10"></textarea>
            </div>
        </div>

    </div>
</div>
