<script src="{{ asset('js/main.js') }}"></script>
<script>
    $(document).ready(function () {
        console.log('ready');
        $('#modal-add').modal('toggle');
    });
    $("#modalclick").click(function () {
            $("#modal-add").modal("hide");
    });
</script>
<div class="modal fade" id="modal-add">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Crear Categoria</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                    <form action="{{route('admin.categoria.store')}}" class="js-remote-form" data-to="listado" method="POST">
                        @csrf

                        <div class="card-body">

                            <div class="form-group">
                                <label for="nombre">Nombre</label>
                                <input type="text" name="nombre" value="{{ old('nombre') }}" class="form-control"
                                    placeholder="" required>
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
