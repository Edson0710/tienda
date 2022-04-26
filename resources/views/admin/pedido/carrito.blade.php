@include('layouts.alerts')
<div class="table-responsive">
    <table id="table2" class="table table-striped table-bordered">
        <thead>
          <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Descripción</th>
            <th scope="col">Cantidad</th>
            <th scope="col">Añadir</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($productos as $producto)
          <tr>
            <td>{{$producto->nombre}}</td>
            <td>{{$producto->descripcion}}</td>
            <td>
                <input type="number" id="cantidad" class="form-control" name="cantidad" min="1" value="1">
            </td>
            <td class="text-center">
                <a href="{{route('pedidos.create', $producto->id)}}" data-to="modal" class="btn btn-primary">
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

