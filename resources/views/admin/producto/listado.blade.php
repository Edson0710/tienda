@include('layouts.alerts')
<div class="table-responsive">
    <table id="table" class="table table-striped table-bordered">
        <thead>
          <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Descripción</th>
            <th scope="col">Categorías</th>
            <th scope="col">Imágenes</th>
            <th scope="col">Editar</th>
            <th scope="col">Eliminar</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($productos as $producto)
          <tr>
            <td>{{$producto->nombre}}</td>
            <td>{{$producto->descripcion}}</td>
            <td class="text-center">
                @foreach ($producto->categorias as $categoria)
                    <span class="badge badge-primary">{{$categoria->nombre}}</span><br>
                @endforeach
            </td>
            <td class="text-center">
                <div id="carousel-{{$producto->id}}" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        @foreach ($producto->imagenes as $imagen)
                            <div class="carousel-item {{$loop->first ? 'active' : ''}}">
                                <img class="ver-imagen" src="{{asset('images/productos/'.$imagen->producto_id.'/'.$imagen->url)}}" alt="{{$imagen->nombre}}" width="100px" height="100px">
                            </div>
                        @endforeach
                    </div>
                    <a class="carousel-control-prev" href="#carousel-{{$producto->id}}" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carousel-{{$producto->id}}" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
            </td>
            <td class="text-center">
                <a href="{{route('productos.edit', $producto)}}" data-to="modal" class="btn btn-warning edit">
                    <i class="fas fa-edit"></i>
                </a>
            </td>
            <td class="text-center">
                <form action="{{route('productos.destroy', $producto->id)}}" data-method="POST" class="form-destroy" data-to="#listado">
                    @csrf
                    @method('DELETE')
                    <button type="button" class="btn btn-danger eliminar">
                        <i class="fas fa-trash-alt"></i>
                    </button>
                </form>
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

