<div id="modal-edit" class="modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Editar Categoría</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Llena los siguientes campos:</p>
                <form id="form-categoria">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre de la categoría" value="{{$categoria->nombre}}" required>
                    </div>

            </div>
            <div class="modal-footer">
                <button  id="modalclick" data-action="{{route('categorias.store')}}" data-form="#form-categoria" data-method="POST"
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
        $('#modal-edit').modal('toggle');
        $("#modalclick").click(function () {
            $("#modal-edit").modal("hide");
        });
    });
</script>


