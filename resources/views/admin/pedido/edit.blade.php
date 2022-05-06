<script>
    var productos_carrito = [];

    function remove2(){
            $('.remove').click(function () {
                var id = $(this).parent().parent().find('.id').text();
                var cantidad = $(this).parent().parent().find('.cantidad').text();
                $(this).parent().parent().remove();
                // Eliminar producto de productos
                for (var i = 0; i < productos_carrito.length; i++) {
                    if (productos_carrito[i].id == id && productos_carrito[i].cantidad == cantidad) {
                        productos_carrito.splice(i, 1);
                    }
                }
                var total = $('#total');
                total.empty();
                var total_value = 0.00;
                for (var i = 0; i < productos_carrito.length; i++) {
                    total_value += parseFloat(productos_carrito[i].precio);
                }
                var html2 = `<h5>Total: $<span id="total_value">${total_value}</span></h5>`;
                total.append(html2);
            });
        }
    function constuir_tabla() {
        var table = $('#carrito');
        table.find('tbody').empty();
        for (var i = 0; i < productos_carrito.length; i++) {
            var html = `<tr><td><span class="id d-none">${productos_carrito[i].id}</span><input type="hidden" name="productos[${productos_carrito[i].id}]" value="${productos_carrito[i].cantidad}">${productos_carrito[i].nombre}</td><td class="cantidad">${productos_carrito[i].cantidad}</td>`;
            html += '<td>$' + productos_carrito[i].precio + '</td>';
            html += '<td><a class="btn btn-danger remove"><i class="fas fa-trash"></i></a></td></tr>';
            var row = table.find('tbody').append(html);
        }
        var total = $('#total');
        total.empty();
        var total_value = 0.00;
        for (var i = 0; i < productos_carrito.length; i++) {
            total_value += parseFloat(productos_carrito[i].precio);
        }
        var html2 = `<h5><input type="hidden" name="precio_total" value="${total_value}"><b>Total:</b> $<span id="total_value">${total_value}</span></h5>`;
        total.append(html2);
        remove2();
    }
</script>
<div id="modal-edit" class="modal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Editar Pedido</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Llena los siguientes campos:</p>
                <form id="form-pedido" enctype="multipart/form-data">
                    @method('PUT')
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
                                @foreach ($pedido->productos as $producto)
                                <script>
                                    productos_carrito.push({
                                        id: {{$producto->id}},
                                        cantidad: {{$producto->pivot->cantidad}},
                                        nombre: '{{$producto->nombre}}',
                                        menudeo: {{$producto->menudeo}},
                                        mayoreo: {{$producto->mayoreo}},
                                        cantidad_mayoreo: {{$producto->cantidad_mayoreo}},
                                        precio: {{$producto->pivot->cantidad * $producto->menudeo}},
                                    });
                                </script>
                                @endforeach
                                <script>
                                    constuir_tabla();
                                </script>
                            </tbody>
                        </table>
                        <div id="total"></div>
                    </div>
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" name="nombre" id="nombre" value="{{$pedido->nombre}}" placeholder="Nombre" required>
                    </div>
                    <div class="form-group">
                        <label for="nombre">Dirección</label>
                        <input type="text" class="form-control" name="direccion" id="direccion" value="{{$pedido->direccion}}" placeholder="Dirección" required>
                    </div>
                    <div class="form-group">
                        <label for="nombre">Teléfono</label>
                        <input type="number" class="form-control" name="telefono" id="telefono" value="{{$pedido->telefono}}" placeholder="Teléfono" required>
                    </div>
                    <div class="form-group">
                        <label for="nombre">Email</label>
                        <input type="email" class="form-control" name="email" id="email" value="{{$pedido->email}}" placeholder="Email" required>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button id="modalclick" data-action="{{route('pedidos.update', $pedido->id)}}" data-form="#form-pedido"
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
