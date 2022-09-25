<div class="card">
    <div class="card-body">
        <div class="d-flex flex-column">
            <h3>Modulos</h3>
            <h4>@if(isset($curso->name))
                    {{$curso->name}}
                @endif</h4>

            <div class="row my-2">
                <div class="mb-3 col-md-12">
                    <label class="form-label" for="name">NOME<span class="text-danger">*</span></label>
                    <input required type="text" class="form-control" name="name"
                           value=""
                           id="name">
                </div>
            </div>
        </div>

    </div>
</div>
