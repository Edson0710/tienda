@include('layouts.alerts')
<div class="table-responsive">
    <table id="table" class="table table-striped table-bordered">
        <thead>
          <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Editar</th>
            <th scope="col">Eliminar</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($productos as $producto)
          <tr>
            <td>{{$producto->nombre}}</td>
            <td class="text-center">
                {{-- <a href="{{route('categorias.edit', $categoria)}}" data-to="modal" class="btn btn-warning edit">
                    <i class="fas fa-edit"></i>
                </a> --}}
            </td>
            <td class="text-center">
                {{-- <form action="{{route('categorias.destroy', $categoria->id)}}" data-method="POST" class="form-destroy" data-to="#listado">
                    @csrf
                    @method('DELETE')
                    <button type="button" class="btn btn-danger eliminar">
                        <i class="fas fa-trash-alt"></i>
                    </button>
                </form> --}}
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

