<div class="container">
    <div class="container__index">
        <input type="text" class="form-control" placeholder="Buscar..." wire:model="busqueda">
        <select name="" id="" wire:model="paginacion">
            <option value="5">5</option>
            <option value="25">25</option>
            <option value="50">50</option>
            <option value="100">100</option>
        </select>
    </div>
    <table class="container__table">
        <thead>
            <tr>
                <th class="table__header">
                    Nombre
                </th>
                <th>
                    Finalizada
                </th>
                <th>
                    Urgencia
                </th>
                <th>
                    Fecha Limite
                </th>
                <th>
                    Descripcion
                </th>
                <th>
                    Opciones
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tareas as $tarea)
            <tr>
                <td>
                    {{ $tarea->nombre }}
                </td>
                <td>
                    {{ $tarea->estaFinalizada() }}
                </td>
                <td>
                    {{ $tarea->urgencia() }}
                </td>
                <td>
                    {{ $tarea->fecha_limite->format('H:i d / m / y') }}
                </td>
                <td>
                    {{ $tarea->descripcion }}
                </td>
                <td class="table__options">
                    <a href="{{ route('tarea.edit', $tarea) }}">Editar Tarea</a>
                    <a href="{{ route('tarea.show', $tarea) }}">Ver Tarea</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="pagination__links">
        {{ $tareas->links('custom-pagination') }}
    </div>
</div>
