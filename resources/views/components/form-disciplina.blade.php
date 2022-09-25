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
                    <label class="form-label" for="modulo_id">Modulo<span
                            class="text-danger">*</span></label>
                    <select name="modulo_id" class="form-control" id="">
                        <option value="">Selecione o modulo</option>

                        @php
                            $quantity =  $curso->amount_period;
                             for($curso->amount_period = 1;$curso->amount_period <= $quantity;$curso->amount_period ++){
                                echo ' <option value="'.$curso->amount_period.'">Modulo '.$curso->amount_period.'</option>';
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
