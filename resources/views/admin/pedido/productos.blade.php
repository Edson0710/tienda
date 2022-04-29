@include('layouts.alerts')
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
                <input type="number" id="cantidad" class="form-control" name="cantidad" min="1" value="1">
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

<div id="modal"></div>

<div id="modal-imagen" class="modal">
    <span class="close">&times;</span>
    <img class="modal-content" id="img01">
    <div id="caption"></div>
</div>

<script src="{{asset('js/datatable.js')}}"></script>
<script>
    $('document').ready(function () {
        var productos = [];
        $('.agregar').click(function () {
            var cantidad = $(this).parent().parent().find('#cantidad').val();
            var id = $(this).parent().parent().find('.id').text();
            var nombre = $(this).parent().parent().find('.nombre').text();
            var menudeo = $(this).parent().parent().find('.menudeo').text();
            var mayoreo = $(this).parent().parent().find('.mayoreo').text();
            var cantidad_mayoreo = $(this).parent().parent().find('.cantidad_mayoreo').text();
            var producto = {
                id: id,
                cantidad: cantidad,
                nombre: nombre,
                menudeo: menudeo,
                mayoreo: mayoreo,
                cantidad_mayoreo: cantidad_mayoreo
            };
            var table = $('#carrito');
            var html = `<tr><td><input type="hidden" name="productos[${id}]" value="${cantidad}">${nombre}}</td><td>${cantidad}</td>`;
            if (cantidad >= cantidad_mayoreo) {
                html += '<td>$' + (cantidad * mayoreo) + '</td>';
            } else {
                html += '<td>$' + (cantidad * menudeo) + '</td>';
            }
            html += '<td><a class="btn btn-danger remove"><i class="fas fa-trash"></i></a></td></tr>';
            var row = table.find('tbody').append(html);
            remove();

            productos.push(producto);
            productos = JSON.stringify(productos);
            console.log(productos);
        });
        function remove(){
            $('.remove').click(function () {
                $(this).parent().parent().remove();
            });
        }
    });
</script>

