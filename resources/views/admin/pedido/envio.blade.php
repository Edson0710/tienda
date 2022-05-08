<div id="modal-edit" class="modal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Actualizar status</h5>
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
                        <select class="form-control" name="status" id="status" required>
                            <option value="">Seleccione un status</option>
                            <option value="2" {{$pedido->estado_id == 2 ? 'selected' : ''}}>Enviado</option>
                            <option value="3" {{$pedido->estado_id == 3 ? 'selected' : ''}}>Entregado</option>
                            <option value="1" {{$pedido->estado_id == 1 ? 'selected' : ''}}>Pendiente</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="clave">Clave</label>
                        <input type="text" class="form-control" name="clave" id="clave" value="{{$pedido->clave}}" placeholder="clave" {{$pedido->estado_id != 2 ? 'disabled' : ''}} required>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button id="modalclick" data-action="{{route('pedido.envioUpdate', $pedido->id)}}" data-form="#form-envio"
                    data-method="POST" data-container="#listado" type="button" class="btn btn-primary store">Guardar</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<script>
    $('#status').on('change', function () {
        status = $('#status').val();
        console.log(status);
        if (status == 2) {
            $('#clave').removeAttr('disabled');
        } else {
            $('#clave').attr('disabled', true);
        }
    });
</script>

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
