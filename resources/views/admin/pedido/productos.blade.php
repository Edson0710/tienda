<div class="table-responsive">
    <table id="table2" class="table table-striped table-bordered">
        <thead>
          <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Menudeo</th>
            <th scope="col">Mayoreo</th>
            <th scope="col">Cantidad</th>
            <th scope="col">Añadir</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($productos as $producto)
          <tr>
            <td >
                <span class="id d-none">{{$producto->id}}</span>
                <span class="nombre">{{$producto->nombre}}</span>
            </td>
            <td>$<span class="menudeo">{{$producto->menudeo}}</span></td>
            <td>$<span class="mayoreo">{{$producto->mayoreo}}</span> <br>(mínimo <span class="cantidad_mayoreo">{{$producto->cantidad_mayoreo}}</span>)</td>
            <td>
                <input type="number" class="form-control cantidad" name="cantidad" min="1" value="1">
            </td>
            <td class="text-center">
                <a class="btn btn-primary agregar">
                    <i class="fas fa-plus"></i>
                </a>
            </td>
          </tr>
        @endforeach
        </tbody>
      </table>
</div>

<script src="{{asset('js/datatable.js')}}"></script>
<script>
    $('document').ready(function () {
        var productos = [];
        if (productos_carrito.length > 0) {
            productos = productos_carrito;
        }
        $('.agregar').click(function () {
            var cantidad = $(this).parent().parent().find('.cantidad').val();
            var id = $(this).parent().parent().find('.id').text();
            var nombre = $(this).parent().parent().find('.nombre').text();
            var menudeo = $(this).parent().parent().find('.menudeo').text();
            var mayoreo = $(this).parent().parent().find('.mayoreo').text();
            var cantidad_mayoreo = parseInt($(this).parent().parent().find('.cantidad_mayoreo').text());
            var mayoreo_bool = false;
            if (cantidad >= cantidad_mayoreo){
                var precio = mayoreo * cantidad;
                mayoreo_bool = true;
            } else {
                var precio = menudeo * cantidad;
            }
            var producto = {
                id: id,
                cantidad: cantidad,
                nombre: nombre,
                menudeo: menudeo,
                mayoreo: mayoreo,
                cantidad_mayoreo: cantidad_mayoreo,
                precio: precio,
                mayoreo_bool: mayoreo_bool
            };
            var existe = false;
            for (var i = 0; i < productos.length; i++) {
                if (productos[i].id == id) {
                    productos[i].cantidad = parseInt(productos[i].cantidad) + parseInt(cantidad);
                    if(productos[i].cantidad >= productos[i].cantidad_mayoreo){
                        productos[i].precio = productos[i].mayoreo * productos[i].cantidad;
                        productos[i].mayoreo_bool = true;
                    } else {
                        productos[i].precio = productos[i].menudeo * productos[i].cantidad;
                        productos[i].mayoreo_bool = false;
                    }
                    existe = true;
                }
            }
            if (!existe) {
                productos.push(producto);
            }
            var table = $('#carrito');
            table.find('tbody').empty();
            for (var i = 0; i < productos.length; i++) {
                var html = `<tr><td><span class="id d-none">${productos[i].id}</span><input type="hidden" name="productos[${productos[i].id}]" value="${productos[i].cantidad}">${productos[i].nombre}</td><td class="cantidad">${productos[i].cantidad}</td>`;
                html += `<td><input type="hidden" name="precios[${productos[i].id}]" value="${productos[i].precio}">` + productos[i].precio + '</td>';
                html += '<td><a class="btn btn-danger remove"><i class="fas fa-trash"></i></a></td></tr>';
                var row = table.find('tbody').append(html);
            }
            var total = $('#total');
            total.empty();
            var total_value = 0.00;
            for (var i = 0; i < productos.length; i++) {
                total_value += parseFloat(productos[i].precio);
            }
            var html2 = `<h5><input type="hidden" name="precio_total" value="${total_value}"><b>Total:</b> $<span id="total_value">${total_value}</span></h5>`;
            total.append(html2);
            remove();
        });
        function remove(){
            $('.remove').click(function () {
                var id = $(this).parent().parent().find('.id').text();
                var cantidad = $(this).parent().parent().find('.cantidad').text();
                $(this).parent().parent().remove();
                // Eliminar producto de productos
                for (var i = 0; i < productos.length; i++) {
                    if (productos[i].id == id && productos[i].cantidad == cantidad) {
                        productos.splice(i, 1);
                    }
                }
                var total = $('#total');
                total.empty();
                var total_value = 0.00;
                for (var i = 0; i < productos.length; i++) {
                    total_value += parseFloat(productos[i].precio);
                }
                var html2 = `<h5>Total: $<span id="total_value">${total_value}</span></h5>`;
                total.append(html2);
            });
        }
    });
</script>

