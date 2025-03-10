@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Añadir oficina</title>
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">

</head>

<body>
    <div class="container">
        <h1>Añadir oficina</h1>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
        <form action="{{ route('oficinas.store') }}" method="POST">
            @csrf

            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre" value="{{ old('nombre') }}" required>

            <label for="direccion">Dirección</label>
            <input type="text" id="direccion" name="direccion" value="{{ old('direccion') }}">

            <button type="submit">Crear oficina</button>
        </form>
    </div>
</body>

</html>
