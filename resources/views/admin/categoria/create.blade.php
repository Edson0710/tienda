<div id="modal-create" class="modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Crear Categoría</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Llena los siguientes campos:</p>
                <form id="form-categoria">
                    @csrf
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre de la categoría" required>
                    </div>

            </div>
            <div class="modal-footer">
                <button data-action="{{route('categorias.store')}}" data-form="#form-categoria" data-method="POST"
                data-container="#listado" type="button" class="btn btn-primary store">Guardar</button>
            </form>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<script src="{{asset('js/store.js')}}"></script>
<script>
    $('document').ready(function(){
        $('#modal-create').modal('toggle');
        // $("#modalclick").click(function () {
        //     $("#modal-add").modal("hide");
        // });
    });
</script>


