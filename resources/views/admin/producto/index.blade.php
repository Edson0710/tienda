@extends('adminlte::page')
@section('title', 'Panel Admin')

@section('content_header')
<h1 class="ml-2">Productos</h1>
@stop

@section('content')

<div class="col-12" id="contenedor" class="my-5">
    <a class="btn btn-primary create" href="{{route('productos.create')}}" data-to="modal">Crear</a>
    <div id="listado" class="pb-3">
        @include('admin.producto.listado')
    </div>
</div>

@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
<script src="{{asset('js/create.js')}}"></script>
{{-- <script src="https://code.jquery.com/jquery-3.5.1.js" crossorigin="anonymous"></script> --}}
@stop
@stack('scripts')
