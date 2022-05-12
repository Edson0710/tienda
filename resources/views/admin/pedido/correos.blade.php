<div id="modal-edit" class="modal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Enviar correo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @if(count($correos) > 0)
                <div class="table-responsive">
                    <label for="correo">Histórico</label>
                    <table id="table2" class="table">
                        <thead>
                          <tr>
                            <th scope="col">Asunto</th>
                            <th scope="col">Fecha</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach ($correos as $correo)
                          <tr>
                            <td>{{$correo->asunto}}</td>
                            <td>{{$correo->fecha}}</span></td>
                          </tr>
                        @endforeach
                        </tbody>
                      </table>
                </div>
                @endif
                <form id="form-envio" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="correo">Correo</label>
                        <input type="email" class="form-control" id="correo" name="correo" value="{{$pedido->email}}" placeholder="Correo">

                    </div>
                    <div class="form-group">
                        <label for="status">Seleccionar Asunto</label>
                        <select name="asunto" id="asunto" class="form-control">
                            <option value="">Seleccionar</option>
                            <option value="Envio">Envio de pedido</option>
                            <option value="Cancelacion">Cancelacion de pedido</option>
                            <option value="Personalizado">Personalizar</option>
                        </select>
                    </div>
                    <div class="personalizar d-none">
                        <div class="form-group">
                            <label for="asunto_personalizado">Asunto</label>
                            <input type="text" class="form-control" id="asunto_personalizado" name="asunto_personalizado" placeholder="Asunto">
                        </div>
                        <div class="form-group">
                            <label for="mensaje">Mensaje</label>
                            <textarea class="form-control" id="mensaje" name="mensaje" rows="3" placeholder="Mensaje"></textarea>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button id="modalclick" data-action="{{route('pedido.enviar', $pedido->id)}}" data-form="#form-envio"
                    data-method="POST" data-container="#listado" type="button" class="btn btn-primary store">Enviar</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<script src="{{asset('js/store.js')}}"></script>
<script>
    $('document').ready(function () {
        $('select').selectpicker();
        $('#modal-edit').modal('toggle');
        $("#modalclick").click(function () {
            $("#modal-edit").modal("hide");
        });
        $('#asunto').on('change', function () {
            if ($(this).val() == 'Personalizado') {
                $('.personalizar').removeClass('d-none');
            }
            else {
                $('.personalizar').addClass('d-none');
            }
        });
    });
</script>
