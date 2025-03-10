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
        <h1 class="text-center m-5">Añadir empleado a {{ $oficina->nombre }}</h1>
        <ul>
            @foreach ($errors->all() as $error)
                <li class="bg-primary m-2 text-white p-2">{{$error}}</li>
            @endforeach
        </ul>
        <form action="{{ route('oficinas.empleados.store', $oficina) }}" method="POST" class="needs-validation" novalidate>
            @csrf
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="{{ old('nombre') }}" required>
            </div>

            <div class="mb-3">
                <label for="apellido1" class="form-label">Primer apellido</label>
                <input type="text" class="form-control" id="apellido1" name="apellido1" value="{{ old('apellido1') }}" required>
            </div>

            <div class="mb-3">
                <label for="apellido2" class="form-label">Segundo apellido</label>
                <input type="text" class="form-control" id="apellido2" name="apellido2" value="{{ old('apellido2') }}">
            </div>

            <div class="mb-3">
                <label for="rol" class="form-label">Rol</label>
                <input type="text" class="form-control" id="rol" name="rol" value="{{ old('rol') }}">
            </div>

            <div class="mb-3">
                <label for="fecha_nacimiento" class="form-label">Fecha de nacimiento (YYYY-MM-DD)</label>
                <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" value="{{ old('fecha_nacimiento') }}">
            </div>

            <div class="mb-3">
                <label for="dni" class="form-label">DNI</label>
                <input type="text" class="form-control" id="dni" name="dni" value="{{ old('dni') }}" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Añadir empleado</button>
        </form>
    </div>
</body>
</html>
