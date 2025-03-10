@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Añadir empleado</title>
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Añadir empleado a {{ $oficina->nombre }}</h1>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
        <form action="{{ route('oficinas.empleados.store', $oficina) }}" method="POST">
            @csrf
            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre" value="{{ old('nombre') }}" required>

            <label for="apellido1">Primer apellido</label>
            <input type="text" id="apellido1" name="apellido1" value="{{ old('apellido1') }}" required>

            <label for="apellido2">Segundo apellido</label>
            <input type="text" id="apellido2" name="apellido2" value="{{ old('apellido2') }}">

            <label for="rol">Rol</label>
            <input type="text" id="rol" name="rol" value="{{ old('rol') }}">

            <label for="fecha_nacimiento">Fecha de nacimiento (YYYY-MM-DD)</label>
            <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" value="{{ old('fecha_nacimiento') }}">

            <label for="dni">DNI</label>
            <input type="text" id="dni" name="dni" value="{{ old('dni') }}" required>

            <label for="email">Email</label>
            <input type="text" id="email" name="email" value="{{ old('email') }}" required>

            <button type="submit">Añadir empleado</button>
        </form>
    </div>
</body>
</html>
