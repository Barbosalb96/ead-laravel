<div class="card">
    <div class="card-body">
        <div class="d-flex flex-column">
            <h3>Dados pessoais</h3>
            <div class="row">
                <div class="mb-3 col-md-6">
                    <label class="form-label" for="nome">NOME COMPLETO<span class="text-danger">*</span></label>
                    <input required type="text" class="form-control" name="name"
                           @if(!empty($aluno->nome)) value="{{$aluno->nome}}" @endif id="name">
                </div>
                <div class="mb-3 col-md-6">
                    <label class="form-label" for="cpf">CPF<span class="text-danger">*</span></label>
                    <input required type="text" name="cpf"
                           @if(!empty($aluno->cpf)) value="{{$aluno->cpf}}" @endif
                           class="form-control" id="cpf"
                           placeholder="000.000.000-00">
                </div>
            </div>
            <div class="row">
                <div class="mb-3 col-md-2">
                    <label class="form-label" for="telefone">TELEFONE CELULAR<span
                            class="text-danger">*</span></label>
                    <input required type="tel" class="form-control"
                           @if(!empty($aluno->telefone)) value="{{$aluno->telefone}}" @endif
                           name="telefone" id="telefone"
                           placeholder="(98) 9 9999-9999">
                </div>
                <div class="mb-3 col-md-2">
                    <label class="form-label" for="telefone-outro">OUTRO TELEFONE</label>
                    <input type="tel" class="form-control" name="telefone-outro"
                           @if(!empty($aluno->telefone_cel)) value="{{$aluno->telefone_cel}}" @endif
                           id="telefone-outro"
                           placeholder="(98) 9 9999-9999">
                </div>
                <div class="mb-3 col-md-4">
                    <label class="form-label" for="email">EMAIL<span
                            class="text-danger">*</span></label>
                    <input required type="email" class="form-control" id="email" name="email"
                           @if(!empty($aluno->email)) value="{{$aluno->email}}" @endif
                           placeholder="email@email.com">
                </div>
                <div class="mb-3 col-md-4">
                    <label class="form-label" for="apelido">APELIDO</label>
                    @if(!empty($aluno->apelido))
                        value="{{$aluno->apelido}}"
                    @endif
                    <input type="text" class="form-control" id="apelido" placeholder="apelido">
                </div>
            </div>
        </div>

    </div>
</div>
<div class="card">
    <div class="card-body">
        <div class="d-flex flex-column">
            <h3>Endereço</h3>
            <div class="row">
                <div class="mb-3 col-md-2">
                    <label class="form-label" for="cep">CEP<span class="text-danger">*</span></label>
                    <input required type="text" class="form-control"
                           @if(!empty($aluno->address->cep)) value="{{$aluno->address->cep}}" @endif
                           name="cep" id="cep"
                           placeholder="00000-000">
                </div>
                <div class="mb-3 col-md-4">
                    <label class="form-label" for="endereco">ENDEREÇO<span class="text-danger">*</span></label>
                    <input required type="text" class="form-control"
                           @if(!empty($aluno->address->endereco)) value="{{$aluno->address->endereco}}" @endif
                           id="endereco" name="endereco">
                </div>
                <div class="mb-3 col-md-3">
                    <label class="form-label" for="complemento">COMPLEMENTO<span
                            class="text-danger">*</span></label>
                    <input required type="text" class="form-control" id="complemento"
                           @if(!empty($aluno->address->complemento)) value="{{$aluno->address->complemento}}" @endif
                           name="complemento">
                </div>
                <div class="mb-3 col-md-2">
                    <label class="form-label" for="bairro">BAIRRO<span
                            class="text-danger">*</span></label>
                    <input required type="text" class="form-control" id="bairro" name="bairro"
                           @if(!empty($aluno->address->bairro)) value="{{$aluno->address->bairro}}" @endif
                           placeholder="">
                </div>
                <div class="mb-3 col-md-1">
                    <label class="form-label" for="uf">ESTADO <span class="text-danger">*</span></label>
                    <input required type="text" class="form-control" id="uf" name="uf"
                           @if(!empty($aluno->address->uf)) value="{{$aluno->address->uf}}" @endif
                    >
                </div>
            </div>
        </div>
    </div>
</div>
<div class="card">
    <div class="card-body">
        <div class="d-flex flex-column">
            <h3>Dados Curso</h3>
            <div class="row">
                <div class="mb-3 col-md-4">
                    <label class="form-label" for="name">Curso<span class="text-danger">*</span></label>
                    <select required name="curso" id="curso" class="form-control mb-3">
                        <option selected="">Selecione</option>
                        @foreach($cursos as $curso)
                            <option value="{{$curso->id}}">{{$curso->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3 col-md-3">
                    <label class="form-label" for="name">Horario<span
                            class="text-danger">*</span></label>
                    <select required name="horario" class="form-control mb-3">
                        <option selected="">Selecione</option>
                        <option value="Matutino">Matutino</option>
                        <option value="Vespertino">Vespertino</option>
                        <option value="Noturno">Noturno</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="card">
    <div class="card-body">
        <div class="d-flex flex-column">
            <div class="mb-3 col-md-12">
                <label for=""><strong>Possui algum tipo de deficiência ou outra condição
                        específica?</strong></label>
                <input type="checkbox" name="deficiencia_type" @if( isset($aluno->Metadata[0]['value']) && $aluno->Metadata[0]['value'] == 1) checked
                       @endif  class="mx-1">
            </div>
        </div>
    </div>
</div>


<div class="card">
    <div class="card-body">
        <div class="d-flex flex-column">
            <h3>Privacidade</h3>
            <div class="d-flex flex-column">
                <div class="mb-3 col-md-12">
                    <label for=""><strong>Quero receber notificações sobre minha vida financeira e
                            acadêmica por email</strong></label>
                    <input type="checkbox" name="receber_email" @if(isset($aluno->Metadata[1]['value']) && $aluno->Metadata[1]['value'] == 1) checked
                           @endif class="mx-1">
                </div>
                <div class="mb-3 col-md-12">
                    <label for=""><strong>Quero receber notificações sobre minha vida financeira e
                            acadêmica por celular</strong></label>
                    <input type="checkbox" name="receber_celular" @if(isset($aluno->Metadata[2]['value']) && $aluno->Metadata[2]['value'] == 1) checked
                           @endif  class="mx-1">
                </div>
                <div class="mb-3 col-md-12">
                    <label for=""><strong>Aceito fazer parte de pesquisas sobre a minha experiência com
                            o Portal do Aluno</strong></label>
                    <input type="checkbox" name="experiencia_portal" @if( isset($aluno->Metadata[3]['value']) && $aluno->Metadata[3]['value'] == 1) checked
                           @endif  class="mx-1">
                </div>
            </div>
        </div>
    </div>
</div>
