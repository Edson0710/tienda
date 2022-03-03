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
                    <a href="{{route('admin.categoria.create')}}" class="btn btn-success float-right" data-toggle="modal" data-target="#modal-lg">
                        <i class="fas fa-plus"></i>
                        Nueva Categoría
                    </a>
                </div>
            </div>
        </div>
        @include('layouts.alerts')
        <div class="card-body table-responsive">
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
                                <a href="" class="btn btn-warning btn-sm">
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
        </div>
    </div>
</div>

@include('admin.categoria.create')
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
$(document).ready(function() {
    console.log("test");
    $('#example').DataTable({
        dom: 'Bfrtip',
        language: {
            search: "Buscar:",
            oPaginate: {
                sFirst: "Primero",
                sLast: "Último",
                sNext: "Siguiente",
                sPrevious: "Anterior"
            },
            sInfo: "Mostrando _START_ a _END_ de _TOTAL_ registros",
        },
        responsive: true,
    });
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
