<div class="card">
    <div class="card-body">
        <div class="d-flex flex-column">
            <h3>Dados pessoais</h3>
            <div class="row">
                <div class="mb-3 col-md-6">
                    <label class="form-label" for="nome">NOME<span class="text-danger">*</span></label>
                    <input required type="text" class="form-control" name="name"
                           id="name">
                </div>
                <div class="mb-3 col-md-6">
                    <label class="form-label" for="codigo">CODIGO<span class="text-danger">*</span></label>
                    <div class="d-flex">
                        <input required type="text" name="codigo"
                               class="form-control" id="codigo">
                        <button class="btn btn-success mx-2 col-md-2" id="gerar-codigo">Gerar Codigo</button>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="mb-3 col-md-3">
                    <label class="form-label" for="tipo_curso">TIPO CURSO<span
                            class="text-danger">*</span></label>

                    <select name="tipo_curso" class="form-control" id="">
                        <option value="">Selecione o tipo do curso</option>
                        @foreach($tipo_curso as $tipo)
                            <option value="{{$tipo->id}}">{{$tipo->name}}</option>
                        @endforeach
                    </select>

                </div>
                <div class="mb-3 col-md-3">
                    <label class="form-label" for="horario">Horarios</label>
                    <select name="tipo_curso" class="form-control" id="">
                        <option value="">Selecione o horario</option>
                        <option value="">Matutino</option>
                        <option value="">Vespertino</option>
                        <option value="">Noturno</option>

                    </select>
                </div>
                <div class="mb-3 col-md-3">
                    <label class="form-label" for="valor">Valor</label>
                    <input type="text" class="form-control" id="valor" placeholder="">
                </div>
                <div class="mb-3 col-md-3">
                    <label class="form-label" for="apelido">Valor</label>
                    <input type="text" class="form-control" id="valor" placeholder="">
                </div>
            </div>
        </div>

    </div>
</div>
