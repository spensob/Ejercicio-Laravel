<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empleados de {{ $oficina->nombre }}</title>
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">

</head>
<body>
    <div class="container">
        <h1>Empleados de {{ $oficina->nombre }}</h1>
        <a href="{{ route('oficinas.empleados.create', $oficina) }}">Añadir empleado</a>
        <a href="{{ route('oficinas.index') }}">Volver</a>
        
        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif
        <table class="table">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>DNI</th>
                    <th>Email</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($empleados as $empleado)
                    <tr>
                        <td>{{ $empleado->nombre }}</td>
                        <td>{{ $empleado->apellido1 }} {{ $empleado->apellido2 }}</td>
                        <td>{{ $empleado->dni }}</td>
                        <td>{{ $empleado->email }}</td>
                        <td><a href="{{ route('oficinas.empleados.edit', [$oficina, $empleado]) }}">Editar</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
