<div id="modal-edit" class="modal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Editar Producto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Llena los siguientes campos:</p>
                <form id="form-producto" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre del producto" value="{{$producto->nombre}}" required>
                    </div>
                    <div class="form-group">
                        <label for="descripcion">Descripción</label>
                        <textarea name="descripcion" id="descripcion" class="form-control"
                            placeholder="Descripción del producto" required>{{$producto->descripcion}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="categorias">Categorías</label><br>
                        <select name="categorias[]" id="categorias" select class="selectpicker" multiple data-live-search="true">
                            <option disabled>Selecciona las categorías</option>
                            @foreach($categorias as $categoria)
                            <option value="{{$categoria->id}}" {{$producto->categorias->contains($categoria) ? 'selected' : ''}}>{{$categoria->nombre}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="delete-imagenes">Eliminar imágenes</label>
                        <div class="row">
                            @foreach($producto->imagenes as $imagen)
                            <div class="col-md-2">
                                <div class="card">
                                    <img src="{{asset('images/productos/'.$imagen->url)}}" class="card-img-top" alt="..." width="100px" height="100px">
                                    <div class="card-body">
                                        <div class="form-check">
                                            <input type="checkbox" name="delete-imagenes[]" value="{{$imagen->id}}" class="form-check-input">
                                            <label class="form-check-label">Eliminar</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>

            </div>
            <div class="modal-footer">
                <button  id="modalclick" data-action="{{route('productos.update', $producto->id)}}" data-form="#form-producto" data-method="POST"
                data-container="#listado" type="button" class="btn btn-primary store">Guardar</button>
            </form>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<script src="{{asset('js/store.js')}}"></script>
<script>
    $('document').ready(function(){
        $('select').selectpicker();
        $('#modal-edit').modal('toggle');
        $("#modalclick").click(function () {
            $("#modal-edit").modal("hide");
        });
    });
</script>


