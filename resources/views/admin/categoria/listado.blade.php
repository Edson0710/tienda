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
        @foreach ($categorias as $categoria)
          <tr>
            <td>{{$categoria->nombre}}</td>
            <td class="text-center">
                <a href="{{route('categorias.edit', $categoria)}}" class="btn btn-warning">
                    <i class="fas fa-edit"></i>
                </a>
            </td>
            <td class="text-center">
                <form action="{{route('categorias.destroy', $categoria->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">
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

@push('js')
<script src="{{asset('js/datatable.js')}}"></script>
@endpush
<script src="{{asset('js/datatable.js')}}"></script>
