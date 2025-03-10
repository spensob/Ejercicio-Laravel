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
        <h1 class="text-center m-5">Añadir oficina</h1>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
        <form action="{{ route('oficinas.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="nombre" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Dirección</label>
                <input type="text" name="direccion" class="form-control" id="exampleInputPassword1">
            </div>
            <button type="submit" class="btn btn-primary">Crear oficina</button>
        </form>
    </div>
</body>

</html>
