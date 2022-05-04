@include('layouts.alerts')
<div class="table-responsive">
    <table id="table" class="table table-striped table-bordered">
        <thead>
          <tr>
            <th scope="col">Código</th>
            <th scope="col">Contenido</th>
            <th scope="col">Total</th>
            <th scope="col">Datos de envío</th>
            <th scope="col">Estado de envío</th>
            <th scope="col"><i class="fas fa-calendar-alt"></i>&nbsp;&nbsp;Compra</th>
            <th scope="col"><i class="fas fa-calendar-alt"></i>&nbsp;&nbsp;Envío</th>
            <th scope="col"><i class="fas fa-calendar-alt"></i>&nbsp;&nbsp;Entrega</th>
            <th scope="col">Editar</th>
            <th scope="col">Cancelar</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($pedidos as $pedido)
          <tr>
            <td>{{$pedido->codigo}}</td>
            {{-- Enlistar contenido --}}
            <td>
                @foreach ($pedido->productos as $producto)
                    <b style="color: #007bff">{{$producto->nombre}}</b><br>
                    <small><b>Cant: </b>{{$producto->pivot->cantidad}}</small><br>
                @endforeach
            </td>
            <td>${{$pedido->precio_total}}</td>
            <td>
                <small><i class="fas fa-user"></i>&nbsp;&nbsp;{{$pedido->nombre}}</small><br>
                <small><i class="fas fa-map-marker-alt"></i>&nbsp;&nbsp;{{$pedido->direccion}}</small><br>
                <small><i class="fas fa-phone"></i>&nbsp;&nbsp;{{$pedido->telefono}}</small><br>
                    <small><i class="fas fa-envelope"></i>&nbsp;&nbsp;{{$pedido->email}}</small>
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
            <td class="text-center">{{$pedido->fecha_compra}}</td>
            <td class="text-center">
                @if ($pedido->fecha_emvio!= null)
                    {{$pedido->fecha_envio}}
                @else
                    <span class="badge badge-danger">Sin fecha</span>
                @endif
            </td>
            <td class="text-center">
                @if ($pedido->fecha_entrega!= null)
                    {{$pedido->fecha_entrega}}
                @else
                    <span class="badge badge-danger">Sin fecha</span>
                @endif
            <td class="text-center">
                <a href="{{route('pedidos.edit', $pedido->id)}}" data-to="modal" class="btn btn-warning edit">
                    <i class="fas fa-edit"></i>
                </a>
            </td>
            <td class="text-center">
                <a href="" data-to="modal" class="btn btn-danger cancel">
                    <i class="fas fa-ban"></i>
                </a>
            </td>
          </tr>
        @endforeach
        </tbody>
      </table>
</div>

<div id="modal"></div>


@push('js')
<script src="{{asset('js/datatable.js')}}"></script>
<script src="{{asset('js/edit.js')}}"></script>
<script src="{{asset('js/delete.js')}}"></script>
@endpush
<script src="{{asset('js/datatable.js')}}"></script>
<script src="{{asset('js/edit.js')}}"></script>
<script src="{{asset('js/delete.js')}}"></script>


