@include('layouts.alerts')

<table id="example" class="table table-striped table-bordered " style="width:100%">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Editar</th>
            <th>Eliminar</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($categorias as $categoria)
        <tr>
            <td>{{$categoria->nombre}}</td>
            <td>
                <div class="text-center">
                    <a class="btn btn-warning btn-sm js-remote-a"
                    href="{{route('admin.categoria.edit', $categoria->id)}}" data-to="modal-edit">
                        <i class="fas fa-edit"></i>
                    </a>
                </div>
            </td>
            <td>
                <div class="text-center">
                    <form action="{{route('admin.categoria.destroy', $categoria->id)}}" method="get">
                        @csrf
                        <a href="" class="btn btn-danger btn-sm eliminar">
                            <i class="fas fa-trash"></i>
                        </a>
                    </form>
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<script src="{{asset('js/datatable.js')}}"></script>