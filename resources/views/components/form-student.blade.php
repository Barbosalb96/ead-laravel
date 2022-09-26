<div class="card">
    <div class="card-body">
        <div class="d-flex flex-column">
            <h3>Dados pessoais</h3>
            <div class="row">
                <div class="mb-3 col-md-6">
                    <label class="form-label" for="nome">NOME COMPLETO<span class="text-danger">*</span></label>
                    <input required type="text" class="form-control" name="name"
                           @if(!empty($students->nome)) value="{{$students->nome}}" @endif id="name">
                </div>
                <div class="mb-3 col-md-6">
                    <label class="form-label" for="cpf">CPF<span class="text-danger">*</span></label>
                    <input required type="text" name="cpf"
                           @if(!empty($students->cpf)) value="{{$students->cpf}}" @endif
                           class="form-control" id="cpf"
                           placeholder="000.000.000-00">
                </div>
            </div>
            <div class="row">
                <div class="mb-3 col-md-2">
                    <label class="form-label" for="telefone">TELEFONE CELULAR<span
                            class="text-danger">*</span></label>
                    <input required type="tel" class="form-control"
                           @if(!empty($students->telefone)) value="{{$students->telefone}}" @endif
                           name="telefone" id="telefone"
                           placeholder="(98) 9 9999-9999">
                </div>
                <div class="mb-3 col-md-2">
                    <label class="form-label" for="telefone-outro">OUTRO TELEFONE</label>
                    <input type="tel" class="form-control" name="telefone-outro"
                           @if(!empty($students->telefone_cel)) value="{{$students->telefone_cel}}" @endif
                           id="telefone-outro"
                           placeholder="(98) 9 9999-9999">
                </div>
                <div class="mb-3 col-md-4">
                    <label class="form-label" for="email">EMAIL<span
                            class="text-danger">*</span></label>
                    <input required type="email" class="form-control" id="email" name="email"
                           @if(!empty($students->email)) value="{{$students->email}}" @endif
                           placeholder="email@email.com">
                </div>
                <div class="mb-3 col-md-4">
                    <label class="form-label" for="apelido">APELIDO</label>
                    @if(!empty($students->apelido))
                        value="{{$students->apelido}}"
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
                    <label class="form-label" for="zip">CEP<span class="text-danger">*</span></label>
                    <input required type="text" class="form-control"
                           @if(!empty($students->address->zip)) value="{{$students->address->zip}}" @endif
                           name="zip" id="cep"
                           placeholder="00000-000">
                </div>

                <div class="mb-3 col-md-4">
                    <label class="form-label" for="address">ENDEREÇO<span class="text-danger">*</span></label>
                    <input required type="text" class="form-control"
                           @if(!empty($students->address->address)) value="{{$students->address->address}}" @endif
                           id="address" name="address">
                </div>
                <div class="mb-3 col-md-3">
                    <label class="form-label" for="complement">COMPLEMENTO<span
                            class="text-danger">*</span></label>
                    <input required type="text" class="form-control" id="complement"
                           @if(!empty($students->address->complement)) value="{{$students->address->complement}}" @endif
                           name="complement">
                </div>
                <div class="mb-3 col-md-2">
                    <label class="form-label" for="neighborhood">BAIRRO<span
                            class="text-danger">*</span></label>
                    <input required type="text" class="form-control" id="neighborhood" name="neighborhood"
                           @if(!empty($students->address->neighborhood)) value="{{$students->address->neighborhood}}" @endif
                           placeholder="">
                </div>
                <div class="mb-3 col-md-1">
                    <label class="form-label" for="uf">ESTADO <span class="text-danger">*</span></label>
                    <input required type="text" class="form-control" id="uf" name="uf"
                           @if(!empty($students->address->uf)) value="{{$students->address->uf}}" @endif
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
                    <select required name="course" id="course" class="form-control mb-3">
                        <option selected="">Selecione</option>
                        @foreach($courses as $course)
                            <option value="{{$course->id}}"
                                    @if(!empty($students->course) && $students->course[0]->id == $course->id ) selected @endif
                            >{{$course->name}}</option>
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
                <input type="checkbox" name="deficiencia_type" @if( isset($students->Metadata[0]['value']) && $students->Metadata[0]['value'] == 1) checked
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
                    <input type="checkbox" name="receber_email" @if(isset($students->Metadata[1]['value']) && $students->Metadata[1]['value'] == 1) checked
                           @endif class="mx-1">
                </div>
                <div class="mb-3 col-md-12">
                    <label for=""><strong>Quero receber notificações sobre minha vida financeira e
                            acadêmica por celular</strong></label>
                    <input type="checkbox" name="receber_celular" @if(isset($students->Metadata[2]['value']) && $students->Metadata[2]['value'] == 1) checked
                           @endif  class="mx-1">
                </div>
                <div class="mb-3 col-md-12">
                    <label for=""><strong>Aceito fazer parte de pesquisas sobre a minha experiência com
                            o Portal do Aluno</strong></label>
                    <input type="checkbox" name="experiencia_portal" @if( isset($students->Metadata[3]['value']) && $students->Metadata[3]['value'] == 1) checked
                           @endif  class="mx-1">
                </div>
            </div>
        </div>
    </div>
</div>
