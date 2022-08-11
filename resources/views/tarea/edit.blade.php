@extends('tema.app')

@section('title', "Editar Tarea")

@section('contenido')
<div class="container__edit">
    <h3>Editar Tarea -->
        <i>"{{ $tarea->nombre }}"</i>
    </h3>
</div>
<form action="{{ route('tarea.update', $tarea) }}" method="POST">
    @method('put')
    <x-tarea-form-body :tarea="$tarea"/>
</form>
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
@endsection