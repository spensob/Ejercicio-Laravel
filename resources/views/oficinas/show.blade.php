@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles de la oficina</title>
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">

</head>
<body>
    <div class="container">
        <h1 class="text-center m-5">Detalles de la oficina</h1>
        <div class="card">
            <h2>{{ $oficina->nombre }}</h2>
            <p><b>Dirección:</b> {{ $oficina->direccion }}</p>
            <a href="{{ route('oficinas.empleados.index', $oficina) }}">Ver empleados</a>
            <a href="{{ route('oficinas.index') }}">Volver</a>
        </div>
    </div>
</body>
</html>
