<div id="modal-edit" class="modal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Enviar correo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="form-envio" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="status">Seleccionar status</label>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button id="modalclick" data-action="" data-form="#form-envio"
                    data-method="POST" data-container="#listado" type="button" class="btn btn-primary store">Guardar</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<script src="{{asset('js/store.js')}}"></script>
<script>
    $('document').ready(function () {
        $('select').selectpicker();
        $('#modal-edit').modal('toggle');
        $("#modalclick").click(function () {
            $("#modal-edit").modal("hide");
        });
    });
</script>
