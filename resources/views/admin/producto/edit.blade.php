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
                        <label class="control-label">Precio Menudeo:</label>
                        <input id="menudeo" class="form-control" name="menudeo" type="text" data-type="currency" value="${{$producto->menudeo}}" required>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Precio Mayoreo:</label>
                        <input id="mayoreo" class="form-control" name="mayoreo" type="text" data-type="currency" value="${{$producto->mayoreo}}" required>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Cantidad Mínima Mayoreo:</label>
                        <input id="cantidad_mayoreo" class="form-control" name="cantidad_mayoreo" type="number" value="{{$producto->cantidad_mayoreo}}" required>
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
                            <div class="col-xs-2">
                                <div class="card">
                                    <img src="{{asset('images/productos/'.$imagen->producto_id.'/'.$imagen->url)}}" class="card-img-top" alt="..." width="100px" height="100px">
                                    <div class="card-body">
                                        <div class="form-check">
                                            <input type="checkbox" name="delete_imagenes[]" value="{{$imagen->id}}" class="form-check-input">
                                            <label class="form-check-label">Eliminar</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="imagenes">Añadir imágenes</label>
                        <input type="file" name="imagenes[]" id="imagenes[]" class="form-control-file" multiple accept="image/*">
                        <div class="description">
                            <br>
                            <span>Puedes añadir más de una imagen al mismo tiempo.</span><br>
                            <span>Puedes añadir imágenes en formato <strong>.jpg</strong>, <strong>.jpeg</strong> o <strong>.png</strong>.</span><br>
                            <span>Puedes añadir imágenes de tamaño <strong>máximo de 2048MB</strong>.</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="activo">Activo</label>
                        <select name="activo" id="activo" class="form-control">
                            <option value="1" {{!$producto->trashed() ? 'selected' : ''}}>Sí</option>
                            <option value="0" {{$producto->trashed() ? 'selected' : ''}}>No</option>
                        </select>
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
<script src="{{asset('js/currencyFormat.js')}}"></script>
<script>
    $('document').ready(function(){
        $('select').selectpicker();
        $('#modal-edit').modal('toggle');
        $("#modalclick").click(function () {
            $("#modal-edit").modal("hide");
        });
    });
</script>


