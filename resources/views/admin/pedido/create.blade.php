
<div id="modal-create" class="modal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Crear Pedido</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Llena los siguientes campos:</p>
                <form id="form-producto" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="nombre">Seleccionar productos</label>
                        @include('admin.pedido.productos')
                    </div>
                    <div class="form-group">
                        <label for="descripcion">Carrito</label>
                        <div id="carrito">
                            {{-- @include('admin.pedido.carrito') --}}
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button id="modalclick" data-action="{{route('productos.store')}}" data-form="#form-producto"
                    data-method="POST" data-container="#listado" type="button" class="btn btn-primary store"
                    data-modal="#modal-crate">Continuar</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>


<script src="{{asset('js/store.js')}}"></script>
<script>
    $('document').ready(function () {
        $('select').selectpicker();
        $('#modal-create').modal('toggle');
        $("#modalclick").click(function () {
            $("#modal-create").modal("hide");
        });
    });
</script>
