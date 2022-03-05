<script>
    $(document).ready(function () {
        console.log('ready');
        $('#modal-editar').modal('toggle');
    });
</script>
<div class="modal fade" id="modal-editar">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Editar Categoría</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="card card-primary">
                    <form action="{{route('admin.categoria.update', $categoria->id)}}" class="js-remote-form" data-to="listado"
                        method="POST">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="form-group">
                                <label for="nombre">Nombre</label>
                                <input type="text" name="nombre" class="form-control" placeholder="nombre"
                                    value="{{$categoria->nombre}}">
                            </div>
                        </div>
                        <div class="card-footer text-right">
                            <button id="modalclick" type="submit" class="btn btn-success">Guardar</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>