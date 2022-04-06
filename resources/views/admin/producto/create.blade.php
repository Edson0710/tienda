<div id="modal-create" class="modal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Crear Producto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Llena los siguientes campos:</p>
                <form id="form-producto">
                    @csrf
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre del producto" required>
                    </div>
                    <div class="form-group">
                        <label for="descripcion">Descripción</label>
                        <textarea name="descripcion" id="descripcion" class="form-control" placeholder="Descripción del producto" required></textarea>
                    </div>

            </div>
            <div class="modal-footer">
                <button  id="modalclick" data-action="{{route('productos.store')}}" data-form="#form-producto" data-method="POST"
                data-container="#listado" type="button" class="btn btn-primary store" data-modal="#modal-crate">Guardar</button>
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
        $("#modalclick").click(function () {
            $("#modal-create").modal("hide");
        });
    });
</script>


