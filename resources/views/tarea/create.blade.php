@extends('tema.app')

@section('title', "Crear Tarea")

@section('contenido')
<h3 class="container__title">Registra tu Tarea</h3>
<form action="{{ route('tarea.store') }}" method="POST">
    <x-tarea-form-body/>
</form>
@if ($errors->any())
<div>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
@endsection
