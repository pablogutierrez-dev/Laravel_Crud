<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
    @livewireStyles
    <title>
        @yield('title')
    </title>
</head>

<body>
    <div class="container">
        <h1 class="container__title">Laravel CRUD</h1>
        <div class="container__links">
            <a href="/" class="container__link">Pagina Inicio</a>
            <a href="{{ route('tarea.create') }}" class="container__link">Crear Nueva Tarea</a>
            <a href="{{ route('tarea.index') }}" class="container__link">Listado de Tareas</a>
        </div>
        @yield('contenido')
    </div>
    @livewireScripts
</body>
</html>
