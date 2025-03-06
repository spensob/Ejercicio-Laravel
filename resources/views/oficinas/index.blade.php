<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de oficinas</title>

</head>
<body>
    <div class="container">
        <h1>Listado de oficinas</h1>
        <a href="{{ route('oficinas.create') }}">Crear nueva oficina</a>
        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Dirección</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($oficinas as $oficina)
                <tr>
                    <td>{{ $oficina->id }}</td>
                    <td>{{ $oficina->nombre }}</td>
                    <td>{{ $oficina->direccion }}</td>
                    <td>
                        <a href="{{ route('oficinas.show', $oficina) }}">Ver</a>
                        <a href="{{ route('oficinas.empleados.index', $oficina) }}">Empleados</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>