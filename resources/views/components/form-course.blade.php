<div class="card">
    <div class="card-body">
        <div class="d-flex flex-column">
            <h3>Dados Curso</h3>

            <div class="row">
                <div class="mb-3 col-md-6">
                    <label class="form-label" for="name">NOME<span class="text-danger">*</span></label>
                    <input required type="text" class="form-control" name="name"
                           value="@if(isset($course->name)) {{$course->name}} @endif"
                           id="name">
                </div>
                <div class="mb-3 col-md-6">
                    <label class="form-label" for="type_course">TIPO CURSO<span
                            class="text-danger">*</span></label>
                    <select name="type_course" class="form-control" id="">
                        <option value="">Selecione o tipo do curso</option>
                        @foreach($typeCourses as $typeCourse)
                            <option value="{{$typeCourse->id}}"
                                    @if(isset($course->type_course) &&  $course->type_course == $typeCourse->id) selected @endif>{{$typeCourse->name}}</option>
                        @endforeach
                    </select>

                </div>

            </div>
            <div class="row">
                <div class="mb-3 col-md-3">
                    <label class="form-label" for="modality">Modalidade<span
                            class="text-danger">*</span></label>

                    <select name="modality" class="form-control" id="">
                        <option value="">Selecione a modalidade</option>
                        <option value="1" @if(isset($course->modality) &&  $course->modality == 1) selected @endif>
                            Presencial
                        </option>
                        <option value="2" @if(isset($course->modality) &&  $course->modality == 2) selected @endif>
                            Distancia
                        </option>
                        <option value='3' @if(isset($course->modality) &&  $course->modality == 3) selected @endif>
                            Semi-Presencial
                        </option>

                    </select>

                </div>
                <div class="mb-3 col-md-3">
                    <label class="form-label" for="shift">Turno</label>
                    <select name="shift" class="form-control" id="shift">
                        <option value="">Selecione o horario</option>
                        <option value="1" @if(isset($course->shift) &&  $course->shift == 1) selected @endif>Matutino
                        </option>
                        <option value="2" @if(isset($course->shift) &&  $course->shift == 2) selected @endif>Vespertino
                        </option>
                        <option value="3" @if(isset($course->shift) &&  $course->shift == 3) selected @endif>Noturno
                        </option>

                    </select>
                </div>
                <div class="mb-3 col-md-3">
                    <label class="form-label" for="price">Valor</label>
                    <input type="text" class="form-control" name="price" id="price"
                           value="@if(isset($course->price)) {{$course->price}} @endif" placeholder="">
                </div>
                <div class="mb-3 col-md-3">
                    <label class="form-label" for="amount_period">Quantidade de periodos</label>
                    <input type="text" class="form-control" name="amount_period"
                           value="@if(isset($course->amount_period)) {{$course->amount_period}} @endif" id="amount_period"
                           placeholder="">
                </div>
            </div>
            <div class="mb-3 col-md-3">
                <label class="form-label" for="description">Descrição</label>
                <textarea name="description" id="" class="form-control" style="width: 78.2vw" rows="10">@if(isset($course->description)){{$course->description}}@endif</textarea>
            </div>
        </div>

    </div>
</div>
