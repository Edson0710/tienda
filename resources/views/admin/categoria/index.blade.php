@extends('adminlte::page')
@section('title', 'Panel Admin')

@section('content_header')
<h1 class="ml-2">Categorías</h1>
@stop

@section('content')

<div class="col-12" id="contenedor">
    <a class="btn btn-primary create" href="{{route('categorias.create')}}" data-to="modal">Crear</a>
    <div id="listado">
        @include('admin.categoria.listado')
    </div>
</div>

@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script src="{{asset('js/create.js')}}"></script>
{{-- <script src="https://code.jquery.com/jquery-3.5.1.js" crossorigin="anonymous"></script> --}}
@stop
@stack('scripts')
