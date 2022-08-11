@extends('tema.app')

@section('title', "Tarea")

@section('contenido')
<div class="container__show">
    <h3>
        <i>Nombre : {{ $tarea->nombre }}</i>
    </h3>
    <ul class="container__show-list">
        <li>
            Finalizada :  <strong>{{ $tarea->estaFinalizada() }}</strong>
        </li>
        <li>
            Urgencia :  <strong>{{ $tarea->urgencia() }}</strong>
        </li>
        <li>
            Fecha Limite :  <strong>{{ $tarea->fecha_limite->format('H:i d / m / Y') }}</strong>
        </li>
        <li>Descripcion : 
            {{ $tarea->descripcion }}
        </li>
    </ul>
    <form class="form__delete" action="{{ route('tarea.destroy', $tarea) }}" method="post">
        @csrf
        @method('delete')
        <button class="btn" type="submit">Eliminar</button>
    </form>
</div>
    
@endsection
