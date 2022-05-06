<script>
    var productos_carrito = [];
</script>   
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
                <form id="form-pedido" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="nombre">Seleccionar productos</label>
                        @include('admin.pedido.productos')
                    </div>
                    <div class="form-group table-responsive">
                        <label for="descripcion">Carrito</label>
                        <table id="carrito" class="table">
                            <thead>
                              <tr>
                                <th scope="col">Producto</th>
                                <th scope="col">Cantidad</th>
                                <th scope="col">Precio Total</th>
                                <th scope="col">Acciones</th>
                              </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                        <div id="total"></div>
                    </div>
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre" required>
                    </div>
                    <div class="form-group">
                        <label for="nombre">Dirección</label>
                        <input type="text" class="form-control" name="direccion" id="direccion" placeholder="Dirección" required>
                    </div>
                    <div class="form-group">
                        <label for="nombre">Teléfono</label>
                        <input type="number" class="form-control" name="telefono" id="telefono" placeholder="Teléfono" required>
                    </div>
                    <div class="form-group">
                        <label for="nombre">Email</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button id="modalclick" data-action="{{route('pedidos.store')}}" data-form="#form-pedido"
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
        $('#modal-create').modal('toggle');
        $("#modalclick").click(function () {
            $("#modal-create").modal("hide");
        });
    });

</script>
