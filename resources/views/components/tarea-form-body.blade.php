@csrf
<div class="container__sections">
    <div class="container__section">
        <label for="InputNombre" class="section__label">* Nombre de la tarea</label>
        <input type="text" id="InputNombre" name="nombre" placeholder="Nombre..."
            value="{{ old('nombre', $tarea->nombre) }}">
    </div>
    <div class="container__section-checkbox">
        <label for="InputFinalizada" class="section__label">* Finalizada</label>
        <input type="checkbox" name="finalizada" id="InputFinalizada" value="1" @checked(old('finalizada',
            $tarea->finalizada))>
    </div>
    <div class="container__section">
        <label for="SelectUrgencia" class="section__label">* Urgencia</label>
        <select id="SelectUrgencia" name="urgencia">
            @for ($x = 0; $x < count($urgencias); $x++) <option value="{{ $x }}" @selected(old('urgencia', $tarea->
                urgencia) == $urgencias[$x] )>{{ $urgencias[$x] }}</option>
                @endfor
        </select>
    </div>
    <div class="container__section">
        <label for="InputFechaLimite" class="section__label">* Fecha Limite</label>
        <input type="datetime-local" id="InputFechaLimite" name="fecha_limite"
            value="{{ old('fecha_limite', $tarea->fecha_limite->format('Y-m-d\TH:i')) }}">
    </div>
    <div class="container__section">
        <label for=" TextAreaDescripcion" class="section__label">* Descripcion</label>
        <textarea name="descripcion" id="TextAreaDescripcion" cols="30"
            rows="10">{{ old('descripcion', $tarea->descripcion) }}</textarea>
    </div>
    <div class="container__section">
        <button class="btn" type="submit">Guardar</button>
    </div>
</div>
