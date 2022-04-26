@include('layouts.alerts')
<div class="table-responsive">
    <table id="table" class="table table-striped table-bordered">
        <thead>
          <tr>
            <th scope="col">Código</th>
            <th scope="col">Contenido</th>
            <th scope="col">Datos de envío</th>
            <th scope="col">Estado de envío</th>
            <th scope="col">Fecha de compra</th>
            <th scope="col">Fecha de envío</th>
            <th scope="col">Editar</th>
            <th scope="col">Cancelar</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($pedidos as $pedido)
          <tr>
            <td>{{$pedido->codigo}}</td>
            <td>x</td>
            <td>
                <i class="fas fa-user"></i>&nbsp;&nbsp;{{$pedido->nombre}}<br>
                <i class="fas fa-map-marker-alt"></i>&nbsp;&nbsp;{{$pedido->direccion}}<br>
                <i class="fas fa-phone"></i>&nbsp;&nbsp;{{$pedido->telefono}}<br>
                <i class="fas fa-envelope"></i>&nbsp;&nbsp;{{$pedido->email}}
            </td>
            <td class="text-center">
                @if ($pedido->estado->nombre == 'Pendiente')
                    <span class="badge badge-warning">{{$pedido->estado->nombre}}</span>
                @elseif ($pedido->estado->nombre == 'Enviado')
                    <span class="badge badge-info">{{$pedido->estado->nombre}}</span>
                @elseif ($pedido->estado->nombre == 'Entregado')
                    <span class="badge badge-success">{{$pedido->estado->nombre}}</span>
                @elseif ($pedido->estado->nombre == 'Cancelado')
                    <span class="badge badge-danger">{{$pedido->estado->nombre}}</span>
                @endif
            </td>
            <td>x</td>
            <td>x</td>
            <td>x</td>
            <td>x</td>
            {{-- <td class="text-center">
                <form action="{{route('productos.destroy', $producto->id)}}" data-method="POST" class="form-destroy" data-to="#listado">
                    @csrf
                    @method('DELETE')
                    <button type="button" class="btn btn-danger eliminar">
                        <i class="fas fa-trash-alt"></i>
                    </button>
                </form>
            </td> --}}
          </tr>
        @endforeach
        </tbody>
      </table>
</div>

<div id="modal"></div>

{{-- <div id="modal-imagen" class="modal">
    <span class="close">&times;</span>
    <img class="modal-content" id="img01">
    <div id="caption"></div>
</div> --}}

@push('js')
<script src="{{asset('js/datatable.js')}}"></script>
<script src="{{asset('js/edit.js')}}"></script>
<script src="{{asset('js/delete.js')}}"></script>
<script src="{{asset('js/ver-imagen.js')}}"></script>
@endpush
<script src="{{asset('js/datatable.js')}}"></script>
<script src="{{asset('js/edit.js')}}"></script>
<script src="{{asset('js/delete.js')}}"></script>
<script src="{{asset('js/ver-imagen.js')}}"></script>

