@extends('adminlte::page')
@section('title', 'Panel Admin')

@section('content_header')
<h1>Categorías</h1>
@stop

@section('content')

<div class="col-12">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-12">
                    <a href="{{route('admin.categoria.create')}}" class="btn btn-success float-right js-remote-a" data-to="modal-edit">
                        <i class="fas fa-plus"></i>
                        Nueva Categoría
                    </a>
                </div>
            </div>
        </div>
        <div id="listado" class="card-body table-responsive">
            @include('admin.categoria.listado')
        </div>
    </div>
</div>

<div id="modal-edit"></div>

@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script src="{{asset('js/main.js')}}"></script>
<script src="{{asset('js/datatable.js')}}"></script>
<script>
    $(document).ready(function() {
        $('.eliminar').on('click', function(e) {
            e.preventDefault();
            var form = $(this).parents('form');
            Swal.fire({
                title: '¿Estás seguro?',
                text: "¡No podrás revertir esto!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: '¡Sí, bórralo!'
            }).then((result) => {
                if (result.value) {
                    form.submit();
                }
            });
        });
} );
</script>
@stop
