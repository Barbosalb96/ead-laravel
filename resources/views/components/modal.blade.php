<div class="modal fade" id="centeredModalPrimary" tabindex="-1" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="d-flex flex-column">
                    <h5 class="modal-title">Criação dos modulos</h5>
                    <p>Informe a quantidade de modulos</p>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body m-3">
                <form action="" method="post">
                    <input type="text" value="{{$id}}" name="curso_id">
                    <input type="text" class="form-control" name="amount">
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
