<script src="{{ asset('js/js-remote-form.js') }}"></script>
<script src="{{asset('js/js-remote-add.js')}}"></script>

<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-12">
                <a href="{{route('admin.categoria.listado')}}" class="btn btn-secondary float-left js-remote-add"
                    data-to="contenedor">
                    <i class="fas fa-arrow-left"></i>
                    Volver
                </a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-12">
                <form action="{{route('admin.categoria.store')}}" class="js-remote-form" data-to="listado"
                    method="POST">
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
