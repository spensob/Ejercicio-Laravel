@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar empleado</title>
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">

</head>
<body>
    <div class="container">
        <h1 class="text-center m-5">Editar empleado</h1>
        <ul>
            @foreach ($errors->all() as $error)
                <li class="bg-primary m-2 text-white p-2">{{$error}}</li>
            @endforeach
        </ul>
        <form action="{{ route('oficinas.empleados.update', [$oficina, $empleado]) }}" method="POST">
            @csrf
            @method('PUT')
            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre" value="{{ old('nombre', $empleado->nombre) }}" required>

            <label for="apellido1">Primer apellido</label>
            <input type="text" id="apellido1" name="apellido1" value="{{ old('apellido1', $empleado->apellido1) }}" required>

            <label for="apellido2">Segundo apellido</label>
            <input type="text" id="apellido2" name="apellido2" value="{{ old('apellido2', $empleado->apellido2) }}">

            <label for="rol">Rol</label>
            <input type="text" id="rol" name="rol" value="{{ old('rol', $empleado->rol) }}">

            <label for="fecha_nacimiento">Fecha de nacimiento (YYYY-MM-DD)</label>
            <input type="text" id="fecha_nacimiento" name="fecha_nacimiento" value="{{ old('fecha_nacimiento', $empleado->fecha_nacimiento) }}">

            <label for="dni">DNI</label>
            <input type="dni" id="dni" name="dni" value="{{ old('dni', $empleado->dni) }}" required>

            <label for="email">Email</label>
            <input type="text" id="email" name="email" value="{{ old('email', $empleado->email) }}" required>

            <button type="submit">Actualizar empleado</button>
        </form>
    </div>
</body>
</html>
